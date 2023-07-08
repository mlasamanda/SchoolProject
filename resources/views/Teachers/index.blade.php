@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h4>Staff Members</h4>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('teachers.create') }}">Add Staff</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S/N</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Date Birth</th>
<th>Mobile Number</th>
<th>Role</th>
<th width="280px">Action</th>
</tr>

@foreach ($teachers as $teacher)
<tr>
<td>{{($teacher->id) }}</td>
<td>{{ $teacher->fname }}</td>
<td>{{ $teacher->lname }}</td>
<td>{{ $teacher->email}}</td>
<td>{{ $teacher->dob}}</td>
<td>{{ $teacher->mobile }}</td>
<td>{{ $teacher->roles }}</td>
<td>
<form action="{{route('teachers.destroy',$teacher->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}"><i class='fas fa-edit' style='font-size:24px'></i></a>
    <a class="btn btn-secondary" href="{{ route('teachers.show',$teacher->id) }}"><i class="fa fa-eye" style="font-size:24px"></i></a>
    @csrf
@method('DELETE')
<button type='submit' class='btn btn-danger'>Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $teachers->links() !!}
@endsection
