<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/manage-appointment', [AppointmentController::class, 'manageAppointment'])->name('manage-appointment');

Route::post('/get-appointment-email', [AppointmentController::class, 'getAppointmentEmail'])->name('get-appointment-email');
Route::get('/appointmentDetails/{id}', [AppointmentController::class, 'appointmentDetails'])->name('appointmentDetails');

// Route::get('/manage-appointment', function () {
    
    
    
// })->name('manage-appointment');

Route::get('/check-registration', function () {
    return view('propertyEvaul');
})->name('check-registration');


Route::get('/check-property', function () {
    return view('propertyEvaul2');
})->name('check-property');


Route::get('/your-evaluation', function () {
    return view('yourEvalua');
})->name('your-evaluation');


Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');


Route::get('/confirm-appointment', function () {
    return view('confirm');
})->name('confirm-appointment');


Route::get('/booked', function () {
    return view('booked');
})->name('booked');


Route::get('/complete-evaluation', function () {
    return view('complete-evaluation');
})->name('complete-evaluation');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');