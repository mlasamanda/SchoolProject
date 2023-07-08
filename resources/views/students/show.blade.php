@extends('home')
@section('content')
<div class="container mt-2">

<div class="col-lg-12 margin-tb">
<div class="pull-left">

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('students.index') }}">Back </a>
</div>
<h2>Personal Information</h2>
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
{{ $students->fname }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Middle Name:</strong>
{{ $students->middle}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
{{ $students->lname}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
{{ $students->gender }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality :</strong>
{{ $students->nation }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tution Fee:</strong>
{{ $students->tutionFee}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number :</strong>
{{ $students->mobile }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Form :</strong>
{{ $students->form }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Created Time :</strong>
{{ $students->created_at }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Upadate Time :</strong>
{{ $students->updated_at }}
</div>
</div>
</div>
 
@endsection
