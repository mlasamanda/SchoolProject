@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Admin Pannel</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('subject.create') }}">Add Subject</a>
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
<th>Course Code</th>
<th>Course Name</th>
<th width="280px">Action</th>
</tr>

@foreach ($subjects as $subject)
<tr>
<td>{{ $subject->id }}</td>
<td>{{ $subject->coursecode }}</td>
<td>{{ $subject->coursename }}</td>
 
<td>
<form action="{{route('subject.destroy',$subject->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('subject.edit',$subject->id) }}">Edit</a>
    <a class="btn btn-secondary" href="{{ route('subject.show',$subject->id) }}">View</a>
    @csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $subjects->links() !!}
@endsection
