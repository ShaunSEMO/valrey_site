<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\User;
use App\Models\Value;
use App\Models\Stats;
use App\Models\Project;
use App\Models\Project_img;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Contact;
use App\Models\Social_link;
use App\Models\Post;
use App\Models\Picture;
use App\Models\GalleryEvent;
use DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        $users = User::all();
        $projects = Project::all();
        $team_members = TeamMember::all();
        $posts = Post::all();

        return view('dashboard.index', compact(['users', 'projects', 'team_members', 'posts']));
    }

    
    /*--------
    About CRUD 
    --------*/

    public function about(){
        $about_info = Abouts::first();
        $values = Value::get();
        $stats = Stats::get();

        return view('dashboard.about', compact(['about_info', 'values', 'stats']));
    }

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'desc' => 'required',
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/aboutimages', $filenameWithExt);
        } else {
            $fileNameToStore = 'No image here.';
        }

        $about = Abouts::find($id);
        $about->image = 'storage/img/aboutimages/'.$request->file('image')->getClientOriginalName();
        $about->desc = $request->input('desc');
        $about->save();

        return redirect('/$d_bu$!n3$$_d@$h/about');
    }

    public function updateValue(Request $request ,$id) {
        $value = Value::find($id);
        $value->value = $request->input('value');
        $value->desc = $request->input('desc');
        $value->save();

        return redirect('/$d_bu$!n3$$_d@$h/about');
    }

    public function updateStat(Request $request ,$id) {
        $stat = Stats::find($id);
        $stat->stat_num = $request->input('stat_num');
        $stat->title = $request->input('title');
        $stat->save();

        return redirect('/$d_bu$!n3$$_d@$h/about');
    }


    /*-----------
    Portfolio CRUD
    -----------*/
    public function portfolio() {
        $projects = Project::all();
        $testimonials = Testimonial::all();

        return view('dashboard.portfolio', compact(['projects', 'testimonials']));
    }

    public function addProject() {
        return view('dashboard.portfolio.add.1addProject');
    }

    public function storeProject(Request $request) {

            $this->validate($request, [
                'title' => 'required',
                'date' => 'required',
            ]);

            $project_title = $request->input('title');
            $project_desc = $request->input('desc');
            $project_date = $request->input('date');
            
        return view('dashboard.portfolio.add.2saveImages', compact(['project_title', 'project_desc', 'project_date']));

    }

    public function saveProject(Request $request) {
        $this->validate($request, [
            'image' => 'required',
        ]);

        $project = new Project;
        $project->title = $request->input('project_title');
        $project->desc = $request->input('project_desc');
        $project->date = $request->input('project_date');
        $project->save();
        
        $images = $request->file('image');


            foreach($images as $image):              
                
                $imageName = $image->getClientOriginalName();
                $path = $image->storeAs('public/img/project_images', $imageName);

                $project_image = new Project_img;
                $project_image->project_id = $project->id;
                $project_image->image = 'storage/img/project_images/'.$imageName;
                $project_image->save();

            endforeach;

        return redirect('/$d_bu$!n3$$_d@$h/portfolio');
    }

    public function editProject(Request $request, $id) {
        $project = Project::find($id);

        return view('dashboard.portfolio.edit.1editProject', compact(['project']));
    }

    public function storeUpdateProject(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
        ]);
        
        $project_id = $id;
        $project_title = $request->input('title');
        $project_desc = $request->input('desc');
        $project_date = $request->input('date');
        
        $project_images = DB::table('project_imgs')->where('project_id', $project_id)->get();

        return view('dashboard.portfolio.edit.2editImages', compact(['project_images','project_id','project_title', 'project_desc', 'project_date']));

    }

    public function deleteImage(Request $request, $id) {
        $image = Project_img::find($request->input('img_id'));
        $image->delete();

        $project_id = $id;

        return redirect('/$d_bu$!n3$$_d@$h/projects/'.$project_id.'/store-update');
    }

    public function updateProject(Request $request, $id) {

        $project = Project::find($id);
        $project->title = $request->input('project_title');
        $project->desc = $request->input('project_desc');
        $project->date = $request->input('project_date');
        $project->save();
        
        $images = $request->file('image');

        if($images!=null):
            foreach($images as $image):              
                
                $imageName = $image->getClientOriginalName();
                $path = $image->storeAs('public/img/project_images', $imageName);

                $project_image = new Project_img;
                $project_image->project_id = $id;
                $project_image->image = 'storage/img/project_images/'.$imageName;
                $project_image->save();

            endforeach;
        endif;
            
        return redirect('/$d_bu$!n3$$_d@$h/portfolio');
    }

    public function deleteProject($id) {

        $project = Project::find($id);
        $project->delete();
        $project_images = DB::table('project_imgs')->where('project_id', $id);
        $project_images->delete();

        return redirect('/$d_bu$!n3$$_d@$h/portfolio');

    }

    /*-----------
    Testimonial CRUD
    -----------*/

    public function addTestimonial() {
        return view('dashboard.portfolio.addTestimonial');
    }

    public function saveTestimonial(Request $request){
        $testimonial = new Testimonial;

        $testimonial->name = $request->input('name');

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/store_img/testimonials', $filenameWithExt);

            $testimonial->image = 'storage/store_img/testimonials/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $testimonial->desc = $request->input('desc');
        $testimonial->save();

        return redirect('/$d_bu$!n3$$_d@$h/portfolio');
    }

    public  function editTestimonial(Request $request, $id) {
        $testimonial = Testimonial::find($id);
        return view('dashboard.portfolio.editTestimonial', compact(['testimonial']));
    }

    public function updateTestimonial(Request $request, $id){
        $testimonial = Testimonial::find($id);

        $testimonial->name = $request->input('name');

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/store_img/testimonials', $filenameWithExt);

            $testimonial->image = 'storage/store_img/testimonials/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $testimonial->desc = $request->input('desc');
        $testimonial->save();

        return redirect('/$d_bu$!n3$$_d@$h/portfolio');
    }

    public function deleteTestimonial($id){
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect('/$d_bu$!n3$$_d@$h/portfolio');
    }

    /*--------
    Team CRUD 
    --------*/

    public function team() {
        $members = TeamMember::get();

        return view('dashboard.team', compact(['members']));
    }

    public function addMember() {
        return view('dashboard.team.addMember');
    }

    public function saveMember(Request $request) {
        $member = new TeamMember;

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->desc = $request->input('desc');
        $member->save();

        return redirect('/$d_bu$!n3$$_d@$h/team');
    }


    public function editMember($id) {
        $member = TeamMember::find($id);

        return view('dashboard.team.editMember', compact(['member']));
    }

    public function updateMember(Request $request, $id){
        $member = TeamMember::find($id);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->desc = $request->input('desc');
        $member->save();

        return redirect('/$d_bu$!n3$$_d@$h/team');
    }

    public function deleteMember($id) {
        $member = TeamMember::find($id);
        $member->delete();
        return redirect('/$d_bu$!n3$$_d@$h/team');
    }

    
    /*--------
    Contact CRUD 
    --------*/
    public function contacts() {
        $contacts = Contact::get();
        $social_links = Social_link::get();

        return view('dashboard.contact', compact(['contacts', 'social_links']));
    }

    public function addContact() {
        return view('dashboard.contact.addContact');
    }

    public function saveContact(Request $request) {
        $contact = new Contact;
        $contact->number = $request->input('phone_number');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->save();

        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

    public function editContact($id) {
        $contact = Contact::find($id);
        return view('dashboard.contact.editContact', compact(['contact']));
    }

    public function updateContact(Request $request, $id) {
        $contact = Contact::find($id);
        $contact->number = $request->input('phone_number');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->save();

        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

    public function addSocialLink() {
        return view('dashboard.contact.addSocialLink');
    }

    public function saveSocialLink(Request $request) {
        $social_link = new Social_link;
        $social_link->platform = $request->input('platform');
        $social_link->link = $request->input('link');
        $social_link->save();

        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

    public function editSocialLink($id) {
        $social_link = Social_link::find($id);
        return view('dashboard.contact.editSocialLink', compact(['social_link']));
    }

    public function updateSocialLink(Request $request, $id) {
        $social_link = social_link::find($id);
        $social_link->platform = $request->input('platform');
        $social_link->link = $request->input('link');
        $social_link->save();

        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

    public function deleteSocialLink($id){
        $social_link = Social_link::find($id);
        $social_link->delete();
        return redirect('/$d_bu$!n3$$_d@$h/contacts');
    }

        /*--------
    Blog CRUD
    ---------*/

    public function blog() {
        $posts = Post::all();
        return view('dashboard.blog', compact(['posts']));
    }

    public function blogRead($id) {
        $post = Post::find($id);
        return view('dashboard.blogRead', compact(['post']));
    }

    public function createPost()
    {
        return view('dashboard.blog.createPost');
    }

    public function savePost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
            'title' => 'required',
            'body' => 'required',
        ]);
        
        //File uploading
        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);
        } else {
            $fileNameToStore = 'No image here.';
        }

        //Create post
        $post = new Post;
        $post->image = 'storage/img/blogimages/'.$request->file('image')->getClientOriginalName();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/$d_bu$!n3$$_d@$h/blog');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.blog.editPost', compact(['post']));

    }

    public function updatePost(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/blogimages', $filenameWithExt);

        } else {
            $fileNameToStore = 'No image here.';
        }

        $post = Post::find($id);
        $img = $request->file('image');
        if ($img != null) {
            $post->image = 'storage/img/blogimages/'.$img->getClientOriginalName();
        } else {
            $post->image = $post->image;
        }
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/$d_bu$!n3$$_d@$h/blog');
    }

    public function destroyPost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/$d_bu$!n3$$_d@$h/blog');
    }

        /*--------
    Gallery CRUD
    ---------*/
    public function gallery() {
        $pictures = Picture::all();
        $gallery_event = GalleryEvent::all();
        return view('dashboard.gallery', compact(['pictures', 'gallery_event']));
    }

    public function createGallery(Request $request) {
        return view('dashboard.gallery.createGallery');
    }

    public function addPicture($id)
    {
        return view('dashboard.gallery.createpicture',compact(['id']));
    }

    public function storePicture(Request $request) {
        if ($request->file('image')>0) {

            $images = $request->file('image');

            foreach($images as $image):

                $picture = new Picture;
                $picture->gallery_event_id = $request->input('gallery_id');
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs('public/store_img/gallery', $filenameWithExt);
                $picture->image = 'storage/store_img/gallery/'.$image->getClientOriginalName();
                $picture->save();

            endforeach;
        }
         else {
            return redirect('/$d_bu$!n3$$_d@$h/gallery');
        }

        return redirect('/$d_bu$!n3$$_d@$h/gallery'); 
    }

    public function storeGallery(Request $request) {
        if (count(DB::table('gallery_events')->where('name', $request->input('gallery_name'))->get()) == 0) {
            $gallery = new GalleryEvent;
            $gallery->name = $request->input('gallery_name');
            $gallery->save();
        } else if (count(DB::table('gallery_events')->where('name', $request->input('gallery_name'))->get()) == 1) {
            $gallery = DB::table('gallery_events')->where('name', $request->input('gallery_name'))->first();
        }
        
        if ($request->file('image')>0) {

            $images = $request->file('image');

            foreach($images as $image):

                $picture = new Picture;
                $picture->gallery_event_id = $gallery->id;
                $filenameWithExt = $image->getClientOriginalName();
                $path = $image->storeAs('public/store_img/gallery', $filenameWithExt);
                $picture->image = 'storage/store_img/gallery/'.$image->getClientOriginalName();
                $picture->save();

            endforeach;
        }
         else {
            return redirect('/$d_bu$!n3$$_d@$h/gallery');
        }

        return redirect('/$d_bu$!n3$$_d@$h/gallery');
    }

    public function updateGalleryName($id, Request $request) {
        $gallery = GalleryEvent::find($id);
        $gallery->name = $request->input('gallery_name');
        $gallery->save();
        return redirect('/$d_bu$!n3$$_d@$h/gallery');
    }

    public function deleteGallery($id) {
        $gallery = GalleryEvent::find($id);
        foreach ($gallery->pictures as $picture) {
            $picture->delete();
        }
        $gallery->delete();
        return redirect('/$d_bu$!n3$$_d@$h/gallery');
    }

    public function deletePicture($id) {
        $picture = Picture::find($id);
        $picture->delete();
        return redirect('/$d_bu$!n3$$_d@$h/gallery');
    }
}

