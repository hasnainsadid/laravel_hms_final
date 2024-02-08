<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function index()
    {
        $data['patient'] = Patient::count();
        $data['doctor'] = Doctor::count();
        $data['appointment_pending'] = Appointment::where('status', 0)->count();
        $data['appointment'] = Appointment::count();
        $data['department'] = Department::count();
        $data['admin'] = Admin::count();
        $data['seat'] = Seat::count();
        return view('backend.home', $data);
    }

    public function doctorDashboard()
    {
        $doctor_id = Auth::guard('doctor')->user()->id;
        $data['appointment'] = Appointment::where('doc_id', $doctor_id)->where('status', 0)->count();
        return view('backend.doctorLogin.dashboard', $data);
    }

    public function patientDashboard()
    {
        $patient_id = Auth::guard('patient')->user()->id;
        $data['approved_appointment'] = Appointment::where('p_id', $patient_id)->where('status', 1)->count();
        $data['total_appointment'] = Appointment::where('p_id', $patient_id)->count();
        return view('backend.patientLogin.dashboard', $data);
    }
}
