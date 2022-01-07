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


     $this_profile = DB::table('registers')->where('id', '=', $id)->first();

     $profile= array();
     $profile['name']= $request->name;
     $profile['institution']= $request->institution;


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

return redirect()->back()->with('success', 'Profile Updated Successfully !!');


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
     
                  return redirect()->back()->with('success', 'Password Updated Successfully !!');
            }


        }else{
    return redirect()->back()->with('fail', 'Incorrect Password ');
}

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
