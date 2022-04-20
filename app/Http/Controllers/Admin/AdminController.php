<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    



        public function dashboard(){
        
            return view('admin.layouts.index');
        }

        public function adminlogin(Request $request){
            if($request->isMethod('post')){

                $validatedData = $request->validate([
                    'email' => 'required|max:255',
                    'password' => 'required',
                 ]);
  
                $data= $request->all();
                if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    return redirect()->route('admin.dashboard')->with('success','LogIn Successfully');
                }else{
                    return redirect()->back()->with('flash_message_error','Invalid Email or Password!');
                 }
                    
            }

        return view('admin.layouts.login');
        }

        
         public function logout(){
             Auth::guard('admin')->logout();
             return redirect()->route('admin.login')->with('flash_message_success','Logout Successfully');
        }











}
