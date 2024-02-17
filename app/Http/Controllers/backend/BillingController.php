<?php

namespace App\Http\Controllers\backend;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Medicine;
use App\Models\Seat;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function patient_billing()
    {
        return view('backend.patientLogin.Billing.index');
    }

    public function admin_billing()
    {
        $billing = Billing::all();
        return view('backend.adminLogin.billing.index', compact('billing'));
    }
    public function admin_billing_add()
    {
        $medicine = Medicine::all();
        $seat = Seat::all();
        $appointment = Appointment::all();
        return view('backend.adminLogin.billing.add_billing', compact('medicine', 'seat', 'appointment'));
    }
    public function store(Request $request){
        // dd($request->all());
        Billing::create($request->all());
        return redirect()->back();
    }
 
    public function download() {
        $medicine = Medicine::all();
        $seat = Seat::all();
        $appointment = Appointment::all();
        $pdf = Pdf::loadView('backend.adminLogin.billing.add_billing', compact('medicine', 'appointment', 'seat'));
    
        return $pdf->stream();
    }
}
