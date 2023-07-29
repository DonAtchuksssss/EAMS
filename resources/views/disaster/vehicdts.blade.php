<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicular Accident</title>
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
          <a class="man" href="{{ url('/main/vehic') }}">Do's</a>
          <a class="na"  style="color: white;" >Dont's</a>

          <div class="row">

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/h2.png') }}" alt="">
                         <h4>Don’t Panic</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/h3.png') }}" alt="">
                         <h4>Don’t try to move an Injured Person.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/h4.png') }}" alt="">
                         <h4>Don’t Blame Anyone for The Accident.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/h1.png') }}" alt="">
                         <h4>Don’t Run Away or Speed Away from the Scene</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/h5.png') }}" alt="">
                         <h4>Don’t Accept Settlement Without an Insurance Representative</h4>
                    </div>
               </div>

          </div>
   
     </div>
</body>
</html>