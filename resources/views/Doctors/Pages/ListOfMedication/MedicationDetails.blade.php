@extends('Doctors.Layouts.Parts.master')
@section('content')
    <div class="row mbn-30">

        <!--Order Details Head Start-->
        <div class="col-12 mb-30">
            <a title="Back to Mail Menu" class="edit button button-box button-xs button-info" href="{{ route('dashboard')}}"><i class="zmdi zmdi-mail-reply-all"></i></a>
            <div class="row mbn-15">
                <div class="col-12 col-md-8 mb-15">
                    <h1 class="text-primary fw-600 m-0">Patient & Medication Information</h1>
                </div>
                @if($editData->status == 'active')
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Medication Status: <span class="badge badge-round badge-success">Active</span></span></div>
                @else
                    <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Medication Status: <span class="badge badge-round badge-danger">Inactive</span></span></div>
                @endif
            </div>
        </div>
        <!--Order Details Head End-->

        <!--Order Details Customer Information Start-->
        <div class="col-12 mb-30">
            <div class="order-details-customer-info row mbn-20">

                <!--Billing Info Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <h4 class="mb-25">{{ $editData->patient->name }} Details</h4>
                    <span></span> <span><img src="{{(@$editData->patient->image)?url('public/Doctors/images/patients_images/'.$editData->patient->image):url('public/Doctors/images/patients_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="50%"></span>
                    <ul>
                        <li> <span>Patient ID</span> <span>{{ $editData->patient->custom_id }}</span> </li>
                        <li> <span>Name</span> <span>{{ $editData->patient->name }}</span> </li>
                        <li> <span>Email</span> <span>{{ $editData->patient->email }}</span> </li>
                        <li> <span>Phone</span> <span>{{ $editData->patient->phone }}</span> </li>
                        <li> <span>DOB</span> <span>{{ $editData->patient->dob }}</span> </li>
                        <li> <span>Age</span> <span>{{ $editData->patient->age }}</span> </li>
                        <li> <span>Blood Group</span> <span>{{ $editData->patient->blood_group }}</span> </li>
                        <li> <span>Height</span> <span>{{ $editData->patient->height }}</span> </li>
                        <li> <span>Weight</span> <span>{{ $editData->patient->weight }}</span> </li>
                        <li> <span>Gender</span> <span>{{ $editData->patient->gender }}</span> </li>
                        <li> <span>Marital</span> <span>{{ $editData->patient->marital_status }}</span> </li>
                        <li> <span>Religion</span> <span>{{ $editData->patient->religion }}</span> </li>
                        @if($editData->patient->status == 'active')
                            <li><span>Status</span><span class="badge badge-round badge-success">Active</span></li>
                            @else
                            <li><span>Status</span><span class="badge badge-round badge-danger">Inactive</span></li>
                        @endif
                    </ul>
                </div>
                <!--Billing Info End-->

            </div>
        </div>
        <!--Order Details Customer Information Start-->

        <!--Order Details List Start-->
        <div class="col-12 mb-30">
            <div class="table-responsive">
                <h1 class="text-primary fw-600 m-0">Medication Details</h1>
                <table class="table table-bordered table-vertical-middle">
                    <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Medication ID</th>
                        <th>Medicine</th>
                        <th>Advice</th>
                        <th>Lab Test</th>
                        <th>Next Visit</th>
                        <th>Lab Report</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $editData->doctor->name }}</td>
                        <td>{{ $editData->custom_id }}</td>
                        <td>{{ $editData->medicine }}</td>
                        <td>{{ $editData->advice }}</td>
                        <td>{{ $editData->lab_test }}</td>
                        <td>{{ $editData->next_visit }}</td>
                        <td><div class="col-12 mt-10"><button class="button button-primary button-outline"><a href="{{(!empty($editData->lab_report))?url('public/Doctors/lab_report/'.$editData->lab_report):url('public/Doctors/lab_report/NoReport.txt')}}">Download</a></button></div></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Order Details List End-->

    </div>
@endsection