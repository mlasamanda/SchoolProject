@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h5>Change Password</h5>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{route('change.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Old Password</strong>
<input type="password" name="opassword" class="form-control" placeholder="">
@error('opassword')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div> 
  
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>New Password</strong>
<input type="password" name="npassword" class="form-control" placeholder="">
@error('npassword')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Confirm Password</strong>
<input type="password" name="cpassword" class="form-control" placeholder="">
@error('cpassword')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Change Password</button>
</div>
</form>
@endsection

