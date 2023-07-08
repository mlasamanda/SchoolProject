@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('teachers.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('teachers.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>First Name:</strong>
<input type="text" name="fname" value="{{ $teacher->fname }}" class="form-control"
       placeholder="Enter the First Name">
@error('fname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
<input type="text" name="lname" value="{{ $teacher->lname }}" class="form-control" placeholder="Enter the Last Name">
@error('lname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email Address:</strong>
<input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ $teacher->email }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality:</strong>
<input type="text" name="nation" value="{{ $teacher->nation }}" class="form-control" placeholder="Enter the gender">
@error('country')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number:</strong>
<input type="text" name="mobile" value="{{ $teacher->mobile}}" class="form-control" placeholder="Enter physical address">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
<input type="text" name="gender" value="{{ $teacher->gender}}" class="form-control" placeholder="Enter physical address">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date Birth:</strong>
<input type="date" name="dob" value="{{ $teacher->dob}}" class="form-control" placeholder="Enter physical address">
@error('dob')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Salary:</strong>
<input type="text" name="salary" value="{{ $teacher->salary}}" class="form-control" placeholder="Enter physical address">
@error('salary')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role of User:</strong>
<input type="text" name="roles" value="{{ $teacher->roles}}" class="form-control" placeholder="Enter physical address">
@error('role')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Update</button>
</div>
</form>
</div>
@endsection
 