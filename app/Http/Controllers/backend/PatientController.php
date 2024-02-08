<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['patients'] = Patient::all();
        $data['admission'] = Admission::all();
        return view('backend.adminLogin.patient.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['doctor'] = Doctor::all();
        $data['treatment'] = Treatment::all();
        return view('backend.adminLogin.patient.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' =>$request->name,
            'address' =>$request->address,
            'dob' =>$request->dob,
            'gender' =>$request->gender,
            'blood_grp' =>$request->blood_grp,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'phone' =>$request->phone,
        ];
        Patient::create($data);
        return redirect()->back()->with('msg', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Patient $patient)
    // {
    //     return view('backend.adminLogin.patient.edit', ['data' => $patient]);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('patient.index')->with('msg', 'Successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index')->with('msg', 'Deleted Successfully');
    }

    public function patientLoginForm()
    {
        return view('backend.patient_login');
    }

    public function patientLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::guard('patient')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->back()->with('msg', 'Email and password invalid');
        }else{
            return redirect()->route('patient.loggedin');
        }
    }
    public function patientReg(){
        return view('backend.patientLogin.register.index');
    }
    public function submitReg(Request $request){
        $validate = $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'dob'=> 'required',
            'gender'=> 'required',
            'blood_grp'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'phone'=> 'required',
        ]);
        if ($validate) {
            $data=[
                'name' => $request->name,
                'address' => $request->address,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'blood_grp' => $request->blood_grp,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
            ];

            Patient::create($data);

            return redirect()->route('patient.login')->with('msgs', 'Registration Successful. Please Login');
        }
    }
    
    public function logout()
    {
        Auth::guard('patient')->logout();
        return redirect()->route('patient.loggedin');
    }
}
