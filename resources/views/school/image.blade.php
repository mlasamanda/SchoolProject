<!DOCTYPE html>
<html>
<head>
 <title>Don Carlos's Secondary School</title>
 <link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}">
 
</head>
<body>
 <header>
 @include('admin.includes.header')
  <div class="hero"> 
  
  <img src="assets/dist/img/logcircle.png" width="20%" height="20%">
  <h1>Don Carlo's Secondary School</h1>
   <p>A place for quality education and personal growth.</p>
  </div>
 </header>

  

 <footer>
  <div class="contact">
   <h3>Contact</h3>
   <ul>     
    <li>Address:P.O BOX 922 Bahi-Dodoma, Tanzania</li>
    <li>Phone: +255 755 255 269 / +255 754 741 744</li>
    <li>Email: doncarlosecondaryschool@gmail.com</li>
   </ul>
  </div>
  <div class="social">
   <h3>Follow Us</h3>
   <ul>
    <li><a href="#"><i class="far fa-circle nav-icon"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-instragram"></i> </a></li>
   </ul>
  </div>
 </footer>
</body>
</html>