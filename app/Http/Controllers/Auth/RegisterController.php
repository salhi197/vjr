<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'pays' => ['required'],
            'telephone' => ['required'],

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
        do {
            $code= mt_rand( 100000, 999999 );
        } while ( DB::table( 'users' )->where( 'code', $code )->exists() );

        $random = substr(md5(mt_rand()), 0, 35);
        // dd($random);
        $dataEmail = [
            'subject' => 'Ticket de Reservation',
            'email' => $data['email'],
            'content' => "Hi there Hhhh",
            'code'=>$random
        ];
        $email_code = substr(md5(mt_rand()), 0, 7);
        Mail::send('email_confirmation', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
            $message->to($dataEmail['email'])
                ->subject('【GALAXY】Confirmez votre inscription ');
        });                


        return User::create([
            'code_email'=>$random,
            'name' => $data['name'],
            'nom' => $data['nom'],
            'email' => $data['email'],
            'pays' => $data['pays'],
            'code'=>$code,
            'telephone' => $data['telephone'],
            'refered_user'=>$data['refered_user'],
            'password' => Hash::make($data['password']),
            'password_text' => $data['password'],
        ]);
    }
}
