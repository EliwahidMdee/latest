<?php

use App\Http\Controllers\Non\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\PrescriptionController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\LabTechnicianController;
use App\Http\Controllers\Api\LabTestController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\CashierController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PharmacistController;
use App\Http\Controllers\Api\ReceptionistController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\VisitController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('patients', PatientController::class);
    Route::apiResource('prescriptions', PrescriptionController::class);
    Route::apiResource('doctors', DoctorController::class);
    Route::apiResource('labtechnicians', LabTechnicianController::class);
    Route::apiResource('labtests', LabTestController::class);
    Route::apiResource('appointments', AppointmentController::class);
    Route::apiResource('cashiers', CashierController::class);
    Route::apiResource('payments', PaymentController::class);
    Route::apiResource('pharmacists', PharmacistController::class);
    Route::apiResource('receptionists', ReceptionistController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('visits', VisitController::class);
    Route::apiResource('home', HomeController::class);
});
