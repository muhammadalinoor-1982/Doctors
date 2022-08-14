@extends('Doctors.loginlayout.master')
@section('content')
    <div class="login-register-form-wrap">

        <div class="content">
            <h1>Sign up</h1>
        </div>

        <div class="login-register-form">
            <form method="post" action="{{route('register.store')}}" enctype="multipart/form-data">
                <div class="row">
                    @csrf
                    @include('Doctors.loginlayout._form_register')
                    <div class="col-12 mt-10"><button type="submit" name="submit" value="sign up" class="button button-primary button-outline">sign up</button></div>
                </div>
            </form>

        </div>
    </div>
@endsection
