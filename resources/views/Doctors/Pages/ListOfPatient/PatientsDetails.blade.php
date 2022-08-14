@extends('Doctors.Layouts.Parts.master')
@section('content')
    <div class="row mbn-30">

        <!--Order Details Head Start-->
        <div class="col-12 mb-30">
            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('patient.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a>
            <div class="row mbn-15">
                <div class="col-12 col-md-8 mb-15">
                    <h1 class="text-primary fw-600 m-0">Patients Details Information</h1>
                </div>
                @if($editData->status == 'active')
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Patients Status: <span class="badge badge-round badge-success">Active</span></span></div>
                @else
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Patients Status: <span class="badge badge-round badge-danger">Inactive</span></span></div>
                @endif
            </div>
        </div>
        <!--Order Details Head End-->

        <!--Order Details Customer Information Start-->
        <div class="col-12 mb-30">
            <div class="order-details-customer-info row mbn-20">

                <!--Billing Info Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <h4 class="mb-25">{{ $editData->name }} Details</h4>
                    <span></span> <span><img src="{{(@$editData->image)?url('public/Doctors/images/patients_images/'.$editData->image):url('public/Doctors/images/patients_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="50%"></span>
                    <ul>
                        <li> <span>Patient ID</span> <span>{{ $editData->custom_id }}</span> </li>
                        <li> <span>Name</span> <span>{{ $editData->name }}</span> </li>
                        <li> <span>Email</span> <span>{{ $editData->email }}</span> </li>
                        <li> <span>Phone</span> <span>{{ $editData->phone }}</span> </li>
                        <li> <span>Birth</span> <span>{{ $editData->dob }}</span> </li>
                        <li> <span>Age</span> <span>{{ $editData->age }}</span> </li>
                        <li> <span>Blood</span> <span>{{ $editData->blood_group }}</span> </li>
                        <li> <span>Height</span> <span>{{ $editData->height }}</span> </li>
                        <li> <span>Weight</span> <span>{{ $editData->weight }}</span> </li>
                        <li> <span>Gender</span> <span>{{ $editData->gender }}</span> </li>
                        <li> <span>Marital</span> <span>{{ $editData->marital_status }}</span> </li>
                        <li> <span>Religion</span> <span>{{ $editData->religion }}</span> </li>
                        <li> <span>Creator</span> <span>{{ $editData->creator }}</span> </li>
                        <li> <span>Updater</span> <span>{{ $editData->updater }}</span> </li>
                        <li> <span>Doctor</span> <span>{{ $editData->doctor->name }}</span> </li>
                        @if($editData->status == 'active')
                            <li><span>Status</span><span class="badge badge-round badge-success">Active</span></li>
                        @else
                            <li><span>Status</span><span class="badge badge-round badge-danger">Inactive</span></li>
                        @endif
                    </ul>
                </div>
                <!--Billing Info End-->

            </div>
        </div>
    </div>
@endsection