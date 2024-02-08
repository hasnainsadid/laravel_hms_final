<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function adminProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('backend.adminLogin.profile.index', compact('admin'));
    }
    
    public function doctorProfile()
    {
        $doctor = Auth::guard('doctor')->user();
        return view('backend.doctorLogin.profile.index', compact('doctor'));
    }

    public function patientProfile()
    {
        $patient = Auth::guard('patient')->user();
        return view('backend.patientLogin.profile.index', compact('patient'));
    }

    // doctor change password //
    public function doctor_change_pass(){
        return view('backend.doctorLogin.profile.change_pass');
    }
    public function doctor_update_pass(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:new_password',
        ]);
        $doctor = Auth::guard('doctor')->user();
        if (!Hash::check($request->current_password, $doctor->password)) {
            return back()->with('msg', 'Old password is incorrect');
        }
        Doctor::whereId(Auth::guard('doctor')->user()->id)->update([
            'password'=> Hash::make($request->new_password),
        ]);
        return back()->with('msg', 'Password updated successfully.');
    }

    public function patient_change_pass(){
        return view('backend.patientLogin.profile.change_pass');
    }
    public function patient_update_pass(Request $request){
        $request->validate([
            'current_password'=> 'required',
            'new_password'=> 'required|min:8',
            'confirm_password'=> 'required|min:8|same:new_password',
        ]);
        $patient = Auth::guard('patient')->user();
        if (!Hash::check($request->current_password, $patient->password)) {
            return back()->with('msg', 'Old password is incorrect.');
        }
        Patient::whereId(Auth::guard('patient')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('msg', 'Password updated successfully.');

    }

    public function admin_change_pass(){
        return view('backend.adminLogin.profile.change_pass');
    }

    public function admin_update_pass(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->with('msg', 'Old password is incorrect.');
        }

        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('msg', 'Password updated successfully.');
    }
}
