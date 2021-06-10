<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
/*Here will be examples of routs for contact form*/
// Route::post('/contact/submit', function () {
//     return 'OK';
// });
// Route::post('/contact/submit', function () {
//     return 'OK';
// })->name('contact-form');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('messages');

Route::get(
    '/contact/all/{id}',
     'App\Http\Controllers\ContactController@showPosts'
     )->name('posts');

Route::get(
    '/contact/all/{id}/update',
    'App\Http\Controllers\ContactController@postUpdate'
    )->name('post-update');

Route::post(
    '/contact/all/{id}/update',
    'App\Http\Controllers\ContactController@postUpdateSubmit'
    )->name('post-update-submit');

Route::get(
    '/contact/all/{id}/delete',
    'App\Http\Controllers\ContactController@postDelete'
    )->name('post-delete');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');