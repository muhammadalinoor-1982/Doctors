<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    @if(@$editData)
                        Update patient Info
                    @else
                        Add New patient
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
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-1-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Insert Patients Name"></div>
                            @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="col-12 mb-15"><input type="email" name="email" value="{{@$editData->email}}" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Insert Patients email"></div>
                            @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="phone" value="{{@$editData->phone}}" class="form-control form-control-sm @error('phone') is-invalid @enderror" placeholder="Insert Patients phone Number"></div>
                            @error('phone')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="dob" value="{{@$editData->dob}}" class="form-control form-control-sm @error('dob') is-invalid @enderror" placeholder="Insert Patients Date of Birth"></div>
                            @error('dob')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-3-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="age" value="{{@$editData->age}}" class="form-control form-control-sm @error('age') is-invalid @enderror" placeholder="Insert Patients Age"></div>
                            @error('age')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="blood_group" value="{{@$editData->blood_group}}" class="form-control form-control-sm @error('blood_group') is-invalid @enderror" placeholder="Insert Patients Blood Group"></div>
                            @error('blood_group')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-3-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="height" value="{{@$editData->height}}" class="form-control form-control-sm @error('height') is-invalid @enderror" placeholder="Insert Patients Height (cm)"></div>
                            @error('height')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="weight" value="{{@$editData->weight}}" class="form-control form-control-sm @error('weight') is-invalid @enderror" placeholder="Insert Patients Weight (kg)"></div>
                            @error('weight')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-3-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="religion" value="{{@$editData->religion}}" class="form-control form-control-sm @error('religion') is-invalid @enderror" placeholder="Insert Patients Religion"></div>
                            @error('religion')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("gender")){
                                    $gender = old('gender');
                                }elseif (isset($editData)){
                                    $gender = $editData->gender;
                                }else{
                                    $gender = null;
                                }
                            @endphp
                            <div class="form-control form-control-sm @error('gender') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($gender=='male') checked @endif name="gender" value="male" id="male"> <i class="icon"></i> Male</label><br>
                                <label class="adomx-radio"><input type="radio" @if($gender=='female') checked @endif name="gender" value="female" id="female"> <i class="icon"></i> Female</label>
                                <label class="adomx-radio"><input type="radio" @if($gender=='others') checked @endif name="gender" value="others" id="others"> <i class="icon"></i> Others</label>
                            </div>
                            @error('gender')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            @php
                                if(old("marital_status")){
                                    $marital_status = old('marital_status');
                                }elseif (isset($editData)){
                                    $marital_status = $editData->marital_status;
                                }else{
                                    $marital_status = null;
                                }
                            @endphp
                            <div class="form-control form-control-sm @error('marital_status') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($marital_status=='married') checked @endif name="marital_status" value="married" id="married"> <i class="icon"></i> Married</label><br>
                                <label class="adomx-radio"><input type="radio" @if($marital_status=='unmarried') checked @endif name="marital_status" value="unmarried" id="unmarried"> <i class="icon"></i> Unmarried</label>
                                <label class="adomx-radio"><input type="radio" @if($marital_status=='widowed') checked @endif name="marital_status" value="widowed" id="widowed"> <i class="icon"></i> Widowed</label>
                            </div>
                            @error('marital_status')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-3-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
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
                                <img src="{{(@$editData->image)?url('public/Doctors/images/patients_images/'.@$editData->image):url('public/Doctors/images/patients_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle">
                                <h6 class="mb-15">Image Upload</h6>
                                <input class="dropify @error('image') is-invalid @enderror" name="image" type="file">
                            </div>
                            @error('image')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <p style="color: #828282">Preferable image dimension should be 500pix X 500pix.</p>
                    </div>
                    <!--Small Field-->

                </div>
            </div>
        </div>
    </div>
    <!--Form Size End-->
</div>


