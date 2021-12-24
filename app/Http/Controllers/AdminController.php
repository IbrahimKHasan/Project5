<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view("pages.admin.manage_admin", compact("admins"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        return view("pages.admin.manage_admin_create", compact("admins"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $request->validate([
            'admin_name'=>'required',
            'admin_email'=>'required|unique:admins',
            'admin_password'=>'required',
            'admin_role'=>'required'
        ]);

        Admin::create([
        'admin_name'=>$request->admin_name,
        'admin_email'=>$request->admin_email,
        'admin_password'=>$request->admin_password,
        'admin_role'=>$request->admin_role
        ]);
        return redirect('admin/manage_admins')->with('succes', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::find($id);
        return view("home.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins=Admin::where("admin_id", "=", $id);
        return view('pages.admin.manage_admin_edit',compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::where("admin_id", "=", $id);
        $admin->delete();
        return redirect('admin/manage_admins')->with('success','تم الحذف بنجاح');
    }
}
