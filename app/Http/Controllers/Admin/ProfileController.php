<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use DB;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = ['LoggedUserInfo'=>Register::where('id','=', session('LoggedUser'))->first()];


        return view('admin.profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        'father_name' => 'required|max:20',
        'mother_name' => 'required|max:20',
        'name' => 'required|max:20',
    ));


      $this_profile = DB::table('registers')->where('id', '=', $id)->first();

      $profile= array();
      $profile['name']= $request->name;
      $profile['father_name']= $request->father_name;
      $profile['mother_name']= $request->mother_name;
      $profile['present_village']= $request->present_village;
      $profile['present_post']= $request->present_post;
      $profile['present_upazila']= $request->present_upazila;
      $profile['present_zila']= $request->present_zila;
      $profile['parmanent_village']= $request->parmanent_village;
      $profile['parmanent_post']= $request->parmanent_post;
      $profile['parmanent_upazila']= $request->parmanent_upazila;
      $profile['parmanent_zila']= $request->parmanent_zila;
      $profile['age']= $request->age;
      $profile['occupation']= $request->occupation;
      $profile['religion']= $request->religion;
      $profile['nid_no']= $request->nid_no;
      $profile['nationality']= $request->nationality;


      if($request->has('image')){

          $usersImage = public_path("/images/users/{$this_profile->image}"); 
          if (Register::exists($usersImage)) {
            unlink($usersImage);
        }

        $image = $request->file('image');
        $name = time().'-'.$image->getClientOriginalName();
        $image->move(public_path('/images/users'), $name);
        $profile['image'] = $name;
    }

    if($request->has('signature')){

      $usersSignature = public_path("/images/users/{$this_profile->signature}"); 
      if (Register::exists($usersSignature)) {
        unlink($usersSignature);
    }

    $signature = $request->file('signature');
    $name = time().'-'.$signature->getClientOriginalName();
    $signature->move(public_path('/images/users'), $name);
    $profile['signature'] = $name;
}


DB::table('registers')->where('id', $id)->update($profile);

return redirect()->back()->with('success', 'প্রোফাইল পরিবর্তন সম্পন্ন হয়েছে ');


}

public function password(Request $request, $id)
{
 $this_password = DB::table('registers')->where('id', '=', $id)->where('email', '=', $request->email)->first();


 if (Hash::check($request->password, $this_password->password)){


  $this->validate($request, array(
    'new_password' => 'required|min:5|max:12',
    'new_confirm_password' => 'required_with:new_password|same:new_password|required|min:5|max:12'
));


  if ($request->new_password != $request->new_confirm_password) {

     return redirect()->back()->with('fail', 'New Password And Retype Password Are Not Macth ');

 }else{

     DB::table('registers')->where('id', $id)->update(['password'=> Hash::make($request->new_password)]);

     return redirect()->back()->with('success', 'পাসওয়ার্ড পরিবর্তন সম্পন্ন হয়েছে');
 }


}else{
    return redirect()->back()->with('fail', 'পাসওয়ার্ড ভূল  ');
}

}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function institution(Request $request, $id)
    {


      $this_profile = DB::table('registers')->where('id', '=', $id)->first();

      $profile= array();
      $profile['institution']= $request->institution;
      $profile['institution_address']= $request->institution_address;
      $profile['bank_account']= $request->bank_account;
      $profile['bank_address']= $request->bank_address;
      $profile['mobile_no']= $request->mobile_no;
      $profile['phone_no']= $request->phone_no;
      $profile['fax_no']= $request->fax_no;


      DB::table('registers')->where('id', $id)->update($profile);

      return redirect()->back()->with('success', 'প্রতিষ্ঠানিক তথ্যাদি পরিবর্তন সম্পন্ন হয়েছে ');








  }
}
