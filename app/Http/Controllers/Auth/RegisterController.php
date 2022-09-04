<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'matric_no' => ['required', 'string', 'min:8', 'max:255'],
            'department' => ['required', 'string', 'min:8', 'max:255'],
            'mobile' => ['required', 'string', 'min:8', 'max:255'],
            // matric_no
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'matric_no' => $data['matric_no'],
            'department' => $data['department'],
            'mobile' => $data['mobile'],
            'user_type' => isset($data['user_type']) ? $data['user_type'] : '1',
            'status' => isset($data['status']) ? $data['status'] : '2',

            'dob' => isset($data['dob']) ? $data['dob'] : ' ',
            'address' =>  isset($data['address']) ? $data['address'] : ' ',
            'bank_name' => isset($data['bank_name']) ? $data['bank_name'] : ' ',
            'bank_no' => isset($data['bank_no']) ? $data['bank_no']  : ' ',
            'delivery_address' => isset($data['delivery_address']) ?  $data['delivery_address'] : ' ',
            'picture' =>  isset($data['picture']) ? $data['picture'] : ' ',

        ]);
    }
}
