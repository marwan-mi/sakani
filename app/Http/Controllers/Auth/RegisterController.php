<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name-agency' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'Phone-number-1' => 'required|digits_between:10,12',
            'Phone-number-2' => 'digits_between:10,12',
            'fb' => 'string|max:255',
            'local-picture' => 'required|image',
            'register_picture' => 'required|image',
            'terms' => 'required',
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
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
         // generate unique slug 
         $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
         $input_length = strlen($input);
         $random_string = '';
         for($i = 0; $i < 18; $i++) {
             $random_character = $input[mt_rand(0, $input_length - 1)];
             $random_string .= $random_character;
         }
 
         $user->slug = $random_string.$local->id ;

        $f1=$data['local-picture'];
        $new_f1=time().$f1->getClientOriginalName();
        $f1->move('upload\agency\agency_local', $new_f1);

        $f2=$data['register_picture'];
        $new_f2=time().$f2->getClientOriginalName();
        $f2->move('upload\agency\register', $new_f2);

        Profile::create([
            'user_id'=>$user->id,
            'agency_name'=>$data['name-agency'],
            'adress'=>$data['adress'],
            'phone1'=>$data['Phone-number-1'],
            'phone2'=>$data['Phone-number-2'],
            'fb'=>$data['fb'],
            'local_picture'=>'upload\agency\agency_local\\'. $new_f1,
            'register_picture'=>'upload\agency\register\\'. $new_f2,
            'avatar'=>'upload\avatar\agency_avatar.png',
            
        ]);
        return $user;
    }
}
