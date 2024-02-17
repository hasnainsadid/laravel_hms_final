<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    public function admin_prescription()
    {
        $prescription = Prescription::get();
        return view('backend.adminLogin.prescription.index', compact('prescription'));
    }
    public function patient_prescription()
    {
        $prescription = Prescription::where('p_id', Auth::guard('patient')->user()->id)->orderBy('date', 'desc')->get();
        return view('backend.patientLogin.prescription.index', compact('prescription'));
    }
    public function doctor_prescription()
    {
        $prescription = Prescription::where('d_id', Auth::guard('doctor')->user()->id)->get();
        return view('backend.doctorLogin.prescription.index', compact('prescription'));
    }
    
    public function doctor_prescription_submit()
    {
        $patient = Patient::all();
        $medicine = Medicine::all();
        $appointment = Appointment::where('doc_id', Auth::guard('doctor')->user()->id)->get();
        return view('backend.doctorLogin.prescription.create', compact('patient', 'appointment', 'medicine'));
    }

    public function prescription_store(Request $request)
{
    $data = [
        'p_id' => $request->p_id,
        'd_id' => Auth::guard('doctor')->user()->id,
        'date' => $request->date,
        'm_id' => array_filter($request->medicine),
        'dose' => array_filter($request->dose),
        'days' => array_filter($request->days),
    ];
    // dd($data);
    Prescription::create($data);
    return back()->with('msg', 'Added Prescription');
}

}
