<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    @if(@$editData)
                        Update Medication Info
                    @else
                        Add New Medication
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">

                    <!--Small Field-1-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <select class="form-control form-control-sm" name="doctor_id">
                                    <option>Select Doctor</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" {{(@$editData->doctor_id == $user->id)?"selected":""}}>{{$user->name}}</option>
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-15">
                                <select class="form-control form-control-sm" name="patient_id">
                                    <option>Select Patient</option>
                                    @foreach($patients as $patient)
                                        <option value="{{$patient->id}}" {{(@$editData->patient_id == $patient->id)?"selected":""}}>{{$patient->name}}</option>
                                    @endforeach
                                </select>
                                @error('patient_id')
                                <div class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Text Area-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <h3 class="title">Medicine</h3>
                                <textarea name="medicine" class="form-control form-control-sm @error('medicine') is-invalid @enderror" cols="100" rows="3">{{@$editData->medicine}}</textarea>
                            </div>
                            @error('medicine')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Text Area-->

                    <!--Text Area-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <h3 class="title">Advice</h3>
                                <textarea name="advice" class="form-control form-control-sm @error('advice') is-invalid @enderror" cols="100" rows="3">{{@$editData->advice}}</textarea>
                            </div>
                            @error('advice')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Text Area-->

                    <!--Text Area-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <h3 class="title">Lab Test</h3>
                                <textarea name="lab_test" class="form-control form-control-sm @error('lab_test') is-invalid @enderror" cols="100" rows="3">{{@$editData->lab_test}}</textarea>
                            </div>
                            @error('lab_test')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Text Area-->

                    <!--Small Field-3-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="next_visit" value="{{@$editData->next_visit}}" class="form-control form-control-sm @error('next_visit') is-invalid @enderror" placeholder="Insert Patients Next Visit"></div>
                            @error('next_visit')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            @php
                                if(old("status")){
                                    $status = old('status');
                                }elseif (isset($editData)){
                                    $status = $editData->status;
                                }else{
                                    $status = null;
                                }
                            @endphp
                            <div class="form-control form-control-sm @error('status') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($status=='active') checked @endif name="status" value="active" id="active"> <i class="icon"></i> Active</label><br>
                                <label class="adomx-radio"><input type="radio" @if($status=='inactive') checked @endif name="status" value="inactive" id="inactive"> <i class="icon"></i> Inactive</label>
                            </div>
                            @error('status')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Image Upload-->
                    <div class="col-lg-12 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15">
                                <img src="{{(@$editData->lab_report)?url('public/Doctors/lab_report/'.@$editData->lab_report):url('public/Doctors/lab_report/NoReport.txt')}}"  alt="" class="product-image rounded-circle">
                                <h6 class="mb-15">Lab Report Upload</h6>
                                <input class="dropify @error('lab_report') is-invalid @enderror" name="lab_report" type="file">
                            </div>
                            @error('lab_report')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <p style="color: #828282">Reports would be wrapped with "ZIP" or "RAR"</p>
                    </div>
                    <!--Small Field-->

                </div>
            </div>
        </div>
    </div>
    <!--Form Size End-->
</div>


