<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientAppointmentController extends Controller
{
    public function index()
    {
        $patient = Auth::guard('patient')->user()->id;
        $appointment = Appointment::where('p_id', $patient)->get();
        return view('backend.patientLogin.appointment.index', compact('appointment'));
    }

    public function newAppointment(Request $request)
    {
        // $validate = $request->validate([
        //     'doc_id' => 'required',
        //     'date' => 'required',
        //     'reason' => 'required|max:200'
        // ]);

        // if ($validate) {
            $data = [
                'p_id'=> Auth::guard('patient')->user()->id,
                'doc_id' => $request->doctor,
                'reason' => $request->reason,
                'date' => $request->date
            ];
            Appointment::create($data);
            return redirect()->route('patient.appointment')->with('msg', 'Appointment request sent');
        // }
    }
}
