<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class ResigterController extends Controller
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
        return view('admin.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
        'image' => 'required',
        'name' => 'required|max:20',
        'institution' => 'required',
        'email' => 'required|email|unique:registers',
        'password' => 'required|min:5|max:12',
        'confirm_password' => 'required_with:password|same:password|required|min:5|max:12'
    ));

      $user = new Register;

      $user->name = $request->name;
      $user->email = $request->email;
      $user->institution = $request->institution;
      $user->password = Hash::make($request->password);


      if($request->has('image')){
        $image = $request->file('image');
        $name = time().'-'.$image->getClientOriginalName();
        $image->move(public_path('/images/users'), $name);
        $user->image = $name;
    }

    if($request->has('signature')){
        $signature = $request->file('signature');
        $name = time().'-'.$signature->getClientOriginalName();
        $signature->move(public_path('/images/users'), $name);
        $user->signature = $name;
    }


    $user->save();

    return redirect()->route('login.create')->with('success', 'A new User created Successfully !!');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
