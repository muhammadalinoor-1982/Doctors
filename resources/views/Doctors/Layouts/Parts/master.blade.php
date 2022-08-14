<!doctype html>
<html class="no-js" lang="en">

<!-- Head Start -->
@include('Doctors.Layouts.Parts._head')
<!-- Head End -->

<body class="skin-dark">

<div class="main-wrapper">


    <!-- Header Section Start -->
    @include('Doctors.Layouts.Parts._header')
    <!-- Side Header Start -->
    @include('Doctors.Layouts.Parts._sideHeader')
    <!-- Content Body Start -->
    <div class="content-body">
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Doctors Dashboard
                    {{--<span>@include('Doctors.Layouts.Parts._messages')</span>--}}
                </h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        {{--<div class="col-12 col-lg-auto mb-20">
            <div class="page-date-range">
                <input type="text" class="form-control input-date-predefined">
            </div>
        </div>--}}
        <!-- Page Button Group End -->

    </div>
    <!-- Page Headings End -->
    @yield('content')
    </div>
<!-- Content Body End -->
    <!-- Footer Section Start -->
    @include('Doctors.Layouts.Parts._footer')
    <!-- Footer Section End -->

</div>

<!-- JS Start -->
@include('Doctors.Layouts.Parts._script')
<!-- Js End -->
</body>

</html>
