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
       $check = DB::table('affidavits')
       ->where('affidavits.user_id', '=',  session('LoggedUser'))
       ->select('affidavits.*')
       ->first();

       if ($check) {
          return redirect()->route('affidavit.edit');
      }else{
          return redirect()->route('affidavit.create');
      }
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

      return redirect()->route('affidavit')->with('success', 'হলফনামা সংযোজন করা হয়েছে !!');


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
    public function edit()
    {
       $user = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];


       return view('admin.affidavit.edit', $user);

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


      $this->validate($request, array(
        'income_tax' => 'required',
        'vat_no' => 'required',
    ));

      $user = Register::where('id','=', session('LoggedUser'))->first();

      $affidavit= array();
      $affidavit['income_tax']= $request->income_tax;
      $affidavit['vat_no']= $request->vat_no;



      DB::table('affidavits')->where('user_id', $user->id)->update($affidavit);

      return redirect()->back()->with('success', 'হলফনামা পরিবর্তন সম্পন্ন হয়েছে ');

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
