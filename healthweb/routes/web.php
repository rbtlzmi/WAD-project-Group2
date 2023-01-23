<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterStepTwoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;


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

// Route::middleware(['auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::group(['middleware'=>'auth','verified'], function() {

    Route::group(['middleware' => ['registration_completed']], function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/appointment', function () {
        return view('appointment.create');
    })->name('appointment');

    Route::get('/prescription', function () {
        return view('prescription.add');
    })->name('prescription');

    Route::get('/prescriptionlist', function () {
        return view('prescription.list');
    })->name('prescriptionlist1');

    Route::get('/billing', function () {
        return view('billing.view');
    })->name('billing');

    Route::get('/patient', function () {
        return view('patient.add');
    })->name('patient');



});

    Route::get('register-step2',
        [RegisterStepTwoController::class, 'create'
    ])-> name('register-step2.create');

    Route::post('register-step2',
        [RegisterStepTwoController::class, 'store'
    ])-> name('register-step2.post');

    Route::get('users', [UserController::class, 'index'
    ])->name('users.index');

    // Route::get('users', [UserController::class, 'create'])
    // ->name('appointment.create');

    Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
    Route::resource('addtoappointment', AppointmentController::class);
    Route::get('appointmentlist',[AppointmentController::class, 'index'])->name('appointment.list');
    Route::get('/appointment/delete/{id}',[AppointmentController::class, 'destroy']);

    Route::get('/prescription', [PrescriptionController::class, 'create'])->name('prescription');
    Route::resource('addtoprescription', PrescriptionController::class);
    Route::get('prescriptionlist',[PrescriptionController::class, 'index'])->name('prescription.list');
    Route::get('/prescription/delete/{id}',[PrescriptionController::class, 'destroy']);

    Route::get('/billing', [BillingController::class, 'create'])->name('billing');
    Route::resource('addtobill', BillingController::class);
    Route::get('billinglist',[BillingController::class, 'index'])->name('billing.list');
    Route::get('/billing/delete/{id}',[BillingController::class, 'destroy']);

    Route::resource('addtopatient', PatientController::class);
    Route::get('patientlist',[PatientController::class, 'index'])->name('patient.list');
    Route::get('/patient/delete/{id}',[PatientController::class, 'destroy']);


});

//Route::resource('tasks', TaskController::class);
