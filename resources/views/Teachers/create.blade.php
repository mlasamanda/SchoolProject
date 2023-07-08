@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h5>Add Only staff Member</h5>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('teachers.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>First Name:</strong>
<input type="text" name="fname" class="form-control" placeholder="Enter the first name ">
@error('fname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div> 
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
<input type="text" name="lname" class="form-control" placeholder="Enter the last name">
@error('lname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email Address:</strong>
<input type="email" name="email" class="form-control" placeholder="Enter the Email ">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality:</strong>
<input type="text" name="nation" class="form-control" placeholder="Enter the nationality ">
@error('nation')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
<select type="text" name="gender" class="form-control">
    <option></option>
    <option>Male</option> 
    <option>Female</option>
</select>
@error('role')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Salary:</strong>
<input type="text" name="salary" class="form-control" placeholder="Enter the Salary ">
@error('salary')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number:</strong>
<input type="text" name="mobile" class="form-control" placeholder="Enter the mobile number ">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date Birth:</strong>
<input type="date" name="dob" class="form-control" placeholder="Enter the nationality ">
@error('dob')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role:</strong>
<select type="text" name="role" class="form-control">
    <option></option>
    <option>Teacher</option>option>
    <option>student</option>
    <option>admin</option>
</select>
@error('role')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Add User</button>
</div>
</form>
@endsection

