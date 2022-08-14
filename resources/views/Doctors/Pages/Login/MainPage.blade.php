@extends('Doctors.loginlayout.master')
@section('content')
    <div class="login-register-form-wrap">
        <div class="content">
            <h1>Doctors</h1>
        </div>

        <div class="login-register-form">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-12 mt-10"><a href="{{route('doctors.login')}}"><button class="button button-primary button-outline">sign in</button></a></div>
                            <div class="col-auto mb-15">Don't have account? <a href="{{route('doctors.register')}}">Create Now.</a></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

