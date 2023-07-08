@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
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
<strong>Middle Name:</strong>
<input type="text" name="middle" class="form-control" placeholder="Enter the middle name ">
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
<strong>Gender:</strong>
<select type="text" name="gender" class="form-control">
    <option></option>
    <option>male</option>
    <option>female</option>
</select>
@error('role')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Form:</strong>
<select type="text" name="form" class="form-control">
    <option></option>
    <option>Form One</option>
    <option>Form Two</option>
    <option>Form Three</option>
    <option>Form Four</option>
</select>
@error('role')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>tutionFee:</strong>
<input type="text" name="tution" class="form-control" placeholder="Enter the tution fee ">
@error('tution')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="form-group">
<strong>Date Birth:</strong>
<input type="date" name="dob" class="form-control" placeholder="Enter the Email ">
@error('dob')
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
<strong>Mobile Number:</strong>
<input type="text" name="mobile" class="form-control" placeholder="Enter the mobile number ">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<button type="submit" class="btn btn-primary ml-3">Add User</button>
</div>
</form>
@endsection

