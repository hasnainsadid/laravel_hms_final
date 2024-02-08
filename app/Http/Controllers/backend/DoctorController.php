<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['doctors'] = Doctor::all();
        return view('backend.adminLogin.doctor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['department'] = Department::all();
        return view('backend.adminLogin.doctor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->img->extension();
        $data = [
            'name'=> $request->name,
            'designation'=> $request->designation,
            'img'=> $filename,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'phone'=> $request->phone,
            'd_id'=> $request->d_id,
            'status'=> $request->status,
        ];
        if (Doctor::create($data)) {
            $request->img->move('images', $filename);
            return redirect()->back()->with('msg', 'Successfully Inserted');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        $data['department'] = Department::all();
        return view('backend.adminLogin.doctor.edit', ['data' => $doctor], $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return redirect()->route('doctor.index')->with('msg', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index')->with('msg', 'Deleted Successfully');
    }


    // auth //
    public function doctorLoginForm()
    {
        return view('backend.doctor_login');
    }

    public function doctorLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::guard('doctor')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->back()->with('msg', 'Email and password invalid');
        }else{
            return redirect()->route('doctor.loggedin');
        }
    }
    
    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor.loggedin');
    }
}
