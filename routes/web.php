<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\classController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'name' => 'cara irpan',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semagka', 'kiwi']
    ]);
});


Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [classController::class, 'index']);

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/coba', function() {
//     return 'welcome';
// });

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'cara irpan', 'phone' => '082133666346']);
// });

// // Route::view('/contact', 'contact', ['name' => 'cara irpan', 'phone' => '082133666346']);

// // Route::redirect('/contact', '/contact-us');

// Route::get('/product', function() {
//     return 'product';
// });

// Route::get('/product/{id}', function($id) {
//     return view('product.detail', ['id' => $id]);
// });

// Route::prefix('disini')->group(function () {
//     Route::get('/profil-admin', function() {
//         return 'profil admin';
//     });
//     Route::get('/about-admin', function() {
//         return 'about admin';
//     });
//     Route::get('/contact-admin', function() {
//         return 'contact admin';
//     });
//     Route::get('/profil-admin2', function() {
//         return 'profil admin';
//     });
//     Route::get('/about-admin2', function() {
//         return 'about admin';
//     });
//     Route::get('/contact-admin2', function() {
//         return 'contact admin';
//     });
// });