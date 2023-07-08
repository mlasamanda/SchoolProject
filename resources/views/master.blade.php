<!DOCTYPE html>
<html>
<head>
 <title>Don Carlos's Secondary School</title>
@include('admin.includes.head')
 
</head>
<body>
  <header>
  
@include('admin.includes.header')
</header>

<main > 
<section id="contact">

    @yield('content')


</section>
</main>
 
  @include('admin.includes.footer')
</body>
</html>
