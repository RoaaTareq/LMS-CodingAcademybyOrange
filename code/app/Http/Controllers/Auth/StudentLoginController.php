<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudentLoginController  extends Controller
{



    
    public function __construct()
    {
        $this->middleware('guest:student',['except'=>['logout']]);
    }

    public function showLoginForm(){


        return view('auth.Loginstudent');
       
    }
     
   
    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('student')->attempt(['student_email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('student.home'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
        'password' => 'Incorrect password!','email'=>"Incorrect Email"
    ]);
    }


    public function logout(Request $request){
      Auth::guard('student')->logout();
      // $request->session()->flush();
      // $request->session()->regenrate();
      return redirect('/student/login');
    }
}

