<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Models\Admin\Affidavit;
use Illuminate\Http\Request;
use DB;

class AffidavitController extends Controller
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

        $user = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];


        return view('admin.affidavit.create', $user);
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
        'income_tax' => 'required',
        'vat_no' => 'required',
    ));


      $user = Register::where('id','=', session('LoggedUser'))->first();

      $affidavit= array();
      $affidavit['user_id']= $user->id;
      $affidavit['income_tax']= $request->income_tax;
      $affidavit['vat_no']= $request->vat_no;


      DB::table('affidavits')->insert($affidavit);


      return redirect()->back()->with('success', 'হলফনামা  সংরক্ষিত হয়েছে !! ');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $user = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];


        return view('admin.affidavit.show', $user);
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
