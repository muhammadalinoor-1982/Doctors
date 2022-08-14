<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DoctorsLoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'Doctors Main page';
        return view('Doctors.Pages.Login.MainPage',$data);
    }

    public function doctors_login()
    {
        $data['title'] = 'Doctors Login Page';
        return view('Doctors.Pages.Login.DoctorsLogin',$data);
    }

    public function doctors_register()
    {
        $data['title'] = 'Doctors Registration Page';
        return view('Doctors.Pages.Login.DoctorsRegister',$data);
    }

    public function register_store(Request $request)
    {
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'phone' => 'required',
                'degree' => 'required',
                'password' => 'min:3|required_with:password_confirmation|same:password_confirmation','password_confirmation' => 'min:3'
            ]);

            $user = new User();
            $user -> name = $request -> name;
            $user -> email = $request -> email;
            $user -> phone = $request -> phone;
            $user -> degree = $request -> degree;
            $user -> password = bcrypt($request -> password);
            $user ->status = 'active';
            $user ->usertype = 'doctor';
            $user -> save();

        session()->flash('message','Congratulation...!!!  Doctor Registration has been Successful');
        return redirect()->route('doctors.login');
    }

}
