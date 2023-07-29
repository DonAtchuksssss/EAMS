<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drown</title>
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
        <a class="na" style="color: white;" >Do's</a>
        <a class="man" href="{{ url('/main/drowndts') }}">Dont's</a>
 
      <div class="row">

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/f1.png') }}" alt="">
            <h4>Obey pool and water safety rules.</h4>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/f2.png') }}" alt="">
            <h4>Always swim where a lifeguard can see you and in areas that are marked for swimmers to use.</h4>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/f3.png') }}" alt="">
            <h4>Wear a life jacket if you don't know how to swim or if you're not a strong swimmer.</h4>
          </div>
        </div>

      </div>
 
    </div>
</body>
</html>