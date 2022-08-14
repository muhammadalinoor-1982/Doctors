@extends('Doctors.Layouts.Parts.master')
@section('content')
    <div class="row">
        <!--Export Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Medication List</h3>
                </div>
                <div class="box-body">
                    <a href="{{route('dashboard')}}" class="btn btn-sm btn-primary">Dashboard</a>
                    <table class="table table-bordered data-table data-table-export">
                        <thead>
                        <tr>
                            <th>SL#</th>
                            <th>Medication ID</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medications as $medication)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{$medication->custom_id}}</td>
                                <td>{{$medication['patient']['name']}}</td>
                                <td>{{$medication['doctor']['name']}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-1 offset-1">
                                            <a title="Edit" class="edit button button-box button-xs button-info" href="{{ route('medication.edit',$medication->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                        </div>
                                        <div class="col-1 offset-2">
                                            <a title="Details" class="view button button-box button-xs button-primary" href="{{ route('medication.details',$medication->id) }}"><i class="zmdi zmdi-more"></i></a>
                                        </div>
                                        <div class="col-1 offset-3">
                                            <a title="Add Medication" class="view button button-box button-xs button-success" href="{{ route('medication.create',$medication->id) }}"><i class="zmdi zmdi-more"></i></a>
                                        </div>
                                        <form  action="{{ route('medication.delete',$medication->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="col-1 offset-4">
                                                <button title="Delete" class="delete button button-box button-xs button-danger" onclick="return confirm('Are you confirm to delete this Medication')"><i class="zmdi zmdi-delete"></i></button>
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
                            <th>Medication ID</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
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