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
                                    <th style="width: 15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($patients as $patient)
                                    <tr>
                                        <td>{{ $serial++ }}</td>
                                        <td width="15%"><img src="{{(!empty($patient->image))?url('public/Doctors/images/patients_images/'.$patient->image):url('public/Doctors/images/patients_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle" width="15%"></td>
                                        <td>{{$patient->custom_id}}</td>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->email}}</td>
                                        <td>{{$patient->phone}}</td>
                                        <td style="width: 15%">
                                            <div class="row">
                                                    <a title="Edit" class="edit button button-box button-xs button-info" href="{{ route('patient.edit',$patient->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                                    <a title="Details" class="edit button button-box button-xs button-info" href="{{ route('dashboard.medication',$patient->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                                    <a title="Add Medication" class="view button button-box button-xs button-success" href="{{ route('medication.create',$patient->id) }}"><i class="zmdi zmdi-more"></i></a>
                                                <form  action="{{ route('patient.delete',$patient->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                        <button title="Delete" class="delete button button-box button-xs button-danger" onclick="return confirm('Are you confirm to delete this Patient')"><i class="zmdi zmdi-delete"></i></button>
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
                                    <th style="width: 15%">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Export Data Table End-->
            </div>
@endsection