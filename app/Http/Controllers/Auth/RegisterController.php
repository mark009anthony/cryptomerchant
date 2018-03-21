<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\VerifyUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'logout';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
        $user = User::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'business_name' => $data['businessname'],
            'business_number' => $data['businessphone'],
            'business_address1'=> $data['businessadd1'],
            'business_address2'=> $data['businessadd2'],
            'business_city'=> $data['city'],
            'business_region'=> $data['region'],
            'business_zipcode'=> $data['zipcode'],
            'business_type' => $data['business_type'],
            'business_category'=> $data['business_category'],
            'business_subcategory'=> $data['business_sub'],
            'business_url'=> $data['business_url'],
            'business_registration'=> $data['regis_number'],
            'date_registered'=> $data['regis_date'],
            'country'=> $data['country'],
            'nationality'=> $data['nationality'],
            'id_name'  => $data['identity_doc'],
            'id_no'=> $data['id_number'],
            'birthdate'=> $data['birthdate'],
            'home_address1'=> $data['homeadd1'],
            'home_address2'=> $data['homeadd2'],
            'home_city'=> $data['homecity'],
            'home_region'=> $data['homeregion'],
            'home_zipcode'=> $data['home_zipcode'],    

        ]);
        
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
 
        Mail::to($data['email'])->send(new VerifyMail($user));
 
        return redirect ('login');
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('status', $status);
    }

     protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
