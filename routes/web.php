<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'Testimonials\TestimonialController@index')->name('home');
    Route::get('/superbroom/admin','Testimonials\TestimonialController@index');
    Route::get('/superbroom/admin/testimonial-form','Testimonials\TestimonialController@testimonialForm');
    Route::post('testimonial/post','Testimonials\TestimonialController@postTestimonial');
    Route::get('testimonial/edit/{testimonial}','Testimonials\TestimonialController@editTestimonial');
    Route::post('testimonial/delete/{testimonial}','Testimonials\TestimonialController@deleteTestimonial');

    Route::get('superbroom/admin/notifications','NotificationsController@notificationsView');
    Route::post('mark-as-read','NotificationsController@markNotification');
    Route::get('superbroom/admin/messages','Messages\MessageController@viewMessages');
    Route::post('message/delete/{message}','Messages\MessageController@deleteMessage');
    Route::get('superbroom/admin/quotations','Quotations\QuotationController@viewQuotations');
    Route::post('quotation/delete/{quotation}','Quotations\QuotationController@deleteQuotation');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function (){
    return view('about');
});

Route::get('/services',function (){
    return view('services');
});

Route::get('/contacts',function (){
    return view('contactUs');
});

Route::post('message/post','Messages\MessageController@postMessage');

Route::post('quotation/post','Quotations\QuotationController@postQuotation');


