<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{


  // protected $redirectTo = '/admin';
    
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function showLoginForm(){


        return view('auth.admin-login');
       
    }
     
   
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'admin_email'   => 'required|email',
        'admin_password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['admin_email' => $request->admin_email, 'password' => $request->admin_password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
        'admin_password' => 'Incorrect password!','admin_email'=>"Incorrect Email"]);
    }


    public function logout(Request $request){
      Auth::guard('admin')->logout();
      // $request->session()->flush();
      // $request->session()->regenrate();
      return redirect('/admin/login');
    }
}
