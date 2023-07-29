<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stab</title>
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
    <a class="man" href="{{ url('/main/stab') }}">Do's</a>
    <a class="na"  style="color: white;" href="stabdts.html">Dont's</a>

    <div class="row">

      <div class="column">
        <div class="border">
        <img src="{{ asset('img/i4.png') }}" alt="">
           <h4>Do not remove the stabbing object if it is embedded.</h4>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
