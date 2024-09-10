<?php
use Illuminate\Support\Facades\Route;

     Route::get('/', function () {
return view('homepage');
});

Route::get('/doctors', function () {
return 'Doctors Page';
});

Route::get('/patients', function () {
return 'Patients Page';
});

Route::get('/appointments', function () {
return 'Appointments Page';
});

Route::get('/visits', function () {
return 'Visits Page';
});

Route::get('/lab-technicians', function () {
return 'Lab Technicians Page';
});

Route::get('/lab-tests', function () {
return 'Lab Tests Page';
});

Route::get('/pharmacists', function () {
return 'Pharmacists Page';
});

Route::get('/prescriptions', function () {
return 'Prescriptions Page';
});

Route::get('/cashiers', function () {
return 'Cashiers Page';
});

Route::get('/payments', function () {
return 'Payments Page';
});

Route::get('/services', function () {
return 'Services Page';
});

Route::get('/receptionists', function () {
return 'Receptionists Page';
});
