{{--@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp--}}
<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Dashboard</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('dashboard')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Patient List</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Doctors</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('doctor.view')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Doctors List</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu"><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Patients</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a data-clipboard-text="fa fa-square" href="{{route('patient.view')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Patient List</span></a></li>
                    </ul>
                </li>

                <li class="has-sub-menu "><a data-clipboard-text="fa fa-th-large" href="#"><i class="fa fa-th-large" aria-hidden="true"></i> <span>Medications</span></a>
                    <ul class="side-header-sub-menu">
                        {{--@can('medication.view')--}}
                        <li class="{{Request::is('medications/view')?'active':''}}">
                            <a data-clipboard-text="fa fa-square" href="{{route('medication.view')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Medication List</span></a>
                        </li>
                        <li class="{{Request::is('medications/watch')?'active':''}}">
                            <a data-clipboard-text="fa fa-square" href="{{route('medication.watch')}}"><i class="fa fa-square" aria-hidden="true"></i><span>Medication Watch</span></a>
                        </li>
                        {{--@endcan--}}
                    </ul>
                </li>

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
<!-- Side Header End -->
