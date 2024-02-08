<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['admins'] = Admin::all();
        return view('backend.adminLogin.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.adminLogin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time().'.'.$request->img->extension();
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'img'=>$filename,
        ];
        if (Admin::create($data)) {
            $request->img->move('images', $filename);
            return redirect()->route('admin_info.index')->with('msg', 'Admin Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function adminLoginForm()
    {
        return view('backend.admin_login');
    }
    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->back()->with('msg', 'Email and password invalid');
        }else{
            return redirect()->route('admin.loggedin');
        }
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loggedin');
    }
}
