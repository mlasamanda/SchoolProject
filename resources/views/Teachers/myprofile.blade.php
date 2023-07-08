@extends('home')
@section('content')
<div class="container mt-2">

<div class="col-lg-12 margin-tb">
<div class="pull-left">

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('teachers.index') }}">Back </a>
</div>
<h2>Particular  Information</h2>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>First Name:</strong>
{{ $teachers->fname }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
{{ $teachers->lname}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>E-mail Address:</strong>
{{ $teachers->email }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality :</strong>
{{ $teachers->nation }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number :</strong>
{{ $teachers->mobile }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date Birth :</strong>
{{ $teachers->dob }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender :</strong>
{{ $teachers->gender }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Salary :</strong>
{{ $teachers->salary }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role :</strong>
{{ $teachers->roles }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Created Time :</strong>
{{ $teachers->created_at }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Upadate Time :</strong>
{{ $teachers->updated_at }}
</div>
</div>
</div>
 
@endsection
