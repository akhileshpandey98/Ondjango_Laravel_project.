<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->name('login.blade.php');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup.blade.php');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.blade.php');
Route::get('/about', [HomeController::class, 'about'])->name('about_us.blade.php');
Route::get('/liveclass', [HomeController::class, 'liveclass'])->name('liveclass.blade.php');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog.blade.php');
Route::get('/course', [HomeController::class, 'course'])->name('course.blade.php');
Route::get('/laxicon', [HomeController::class, 'laxicon'])->name('laxicon.blade.php');
Route::get('/library', [HomeController::class, 'library'])->name('library.blade.php');
Route::get('/french', [HomeController::class, 'french'])->name('french.blade.php');
Route::get('/spanish', [HomeController::class, 'spanish'])->name('spanish.blade.php');
Route::get('/german', [HomeController::class, 'german'])->name('german.blade.php');
Route::get('/portuguese', [HomeController::class, 'portuguese'])->name('portuguese.blade.php');
Route::get('/basicprofile', [HomeController::class, 'basicprofile'])->name('basic_profile.blade.php');
Route::get('/notification', [HomeController::class, 'notification'])->name('notification.blade.php');
Route::get('/password', [HomeController::class, 'password'])->name('password.blade.php');


Route::get('/demo', function () 
{
    return view('demo');
});




// // header Layout
// Route::get('/header',[homeController::class,'header'])->name('latout.header');
// Route::get('/footer',[homeController::class,'footer'])->name('latout.footer');