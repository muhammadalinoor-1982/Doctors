@extends('Doctors.Layouts.Parts.master')
@section('content')
    <div class="row mbn-30">

        <!--Order Details Head Start-->
        <div class="col-12 mb-30">
            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('doctor.view')}}"><i class="zmdi zmdi-mail-reply-all"></i></a>
            <div class="row mbn-15">
                <div class="col-12 col-md-8 mb-15">
                    <h1 class="text-primary fw-600 m-0">Doctors Details Information</h1>
                </div>
                @if($editData->status == 'active')
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Doctors Status: <span class="badge badge-round badge-success">Active</span></span></div>
                @else
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Doctors Status: <span class="badge badge-round badge-danger">Inactive</span></span></div>
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
                    <span></span> <span><img src="{{(@$editData->image)?url('public/Doctors/images/doctors_images/'.$editData->image):url('public/Doctors/images/doctors_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="50%"></span>
                    <ul>
                        <li> <span>Name</span> <span>{{ $editData->name }}</span> </li>
                        <li> <span>Email</span> <span>{{ $editData->email }}</span> </li>
                        <li> <span>Phone</span> <span>{{ $editData->phone }}</span> </li>
                        <li> <span>Degree</span> <span>{{ $editData->degree }}</span> </li>
                        <li> <span>User Type</span> <span>{{ $editData->usertype }}</span> </li>
                        <li> <span>Creator</span> <span>{{ $editData->creator }}</span> </li>
                        <li> <span>Updater</span> <span>{{ $editData->updater }}</span> </li>
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