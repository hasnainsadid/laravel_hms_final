<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Appointment;
use App\Models\Patient ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $doctorId = Auth::guard('doctor')->user()->id;
        $data['patients'] = Appointment::where('doc_id', $doctorId)->get();
        $data['admission'] = Admission::all();
        return view('backend.doctorLogin.patient.index', $data);
    }
}
