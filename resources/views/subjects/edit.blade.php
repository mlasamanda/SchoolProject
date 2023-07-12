@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h4>Edit Subject</h4>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('subject.index') }}" enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('subject.update',$subject->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course Code :</strong>
<input type="text" name="coursecode" value="{{ $subject->coursecode }}" class="form-control"
       placeholder="Enter the First Name">
@error('cname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course Name:</strong>
<input type="text" name="coursename" value="{{ $subject->coursename }}" class="form-control" placeholder="Enter the Last Name">
@error('lname')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<button type="submit" class="btn btn-primary ml-3">Update</button>
</div>
</form>
</div>
@endsection
 