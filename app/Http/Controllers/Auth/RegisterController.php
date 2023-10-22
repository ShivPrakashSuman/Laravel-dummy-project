<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function showRegister(){
        return view('auth.register');
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'mobile' => ['required', 'string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255']
        ]);
    }

    protected function create(Request $request)
    {
        $validator = $this->validator($request->all());
        if($validator->fails()){
            return redirect('register')->withErrors($validator)->withInput();
        }
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'mobile' => $request['mobile'],
            'pincode' => $request['pincode'],
            'address' => $request['address']
        ]);
        Session::flash('message', 'Data Save SuccessFully'); 
        return redirect()->back();
    }
}
