<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stats;
use App\Models\Project;
use App\Models\Abouts;
use App\Models\Picture;
use DB;

class IndexController extends Controller
{
    public function index(){
        $stats = DB::table('stats')->get();
        $projects = Project::all();

        return view('site.index', compact(['stats', 'projects']));
    }

    public function about() {
        $abouts = Abouts::all();
        $stats = DB::table('stats')->get();
  
        return view('site.about', compact(['abouts', 'stats']));
    }

    public function gallery() {
        $pictures = DB::table('pictures')->orderBy('id', 'DESC')->paginate(6);

        return view('site.gallery', compact(['pictures']));
    }

    public function viewImage($id) {
        $picture = Picture::find($id);
        $pictures = DB::table('pictures')->orderBy('id', 'DESC')->paginate(6);
  
        return view('site.galleryView', compact(['picture', 'pictures']));   
    }

    public function projects() {
        $projects = Project::all();

        return view('site.projects', compact(['projects']));
    }

    public function viewProject($id) {
        $project = Project::find($id);
        $projectImages = DB::table('project_imgs')->where('project_id', $id)->get();
        

        return view('site.projectArticle', compact(['project', 'projectImages']));
    }

    public function contact() {
        return view('site.contact');
    }
}
