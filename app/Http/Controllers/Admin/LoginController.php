<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
     $this->validate($request, array(
        'email' => 'required|email',
        'password' => 'required|min:5|max:12',
    ));


     $user = Register::where('email', '=', $request->email)->first();

     if (!$user) {
        return back()->with('fail','Email not found');

     }else{
            //check password
        if (Hash::check($request->password, $user->password)) {
            $request->session()->put('LoggedUser', $user->id);

           return redirect()->route('dashboard.index')->with('success', 'You are Logged in Successfully !!');
        }else{
              return back()->with('fail','Incorrect password');
        }

     }



 }

  

    public function logout()
    {
       if (session()->has('LoggedUser')) {
           session()->pull('LoggedUser');

           return redirect()->route('login.create')->with('success', 'You are Logged out');
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
