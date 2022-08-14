@extends('Doctors.Layouts.Parts.master')
@section('content')
    <form method="post" action="{{(@$editData)?route('patient.update',$editData->id):route('patient.store')}}" enctype="multipart/form-data">
        @csrf
        @include('Doctors.Layouts.Forms._form_patient')
        <div class="col-12 mt-10"><button class="button button-primary button-outline">{{(@$editData)?"Update":"Submit"}}</button></div>
    </form>
@endsection