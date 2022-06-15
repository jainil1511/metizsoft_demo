<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class UserController extends Controller
{
    public function register(){

        return view('register');
    }
    public function register_process(Request $request){
//        firstname
// lastname
// email
// password
// confirmpassword
// phone
// address
// country
// state
// city
// zipcode
// image
// gender
// hobbies


        $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|required_with:confirmpassword|same:confirmpassword',
                'confirmpassword' => 'min:6',
                'phone' => 'required',
                'address' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zipcode' => 'required',
                'image' => 'required',
                'gender' => 'required',
                'hobbies'  => 'required'
            ]);

        $image_name = "";
          if($request->file('image')){
            $image = $request->file('image');
            $image_name =time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('/images');
            $image->move($destination,$image_name);
        }


        $hobbies = implode(',',$request->input('hobbies'));
             $data = array(
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('confirmpassword')),
            'phone' => $request->input('email'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'zipcode' => $request->input('zipcode'),
            'gender' => $request->input('gender'),
            'hobbies' => $hobbies,
            'image_name'=> $image_name

         );

             echo "<pre>";
             print_r($data);die;

    }
    public function login(){
         return view('login');
    }
    public function login_process(Request $request){
      $validatedData = $request->validate([
               'password' => 'required|min:5',
                'email' => 'required|email',   
            ], [
                'password.required' => 'Password is required',
            ]);

         $data = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
         );
         if(Auth::attempt($data)){
          
            return redirect('admin/dashboard');
         }else{
            return redirect()->back();
         }


   
    }

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
