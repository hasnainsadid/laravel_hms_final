<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function patient_billing()
    {
        return view('backend.patientLogin.Billing.index');
    }

    public function admin_billing()
    {
        return view('backend.adminLogin.billing.index');
    }
    public function admin_billing_add()
    {
        return view('backend.adminLogin.billing.add_billing');
    }
}
