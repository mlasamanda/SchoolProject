<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Learning;
use App\Http\Controllers\Admission;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewEvent;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MessageController;
use App\http\Controllers\TeachersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\UserProfile;
use App\Http\Controllers\SubjectController;

  
Route::get('/', function () {
    return view('master');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('news',NewEvent::class);
    Route::resource('learning',Learning::class);
    Route::resource('contact',ContactUsController::class);
    Route::resource('abouts',AboutController::class);
    Route::resource('admission',Admission::class);
    Route::resource('image',GalleryController::class);
    Route::resource('master',MasterController::class);
    Route::resource('subject',SubjectController::class);
    Route::get('/contact', [Contact::class, 'index'])->name('getContact');
    Route::get('/saveContract',[Contact::class,''])->name('save');
    Route::resource('message',MessageController::class);
    Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
   
    Route::resource('books', BookController::class);
    Route::resource('students',StudentsController::class);
    Route::resource('teachers',TeachersController::class);
    Route::resource('change',ChangePassword::class);
    Route::get('/myprofile',[UserProfile::class,'profile'])->name('myprofile');

    
});