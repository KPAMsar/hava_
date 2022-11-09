<?php

use App\Http\Controllers\ahavaController;
use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[pageController::class,'index'])->name('index');
Route::get('/contact-us',[pageController::class,'contactUs'])->name('contactUs');
Route::get('/donate',[pageController::class,'donate'])->name('donate');
Route::get('/ahava-livelihood-and-social-mobility-program',[pageController::class,'ahavaLivelihood'])->name('livelihood');
Route::get('/living-for-a-course',[pageController::class,'livingForACourse'])->name('livingForACourse');
Route::get('/social-reform-program',[pageController::class,'socialProgamReform'])->name('socialProgamReform');
Route::get('/social-fund-management',[pageController::class,'socialFundManagement'])->name('socialFund');
Route::get('/team',[pageController::class,'team'])->name('team');
Route::get('/vison-and-mission',[pageController::class,'visionAndMission'])->name('visionAndMisson');
Route::get('/what-we-do',[pageController::class,'whatWeDo'])->name('whatWeDo');
Route::get('/who-are-we',[pageController::class,'whoWeAre'])->name('whoWeAre');
Route::get('/methodology',[pageController::class,'methodology'])->name('methodology');


Route::post('volunteer',[pageController::class,'volunteerF'])->name('volunteer');
Route::post('contact-us',[pageController::class,'contact'])->name('contact');
Route::get('comot',[ahavaController::class,'comot'])->name('comot');


Route::get('messages',[ahavaController::class,'messages'])->name('adminMessages');
Route::get('volunteers',[ahavaController::class,'volunteer'])->name('volunteerAdmin');





Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
