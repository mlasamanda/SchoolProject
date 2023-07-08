@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h4>Student Manangement</h4>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a>
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
<th>Middle Name</th>
<th>Last Name</th>
<th>Mobile Number</th>
<th>Nationality</th>
<th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->fname }}</td>
<td>{{ $student->middle }}</td>
<td>{{ $student->lname}}</td>
<td>{{ $student->mobile}}</td>
<td>{{ $student->nation}}</td>

<td>
<form action="{{route('students.destroy',$student->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class='fas fa-edit' style='font-size:24px'></i></a>
    <a class="btn btn-secondary" href="{{ route('students.show',$student->id) }}"><i class="fas fa-eye"></i></a>
@csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger"> Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $students->links() !!}
@endsection
