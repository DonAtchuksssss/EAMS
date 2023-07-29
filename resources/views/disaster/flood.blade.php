<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flood</title>
	<link type="text/css" href="{{ asset('./css/natural.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
</head>

<body>
     <nav class="fa-solid">
     <a href="{{ url('/main/guidelines') }}">
               <i class="fa-solid fa-angle-left"></i>
          </a>
     </nav>

     <div id="container">
          <a class="na" style="color: white;"  >Do's</a>
          <a class="man" href="{{ url('/main/flooddts') }}">Dont's</a>

          <div class="row">

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a1.png') }}" alt="">
                         <h4>Be at safe place and they try to collect correct information</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a2.png') }}" alt="">
                        <h4>Switch off electricity supply and don't touch open wires</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a3.png') }}" alt="">
                        <h4>Follow instruction by government and shift to safer place.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a4.png') }}" alt="">
                        <h4>Be alert for gas leaks;do not smoke or use candles, lanterns, or open flames.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a6.png') }}" alt="">
                        <h4>Make sure that each person has flashlight, some edibles, drinking water, dry clothes and <br>necessary documents while evacuating or shifting.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/a7.png') }}" alt="">
                         <h4>Listen and watch to radio and TV at all time.</h4>
                   </div>
               </div>

          </div>
       	
     </div>
</body>
</html>