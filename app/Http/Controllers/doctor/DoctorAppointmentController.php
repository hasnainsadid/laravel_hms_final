<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorAppointmentController extends Controller
{
    public function index()
    {
        $doctor_id = Auth::guard('doctor')->user()->id;
        $appointment = Appointment::where('doc_id', $doctor_id)->get();
        return view('backend.doctorLogin.appointments.index', compact('appointment'));
    }
}
