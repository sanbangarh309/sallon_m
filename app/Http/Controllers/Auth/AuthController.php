<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Validator;

class AuthController extends Controller
{
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->data = array();
        $this->request = app('request');
        $this->page = app('request')->segment(2);
        // echo '<pre>';print_r(Auth::user());exit;
        // $action = $this->request->route()->getAction();
        // if(isset(Auth::user()->id) && Auth::user()->id != 1){
        //     abort(404);
        // }
        if (isset(Auth::user()->id) && Auth::user()->id == 1) {
            Redirect::to('admin')->send();
        }
        if (isset(Auth::user()->id) && Auth::user()->id != 1) {
            Redirect::to('')->send();
        }
    }
    public function login()
    {
        return View('pages.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $this->request->only('email', 'password');
        $validator = Validator::make($this->request->all(), [
            'email' => 'required|exists:users|max:100',
            'password' => 'required'
        ]);
        if (!$this->request->ajax()) {
            return response()->json(array(
                'message' => 'Something went wrong'
            ));
        }
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return response()->json(array(
                'message' => $error
            ));
            
        }
        if (Auth::attempt($credentials, $request->has('remember'))) {
            if(Auth::user()->id == 1){
                return response()->json(url('/admin/'));
            }else{
                return response()->json(url('/'));
            }
        }else{
            return response()->json(array(
                'message' => 'Email Or Password is not Correct'
            ));
        }
    }

    // public function postLogin(Request $request)
    // {
    //     $this->validateLogin($request);

    //     // If the class is using the ThrottlesLogins trait, we can automatically throttle
    //     // the login attempts for this application. We'll key this by the username and
    //     // the IP address of the client making these requests into this application.
    //     if ($this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);

    //         return $this->sendLockoutResponse($request);
    //     }

    //     $credentials = $this->credentials($request);

    //     if ($this->guard()->attempt($credentials, $request->has('remember'))) {
    //         return $this->sendLoginResponse($request);
    //     }
    //     // print_r(Auth::user());exit;
    //     // If the login attempt was unsuccessful we will increment the number of attempts
    //     // to login and redirect the user back to the login form. Of course, when this
    //     // user surpasses their maximum number of attempts they will get locked out.
    //     $this->incrementLoginAttempts($request);

    //     return $this->sendFailedLoginResponse($request);
    // }

    /*
     * Preempts $redirectTo member variable (from RedirectsUsers trait)
     */
    public function redirectTo()
    {
        return config('voyager.user.redirect', route('admin'));
    }
}
