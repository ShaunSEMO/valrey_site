<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/gallery', [IndexController::class, 'gallery']);
Route::get('/gallery/{id}', [IndexController::class, 'viewImage']);
Route::get('/projects', [IndexController::class, 'projects']);
Route::get('/projects/{id}', [IndexController::class, 'viewProject']);
Route::get('/contact', [IndexController::class, 'contact']);

/*
-----------------------
| Universal Dashboard |
-----------------------
| Development Credenetials
| username: tshegofatsosemenya@gmail.com
| pass: m3zum0_130y
-----------------------
*/

// Authentication Routes...
Route::get('$d_bu$!n3$$_d@$h_login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('$d_bu$!n3$$_d@$h_login', [LoginController::class, 'login']);
Route::post('$d_bu$!n3$$_d@$h_logout', [LoginController::class, 'logout'])->name('logout');

Route::get('$d_bu$!n3$$_d@$h_register', [RegisterController::class,  'showRegistrationForm'])->name('register');
Route::post('$d_bu$!n3$$_d@$h_register', [RegisterController::class, 'register']);

// Route::get('$d_bu$!n3$$_d@$h_password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('$d_bu$!n3$$_d@$h_password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('$d_bu$!n3$$_d@$h_password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('$d_bu$!n3$$_d@$h_password/reset', 'Auth\ResetPasswordController@reset');

// Dashboard Routes...
Route::get('/$d_bu$!n3$$_d@$h', [DashboardController::class, 'index'])->name('dashboardIndex');

    // ABOUT
Route::get('/$d_bu$!n3$$_d@$h/about', [DashboardController::class, 'about'])->name('dashboardAbout');
Route::put('/$d_bu$!n3$$_d@$h/about/{about}', [DashboardController::class, 'updateAbout'])->name('updateAbout');
Route::put('/$d_bu$!n3$$_d@$h/values/{value}', [DashboardController::class, 'updateValue'])->name('updateValue');
Route::put('/$d_bu$!n3$$_d@$h/stats/{stat}', [DashboardController::class, 'updateStat'])->name('updateStat');

    // PORTFOLIO
Route::get('/$d_bu$!n3$$_d@$h/portfolio', [DashboardController::class, 'portfolio'])->name('dashboardPortfolio');
Route::get('/$d_bu$!n3$$_d@$h/project/add', [DashboardController::class, 'addProject'])->name('addProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/store', [DashboardController::class, 'storeProject'])->name('storeProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/save', [DashboardController::class, 'saveProject'])->name('saveProject');
Route::get('/$d_bu$!n3$$_d@$h/projects/{project}/edit', [DashboardController::class, 'editProject'])->name('editProject');
Route::get('/$d_bu$!n3$$_d@$h/projects/{project}/store-update', [DashboardController::class, 'storeUpdateProject'])->name('storeUpdateProject');
Route::post('/$d_bu$!n3$$_d@$h/projects/{project}/delete-image', [DashboardController::class, 'deleteImage'])->name('deleteImage');
Route::put('/$d_bu$!n3$$_d@$h/projects/{project}/update', [DashboardController::class, 'updateProject'])->name('updateProject');
Route::delete('/$d_bu$!n3$$_d@$h/projects/{project}/delete', [DashboardController::class, 'deleteProject'])->name('deleteProject');

    // TESTIMONIALS
Route::get('/$d_bu$!n3$$_d@$h/testimonials/add', [DashboardController::class, 'addTestimonial'])->name('addTestimonial');
Route::post('/$d_bu$!n3$$_d@$h/testimonials/save', [DashboardController::class, 'saveTestimonial'])->name('saveTestimonial');
Route::get('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/edit', [DashboardController::class, 'editTestimonial'])->name('editTestimonials');
Route::put('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/update', [DashboardController::class, 'updateTestimonial'])->name('updateTestimonial');
Route::delete('/$d_bu$!n3$$_d@$h/testimonials/{testimonial}/delete', [DashboardController::class, 'deleteTestimonial'])->name('deleteTestimonial');

    // TEAM
Route::get('/$d_bu$!n3$$_d@$h/team', [DashboardController::class, 'team'])->name('dashboardTeam');
Route::get('/$d_bu$!n3$$_d@$h/team/add', [DashboardController::class, 'addMember'])->name('addMember');
Route::post('/$d_bu$!n3$$_d@$h/team/save', [DashboardController::class, 'saveMember'])->name('saveMember');
Route::get('/$d_bu$!n3$$_d@$h/team/{member}/edit', [DashboardController::class, 'editMember'])->name('editMember');
Route::put('/$d_bu$!n3$$_d@$h/team/{member}/update', [DashboardController::class, 'updateMember'])->name('updateMember');
Route::delete('/$d_bu$!n3$$_d@$h/team/{member}/delete', [DashboardController::class, 'deleteMember'])->name('deleteMember');

//     // CONTACT
// Route::get('/$d_bu$!n3$$_d@$h/contacts', [DashboardController::class, 'contacts'])->name('dashboardContact');
// Route::get('/$d_bu$!n3$$_d@$h/contacts/add', [DashboardController::class, 'addContact'])->name('addContact');
// Route::post('/$d_bu$!n3$$_d@$h/contacts/save', [DashboardController::class, 'saveContact'])->name('saveContact');
// Route::get('/$d_bu$!n3$$_d@$h/contacts/{contact}/edit', [DashboardController::class, 'editContact'])->name('editContact');
// Route::put('/$d_bu$!n3$$_d@$h/contacts/{contact}/update', [DashboardController::class, 'updateContact'])->name('updateContact');
// Route::delete('/$d_bu$!n3$$_d@$h/contacts/{contact}/delete', [DashboardController::class, 'deleteContact'])->name('deleteContact');

// Route::get('/$d_bu$!n3$$_d@$h/contacts/add/social_link', [DashboardController::class, 'addSocialLink'])->name('addSocialLink');
// Route::post('/$d_bu$!n3$$_d@$h/contacts/save/social_link', [DashboardController::class, 'saveSocialLink'])->name('saveSocialLink');
// Route::get('/$d_bu$!n3$$_d@$h/contacts/{contact}/edit/social_link', [DashboardController::class, 'editSocialLink'])->name('editSocialLink');
// Route::put('/$d_bu$!n3$$_d@$h/contacts/{contact}/update/social_link', [DashboardController::class, 'updateSocialLink'])->name('updateSocialLink');
// Route::delete('/$d_bu$!n3$$_d@$h/contacts/{contact}/delete/social_link', [DashboardController::class, 'deleteSocialLink'])->name('deleteSocialLink');

     //BLOG
Route::get('/$d_bu$!n3$$_d@$h/blog', [DashboardController::class, 'blog'])->name('dashboardBlog');
Route::get('/$d_bu$!n3$$_d@$h/blog/{post}/read', [DashboardController::class, 'blogRead'])->name('dashboardBlogRead');
Route::get('/$d_bu$!n3$$_d@$h/blog/create', [DashboardController::class, 'createPost'])->name('createPost');
Route::post('/$d_bu$!n3$$_d@$h/blog/save', [DashboardController::class, 'savePost'])->name('savePost');
Route::get('/$d_bu$!n3$$_d@$h/blog/{blog}/edit', [DashboardController::class, 'edit'])->name('updatePost');
Route::put('/$d_bu$!n3$$_d@$h/blog/{blog}', [DashboardController::class, 'updatePost'])->name('updatePost');
Route::delete('/$d_bu$!n3$$_d@$h/blog/{blog}', [DashboardController::class, 'destroyPost'])->name('deletePost');


// GALLERY
Route::get('/$d_bu$!n3$$_d@$h/gallery', [DashboardController::class, 'gallery'])->name('dashboardGallery');
Route::get('/$d_bu$!n3$$_d@$h/gallery/createGallery', [DashboardController::class, 'createGallery'])->name('createGallery');
Route::get('/$d_bu$!n3$$_d@$h/gallery/{gallery_id}/addPicture', [DashboardController::class, 'addPicture'])->name('addPicture');
Route::post('/$d_bu$!n3$$_d@$h/gallery/storeGallery', [DashboardController::class, 'storeGallery'])->name('storeGallery');
Route::post('/$d_bu$!n3$$_d@$h/gallery/storePicture', [DashboardController::class, 'storePicture'])->name('storePicture');
Route::put('/$d_bu$!n3$$_d@$h/gallery/save/{gallery_name}', [DashboardController::class, 'updateGalleryName'])->name('updateGalleryName');
Route::delete('/$d_bu$!n3$$_d@$h/wholegallery/{whole_gallery}', [DashboardController::class, 'deleteGallery'])->name('deleteGallery');
Route::delete('/$d_bu$!n3$$_d@$h/gallery/{gallery}', [DashboardController::class, 'deletePicture'])->name('deletePicture');
