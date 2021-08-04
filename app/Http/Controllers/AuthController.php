<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use Illuminate\Support\Facades\Validator;
use Session;

class AuthController extends Controller
{
    // public function authenticate(Request $req)
    // {
    //     $credentials = $req->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $data = $req->all();
            
    //         // Authentication passed...
    //         return redirect()->intended('dashboard');
    //     }
    // }




    public function createNewUser(Request $req){
        $res = User::create([
            'name' => $req->first_name .' '.$req->last_name,
            'email' => $req->email,
            'password' => bcrypt($req->pswd)
        ]);
        // $data = $req->all();
        //  $req->session()->put('name',$data['last_name']);
        //  $req->session()->put('email', $data['email']);
        // $name = $req->session()->get('last_name');
        // $email = $req->session()->get('email');
        if($req){
            return back()->with('login','');
        }else {
            print_r('we got some error');
        }

    }
    public function checkLoginCredential(Request $req){
        $data = $req->all();
        
        // $name = $req->session()->get('name');
        // $email = $req->session()->get('email');
        // print_r($data);die;
        
        $validate = Validator::make($req->all(), [
            'email'=> 'required|email',
            'pswd'=> 'required|alphaNum|min:3'
        ]);
        if ($validate->fails()) {
            // print_r('validation error');die;
            return redirect()->Back()->withInput()->withErrors($validate);
        }
        $user_data=array(
            'email'=> $req->email,
            'password'=> $req->pswd,
        );
        if(Auth::attempt($user_data)){
            $res = User::where('email',$req->email)->first();
            // print_r(json_decode(json_encode($res),true));die;
            $req->session()->put('name',$res->name);
            $req->session()->put('email',$res->email);

            //    Session::flash('message', 'Added Successfully!');
            //     Session::flash('alert-class', 'alert-success');
            //return redirect()->route('login');
           return redirect('/dashboard');
        //     print_r('login verified');die;

        }
        else{
             return back()->with('error', 'invalid email-id and password');
            //print_r('login verified');die;
            // Session::flash('message', 'data not saved!');
            // Session::flash('alert-class', 'alert-danger');
        }
        return Back();
       
    }

   

    
    public function logout(){
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function image(){
        return view('image');
    }

    public function imageUpload()
    {
        return view('imageUpload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
   
    }
}





 // if ($validate->fails()) {
        //             return redirect()->Back()->withInput()->withErrors($validator);
        //          }
           
        //          if($record = Auth::firstOrCreate($data)){
        //             Session::flash('message', 'Added Successfully!');
        //             Session::flash('alert-class', 'alert-success');
        //             return redirect()->route('login');
        //          }else{
        //             Session::flash('message', 'Data not saved!');
        //             Session::flash('alert-class', 'alert-danger');
        //          }
           
        //          return Back();
