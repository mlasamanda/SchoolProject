@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('students.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>First Name:</strong>
<input type="text" name="fname" value="{{ $student->fname }}" class="form-control"
       placeholder="Enter the First Name">
@error('fname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> Middle Name:</strong>
<input type="text" name="middle" value="{{ $student->middle }}" class="form-control" placeholder="Enter the Last Name">
@error('lname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
<input type="text" name="lname" value="{{ $student->lname }}" class="form-control" placeholder="Enter the Last Name">
@error('lname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong> Form :</strong>
<input type="text" name="form" class="form-control" placeholder="Enter Email" value="{{ $student->form }}">
@error('form')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>gender:</strong>
<input type="text" name="gender" value="{{ $student->gender }}" class="form-control" placeholder="Enter the Last Name">
@error('gender')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality:</strong>
<input type="text" name="nation" value="{{ $student->nation }}" class="form-control" placeholder="Enter the gender">
@error('country')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number:</strong>
<input type="text" name="mobile" value="{{ $student->mobile}}" class="form-control" placeholder="Enter physical address">
@error('mobile')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
 
<button type="submit" class="btn btn-primary ml-3">Update</button>
</div>
</form>
</div>
@endsection
 