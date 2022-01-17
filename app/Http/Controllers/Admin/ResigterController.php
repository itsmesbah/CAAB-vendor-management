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
        'father_name' => 'required',
        'mother_name' => 'required',
        'present_village' => 'required',
        'present_post' => 'required',
        'present_upazila' => 'required',
        'present_zila' => 'required',
        'parmanent_village' => 'required',
        'parmanent_post' => 'required',
        'parmanent_upazila' => 'required',
        'parmanent_zila' => 'required',
        'age' => 'required',
        'occupation' => 'required',
        'religion' => 'required',
        'nid_no' => 'required',
        'nationality' => 'required',
        'institution' => 'required',
        'institution_address' => 'required',
        'bank_account' => 'required',
        'bank_address' => 'required',
        'mobile_no' => 'required',
        'name' => 'required|max:20',
        'email' => 'required|email|unique:registers',
        'password' => 'required|min:5|max:12',
        'confirm_password' => 'required_with:password|same:password|required|min:5|max:12'
    ));

      $user = new Register;

      $user->name = $request->name;
      $user->father_name = $request->father_name;
      $user->mother_name = $request->mother_name;
      $user->present_village = $request->present_village;
      $user->present_post = $request->present_post;
      $user->present_upazila = $request->present_upazila;
      $user->present_zila = $request->present_zila;
      $user->parmanent_village = $request->parmanent_village;
      $user->parmanent_post = $request->parmanent_post;
      $user->parmanent_upazila = $request->parmanent_upazila;
      $user->parmanent_zila = $request->parmanent_zila;
      $user->age = $request->age;
      $user->occupation = $request->occupation;
      $user->religion = $request->religion;
      $user->nid_no = $request->nid_no;
      $user->nationality = $request->nationality;
      $user->institution = $request->institution;
      $user->institution_address = $request->institution_address;
      $user->bank_account = $request->bank_account;
      $user->bank_address = $request->bank_address;
      $user->mobile_no = $request->mobile_no;
      $user->phone_no = $request->phone_no;
      $user->fax_no = $request->fax_no;
      $user->email = $request->email;
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
