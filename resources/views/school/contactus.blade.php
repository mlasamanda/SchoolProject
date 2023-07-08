@extends('master')
@section('content')
    <div class=" container my-5 p-5" style="border: 1px solid black; ">
        <div style="text-align: center;"> <h4>Contact Us </h4></div>
         <form class="col-md-4 offset-md-4" action="{{ route('message.store') }}" method="post">
         <div class="mb-3">
             <label id="name" class="form-label">Name</label>
             <input type="text" class="form-control"  placeholder="Enter Full Name" name="name">
         </div>
         <div class="mb-3">
             <label id="email" class="form-label">Email Address</label>
             <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email">
         </div>
         <div class="mb-3">
             <label id="message" class="form-label">Message</label>
             <textarea name="message" style="height:100px" placeholder="Enter your message" class="form-control"></textarea>
         </div>
             <button type="submit" class="btn btn-primary" name="save">Send Message</button>
        </form>
     
       </div>
@endsection 