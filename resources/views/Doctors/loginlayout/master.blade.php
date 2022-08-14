<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('Doctors.loginlayout._head')
</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">

        <div class="login-register-wrap">
            <div class="row">

                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    @include('Doctors.loginlayout._messages')
                    @yield('content')
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">

                    <img src="{{asset('public/Doctors/assets/images/bg/Doctor.jpg')}}" alt="">

                    <div class="content">

                    </div>
                </div>

            </div>
        </div>

    </div><!-- Content Body End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
@include('Doctors.loginlayout._script')

</body>

</html>

