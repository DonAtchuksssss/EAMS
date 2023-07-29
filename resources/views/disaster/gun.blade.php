<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gunshot</title>
	<link type="text/css" href="{{ asset('./css/natural.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
</head>

<body>
     <nav class="fa-solid">
     <a href="{{ url('/main/manmade') }}">
               <i class="fa-solid fa-angle-left"></i>
          </a>
     </nav>
     
	 <div id="container">
      <a class="na" style="color: white;" href="gun.html">Do's</a>
      <a class="man"href="{{ url('/main/gundts') }}">Dont's</a>

      <div class="row">

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/j1.png') }}" alt="">
            <h4>DO store guns in a gun safe.Make sure they're unloaded, and keep ammunition locked up separately from the weapon</h4>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/j2.png') }}" alt="">
            <h4>Do install a cable lock or a trigger lock.</h4>
          </div>
        </div>

      </div>
   
  </div>
</body>
</html>