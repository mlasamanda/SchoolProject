@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h4>Add Subject</h4>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('subject.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course Code:</strong>
<input type="text" name="coursecode" class="form-control" placeholder="Enter the first name ">
@error('cname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div> 
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course Name:</strong>
<input type="text" name="coursename" class="form-control" placeholder="Enter the last name">
@error('cname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Add User</button>
</div>
</form>
@endsection

