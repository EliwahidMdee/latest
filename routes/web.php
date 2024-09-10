<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabTechnicianController;
use App\Http\Controllers\LabTestController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::post('patients/{patient}/assign-doctor', [DoctorController::class, 'assignDoctor']);
    Route::post('patients/{patient}/update-symptoms', [DoctorController::class, 'updateSymptoms']);

    Route::post('patients/{patient}/assign-tests', [LabTechnicianController::class, 'assignTests']);
    Route::post('patients/{patient}/update-results', [LabTechnicianController::class, 'updateResults']);

    Route::post('patients/{patient}/assign-prescription', [PharmacistController::class, 'assignPrescription']);

    Route::post('patients/{patient}/generate-bill', [CashierController::class, 'generateBill']);
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/visits', [VisitController::class, 'index'])->name('visits.index');
    Route::post('/visits', [VisitController::class, 'store'])->name('visits.store');
    Route::get('receptionists/assign', [ReceptionistController::class, 'showAssignForm'])->name('receptionists.assign');
    Route::post('receptionists/assign', [ReceptionistController::class, 'assignPatient'])->name('receptionists.assignPatient');

    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
    Route::get('patients/{patient}', [PatientController::class, 'show'])->name('patients.show');

    Route::post('prescriptions', [PrescriptionController::class, 'store'])->name('prescriptions.store');
    Route::get('prescriptions', [PrescriptionController::class, 'index'])->name('prescriptions.index');

});
