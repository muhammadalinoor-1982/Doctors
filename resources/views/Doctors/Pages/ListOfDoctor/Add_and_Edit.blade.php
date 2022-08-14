@extends('Doctors.Layouts.Parts.master')
@section('content')
    <form method="post" action="{{(@$editData)?route('doctor.update',$editData->id):route('doctor.store')}}" enctype="multipart/form-data">
        @csrf
        @include('Doctors.Layouts.Forms._form_doctor')
        <div class="col-12 mt-10"><button class="button button-primary button-outline">{{(@$editData)?"Update":"Submit"}}</button></div>
    </form>
@endsection