@extends('Doctors.Layouts.Parts.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Patient List</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('patient.create')}}" class="btn btn-sm btn-primary">Add New</a>
                    <table class="table table-bordered data-table data-table-export">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Image</th>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td width="20%"><img src="{{(!empty($patient->image))?url('public/Doctors/images/patients_images/'.$patient->image):url('public/Doctors/images/patients_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="20%"></td>
                                <td>{{$patient->custom_id}}</td>
                                <td>{{$patient->name}}</td>
                                <td>{{$patient->email}}</td>
                                <td>{{$patient->phone}}</td>
                                <td>{{$patient->status}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-1 offset-1">
                                            <a title="Edit" class="edit button button-box button-xs button-info" href="{{ route('patient.edit',$patient->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                        </div>
                                        <div class="col-1 offset-2">
                                            <a title="Details" class="view button button-box button-xs button-primary" href="{{ route('patient.details',$patient->id) }}"><i class="zmdi zmdi-more"></i></a>
                                        </div>
                                        <form  action="{{ route('patient.delete',$patient->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="col-1 offset-3">
                                                <button title="Delete" class="delete button button-box button-xs button-danger" onclick="return confirm('Are you confirm to delete this Patient')"><i class="zmdi zmdi-delete"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL#</th>
                            <th>Image</th>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!--Export Data Table End-->
    </div>
@endsection