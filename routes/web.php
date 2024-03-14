<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\DynamicController;
use App\Http\Controllers\FormController;

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


Route::get('/', [App\Http\Controllers\StaticController::class, 'index']);
Route::get('/contact-us', [App\Http\Controllers\StaticController::class, 'contact']);
Route::get('/about-us', [App\Http\Controllers\StaticController::class, 'about']);
Route::get('/careers', [App\Http\Controllers\StaticController::class, 'careers']);
Route::get('/services', [App\Http\Controllers\StaticController::class, 'services']);
Route::get('/our-team', [App\Http\Controllers\StaticController::class, 'team']);
Route::get('/products', [App\Http\Controllers\StaticController::class, 'products']);
Route::get('/privacy-policy', [App\Http\Controllers\StaticController::class, 'policy']);
Route::get('/terms-and-conditions', [App\Http\Controllers\StaticController::class, 'terms']);

Route::get('/cfsmag-ee', [App\Http\Controllers\StaticController::class, 'cfsmag_ee']);

Route::get('/blogs', [App\Http\Controllers\DynamicController::class, 'blog']);
Route::get('/blogs/{url}', [App\Http\Controllers\DynamicController::class, 'blog_post'])->name('blogs.single');
Route::get('/news-and-event', [App\Http\Controllers\DynamicController::class, 'news']);
Route::get('/news-and-event/{url}', [App\Http\Controllers\DynamicController::class, 'news_post'])->name('news.single');
Route::get('/case-studies', [App\Http\Controllers\DynamicController::class, 'case']);
Route::get('/case-study/{url}', [App\Http\Controllers\DynamicController::class, 'casesingle'])->name('case.single');
Route::post('demo-product',[App\Http\Controllers\FormController::class,'demoproduct']);
Route::post('/contact_us', [App\Http\Controllers\FormController::class, 'contact_us']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
