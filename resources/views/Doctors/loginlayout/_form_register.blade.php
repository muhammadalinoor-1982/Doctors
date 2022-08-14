<div class="col-12 mb-20"><input id="name" type="text" name="name" class="form-control form-control-sm form-control-line @error('name') is-invalid @enderror" placeholder="Name"></div>
@error('name')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="email" type="email" name="email" class="form-control form-control-sm form-control-line @error('email') is-invalid @enderror"  placeholder="Email"></div>
@error('email')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="phone" type="text" name="phone" class="form-control form-control-sm form-control-line @error('email') is-invalid @enderror" placeholder="Phone"></div>
@error('phone')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="degree" type="text" name="degree" class="form-control form-control-sm form-control-line @error('degree') is-invalid @enderror" placeholder="Degree"></div>
@error('degree')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="password" type="password" name="password" class="form-control form-control-sm form-control-line @error('password') is-invalid @enderror" placeholder="Password"></div>
@error('password')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input id="password_confirmation" type="password"  name="password_confirmation" class="form-control form-control-sm form-control-line @error('password_confirmation') is-invalid @enderror" placeholder="Retype Password"></div>
@error('password_confirmation')
<div class="pl-1 text-danger">{{ $message }}</div>
@enderror

<div class="col-12">
    <div class="row justify-content-between">
        <div class="col-auto mb-15">Already have account? <a href="{{route('doctors.login')}}">Login Now.</a></div>
    </div>
</div>
