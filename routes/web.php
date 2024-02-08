<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdmissionController;
use App\Http\Controllers\backend\AppointmentController;
use App\Http\Controllers\backend\BillingController;
use App\Http\Controllers\backend\Dashboard;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\MedicineController;
use App\Http\Controllers\backend\PatientController;
use App\Http\Controllers\backend\PrescriptionController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SeatController;
use App\Http\Controllers\backend\TreatmentController;
use App\Http\Controllers\doctor\DoctorAppointmentController;
use App\Http\Controllers\doctor\PatientController as DoctorPatientController;
use App\Http\Controllers\patient\PatientAppointmentController;
use App\Models\Doctor;
use App\Models\Message;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $doctor = Doctor::all();
    return view('frontend.home', compact('doctor'));
});
Route::post('messages', function(Request $request){
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];
    Message::insert($data);
    return back()->with('msg', 'Message Sent');
})->name('messages');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// for admin auth //
Route::get('login/admin', [AdminController::class, 'adminLoginForm'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'adminLogin'])->name('admin.loggedin');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['middleware'=> 'admin'],function () {
    Route::get('/admin', [Dashboard::class, 'index']);
    // admin //
    Route::resource('admin_info', AdminController::class);
    Route::get('admin/me', [ProfileController::class, 'adminProfile'])->name('profile.me');
    Route::get('admins/change_password', [ProfileController::class, 'admin_change_pass'])->name('admin.change_pass');
    Route::post('admins/update_password', [ProfileController::class, 'admin_update_pass'])->name('pass.update');

    // appointment //
    Route::resource('appointment', AppointmentController::class);
    Route::get('pending_appointment', [AppointmentController::class, 'pending'])->name('appointment.pending');
    Route::get('approved_appointment', [AppointmentController::class, 'approved'])->name('appointment.approved');
    Route::post('confirmed_appointment/{id}', [AppointmentController::class, 'confirmed'])->name('appointment.confirm');

    // doctor //
    Route::resource('doctor', DoctorController::class);

    // department //
    Route::resource('department', DepartmentController::class);

    // patient //
    Route::resource('patient', PatientController::class);

    // tretment //
    Route::resource('treatment', TreatmentController::class);

    // Mediciine //
    Route::resource('medicine', MedicineController::class);

    // Seats //
    Route::resource('seat', SeatController::class);

    // Admission //
    Route::resource('admission', AdmissionController::class);
    Route::post('admission/release/{id}', [AdmissionController::class, 'release'])->name('admission.release');
    Route::post('admission/admit_form', [AdmissionController::class, 'admit_form'])->name('admission.admit_form');

    Route::get('admins/messages', function () {
        $messages = Message::all();
        return view('backend.adminLogin.messages.index', compact('messages'));
    })->name('admin.messages');

    Route::post('admission/admit', [AdmissionController::class, 'admit'])->name('admission.admit');

    Route::get('admins/prescriptions', [PrescriptionController::class, 'admin_prescription'])->name('admin.prescription');

    Route::get('admins/billing', [BillingController::class, 'admin_billing'])->name('admin.billing');
    Route::get('admins/add_billing', [BillingController::class, 'admin_billing_add'])->name('add.billing');

});


// for doctor auth //
Route::get('login/doctor', [DoctorController::class, 'doctorLoginForm'])->name('doctor.login');
Route::post('/doctors', [DoctorController::class, 'doctorLogin'])->name('doctor.loggedin');
Route::get('doctors/logout', [DoctorController::class, 'logout'])->name('doctor.logout');
Route::group(['middleware'=> 'doctor'],function () {
    Route::get('/doctors', [Dashboard::class, 'doctorDashboard']);
        // return view('backend.doctorLogin.dashboard');
    // });
    Route::get('doctors/patient/all', [DoctorPatientController::class, 'index'])->name('patient.all');
    // Route::get('doctor/patient/delete/{$id}', [DoctorPatientController::class, 'index'])->name('patient.delete');
    Route::get('doctors/profile', [ProfileController::class, 'doctorProfile'])->name('doctor.profile');
    Route::get('doctors/appointments', [DoctorAppointmentController::class, 'index'])->name('doctor.appointment');
    Route::get('doctors/change_password', [ProfileController::class, 'doctor_change_pass'])->name('doctor.change_pass');
    Route::post('doctors/update_password', [ProfileController::class, 'doctor_update_pass'])->name('doctor.update_pass');

    Route::get('prescriptions', [PrescriptionController::class, 'doctor_prescription'])->name('doctor.prescription');
    Route::get('add_prescriptions', [PrescriptionController::class, 'doctor_prescription_submit'])->name('doctor.prescription.submit');
    Route::post('doctors/add_prescriptions', [PrescriptionController::class, 'prescription_store'])->name('doctor.prescription.store');
});


// for patient auth //
Route::get('login/patient', [PatientController::class, 'patientLoginForm'])->name('patient.login');
Route::post('patients', [PatientController::class, 'patientLogin'])->name('patient.loggedin');
Route::get('patients/register', [PatientController::class, 'patientReg'])->name('patient.register');
Route::post('patients/register', [PatientController::class, 'submitReg'])->name('patient.register.submit');
Route::get('patients/logout', [PatientController::class, 'logout'])->name('patient.logout');
Route::group(['middleware'=> 'patient'], function(){
    Route::get('/patients', [Dashboard::class, 'patientDashboard']);
    Route::get('patients/profile', [ProfileController::class, 'patientProfile'])->name('patient.profile');
    Route::get('patients/change_password', [ProfileController::class, 'patient_change_pass'])->name('patient.change_pass');
    Route::post('patients/update_password', [ProfileController::class, 'patient_update_pass'])->name('patient.pass.update');

    Route::get('patients/appointment', [PatientAppointmentController::class, 'index'])->name('patient.appointment');
    Route::get('patients/new_appointment', [AppointmentController::class, 'create'])->name('add.appointment');
    Route::post('patients/req_appointment', [PatientAppointmentController::class, 'newAppointment'])->name('newAppointment');
    Route::get('patients/prescription', [PrescriptionController::class, 'patient_prescription'])->name('patient.prescription');
    Route::get('patients/billing', [BillingController::class, 'patient_billing'])->name('patient.billing');
});