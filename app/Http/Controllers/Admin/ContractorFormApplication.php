<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use DB;

class ContractorFormApplication extends Controller
{

  public function index()
  {

    $check = DB::table('contractor_form_applications')
    ->where('contractor_form_applications.user_id', '=',  session('LoggedUser'))
    ->select('contractor_form_applications.*')
    ->first();

    if ($check) {
      return redirect()->route('application.edit');
    }else{
      return redirect()->route('application.create');
    }
  }


  public function create()
  {

    $user = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];


    return view('admin.institution_app.create', $user);

  }


  public function store(Request $request)
  {

    $user = Register::where('id','=', session('LoggedUser'))->first();

    $application= array();
    $application['user_id']= $user->id;
    $application['body']= $request->body;

    DB::table('contractor_form_applications')->insert($application);

    return redirect()->route('application_form')->with('success', 'Application Save Successfully');

  }


  public function edit()
  {
    $data = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];

    return view('admin.institution_app.edit', $data);

  }


 public function update(Request $request, $id)
 {
  
DB::table('contractor_form_applications')
       ->where('user_id', session('LoggedUser'))
       ->update(['body' => $request->body]);

  return redirect()->back()->with('success', 'Application Save Successfully');

}
}
