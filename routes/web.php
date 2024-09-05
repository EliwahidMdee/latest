<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Non\AppointmentController;
use App\Http\Controllers\Non\CashierController;
use App\Http\Controllers\Non\DoctorController;
use App\Http\Controllers\Non\HomeController;
use App\Http\Controllers\Non\LabTechnicianController;
use App\Http\Controllers\Non\LabTestController;
use App\Http\Controllers\Non\PatientController;
use App\Http\Controllers\Non\PaymentController;
use App\Http\Controllers\Non\PharmacistController;
use App\Http\Controllers\Non\PrescriptionController;
use App\Http\Controllers\Non\ReceptionistController;
use App\Http\Controllers\Non\ServiceController;
use App\Http\Controllers\Non\VisitController;
use Illuminate\Support\Facades\Route;


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin role
Route::group([], function () {
    Route::resource('appointments', AppointmentController::class);
    Route::resource('visits', VisitController::class);
Route::resource('patients', PatientController::class);
Route::resource('receptionists', ReceptionistController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('labtechnicians', LabTechnicianController::class);
Route::resource('pharmacists', PharmacistController::class);
Route::resource('cashiers', CashierController::class);
Route::resource('services', ServiceController::class);
Route::resource('labtests', LabTestController::class);
Route::resource('prescriptions', PrescriptionController::class);
Route::resource('payments', PaymentController::class);
});

// Doctor role
Route::group([], function () {
    Route::post('patients/{patient}/assign-doctor', [DoctorController::class, 'assignDoctor']);
    Route::post('patients/{patient}/update-symptoms', [DoctorController::class, 'updateSymptoms']);
});

// Lab Technician role
Route::group([], function () {
    Route::post('patients/{patient}/assign-tests', [LabTechnicianController::class, 'assignTests']);
    Route::post('patients/{patient}/update-results', [LabTechnicianController::class, 'updateResults']);
});

// Pharmacist role
Route::group([], function () {
    Route::post('patients/{patient}/assign-prescription', [PharmacistController::class, 'assignPrescription']);
});

// Cashier role
Route::group([], function () {
    Route::post('patients/{patient}/generate-bill', [CashierController::class, 'generateBill']);
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
});

// Receptionist role
Route::group([], function () {
    Route::resource('patients', PatientController::class);
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/visits', [VisitController::class, 'index'])->name('visits.index');
    Route::post('/visits', [VisitController::class, 'store'])->name('visits.store');
    Route::get('receptionists/assign', [ReceptionistController::class, 'showAssignForm'])->name('receptionists.assign');
    Route::post('receptionists/assign', [ReceptionistController::class, 'assignPatient'])->name('receptionists.assignPatient');

});

// Patient role
Route::group([], function () {
    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');

    Route::post('prescriptions', [PrescriptionController::class, 'store'])->name('prescriptions.store');
    Route::get('prescriptions', [PrescriptionController::class, 'index'])->name('prescriptions.index');
    Route::get('patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
});
Auth::routes();
