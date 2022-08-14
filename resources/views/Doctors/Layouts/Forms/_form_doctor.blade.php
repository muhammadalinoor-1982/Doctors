<div class="row">

    <!--Form Size Start-->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">
                    @if(@$editData)
                        Update Doctors Info
                    @else
                        Add New Doctor
                    @endif
                </h3>
            </div>
            <div class="box-body">
                <div class="row mbn-20">

                    <!--Small Field-1-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="name" value="{{@$editData->name}}" class="form-control form-control-sm @error('name') is-invalid @enderror" placeholder="Insert Your Name"></div>
                            @error('name')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror

                            <div class="col-12 mb-15"><input type="email" name="email" value="{{@$editData->email}}" class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Insert Your email"></div>
                            @error('email')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-2-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            <div class="col-12 mb-15"><input type="text" name="phone" value="{{@$editData->phone}}" class="form-control form-control-sm @error('phone') is-invalid @enderror" placeholder="Insert Your phone Number"></div>
                            @error('phone')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12 mb-15"><input type="text" name="degree" value="{{@$editData->degree}}" class="form-control form-control-sm @error('degree') is-invalid @enderror" placeholder="Insert Your Degree"></div>
                            @error('degree')
                            <div class=" text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Small Field-->

                    <!--Small Field-6-->
                    <div class="col-lg-4 col-12 mb-20">
                        <div class="row mbn-15">
                            @php
                                if(old("usertype")){
                                    $usertype = old('usertype');
                                }elseif (isset($editData)){
                                    $usertype = $editData->usertype;
                                }else{
                                    $usertype = null;
                                }
                            @endphp
                            <div class="form-control form-control-sm @error('usertype') is-invalid @enderror">
                                <label class="adomx-radio"><input type="radio" @if($usertype=='doctor') checked @endif name="usertype" value="doctor" id="doctor"> <i class="icon"></i> Doctor</label><br>
                                <label class="adomx-radio"><input type="radio" @if($usertype=='operator') checked @endif name="usertype" value="operator" id="operator"> <i class="icon"></i> Operator</label>
                            </div>
                            @error('usertype')
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
                                <img src="{{(@$editData->image)?url('public/Doctors/images/doctors_images/'.@$editData->image):url('public/Doctors/images/doctors_images/noimage.jpg')}}"  alt="" class="product-image rounded-circle">
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


