<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\userRegister;
use App\Mail\forgetPassword;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::INDEX;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            $user = new User();
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->save();
        }else{
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);
            }else{
                return back();
            }
        }
        return redirect()->route('index');
    }

    public function redirectToGoogle()
    {
        $referer = request()->headers->get('referer');
        if($referer == route("checkTicketStatus")){
            Session::put('redirect', "checkTicketStatus");
            return Socialite::driver('google')->redirect();
        }else{
            Session::put('redirect', "dashboard");
            return Socialite::driver('google')->redirect();
        }
    }

    // Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route(Session::get('redirect'));
    }

    // Facebook login
    public function redirectToFacebook()
    {
        $referer = request()->headers->get('referer');
        if($referer == route("checkTicketStatus")){
            Session::put('redirect', "checkTicketStatus");
            return Socialite::driver('facebook')->redirect();
        }else{
            Session::put('redirect', "dashboard");
            return Socialite::driver('facebook')->redirect();
        }
    }

    // Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route(Session::get('redirect'));
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $name = $this->split_name($data->name);
            $bytes = random_bytes(5);
            $password = bin2hex($bytes);
            $user = new User();
            $user->firstname = $name[0];
            $user->lastname = $name[1];
            $user->email = $data->email;
            $user->password = Hash::make($password);
            $user->pw = $password;
            $user->api_key = genApiKey();
            $user->save();

            $data2 = collect();
            $data2->customer_name = $user->firstname." ".$user->lastname;
            $data2->email = $data->email;
            $data2->password = $user->pw;
            $data2->api_key = $user->api_key;

            if (App::environment('production')) {
                Mail::to($data->email, "FDA")->send(new userRegister("User register confirmed – US FDA Prior Notice Automatic System", $data2));
            }else{
                Mail::to("kabsila@gmail.com", "FDA")->send(new userRegister("User register confirmed – US FDA Prior Notice Automatic System", $data2));
            }
        }

        Auth::login($user);
    }

    public function authenticated($request , $user){
        $referer = request()->headers->get('referer');
        if($referer == route("checkTicketStatus")){
            return redirect()->route('codeList') ;
        }else{
            return redirect()->route('shipment-login');
        }
    }

    function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        return array($first_name, $last_name);
    }

    public function logout(Request $request) {
        Auth::logout();
        return back();
    }

    public function forgetPassword(){
        return view("Shipment.forget");
    }

    public function forgetPasswordMail(Request $request) {

        $user = User::where('email', '=', $request->email)->first();

        if($user){
            $data2 = collect();
            $data2->customer_name = $user->firstname." ".$user->lastname;
            $data2->email = $request->email;
            $data2->password = $user->pw;
            $data2->api_key = $user->api_key;

            if (App::environment('production')) {
                Mail::to($request->email, "FDA")->queue(new forgetPassword("Forgot Your Password? – US FDA Prior Notice Automatic System", $data2));
            }else{
                Mail::to("kabsila@gmail.com", "FDA")->queue(new forgetPassword("Forgot Your Password? – US FDA Prior Notice Automatic System", $data2));
            }

            return redirect()->route('shipment-login')->with('success', 'A request has been received please check your email.');

        }else{
            return back()->with('error', 'Email not found');
        }

    }

}
