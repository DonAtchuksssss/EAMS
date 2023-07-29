<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Earthquake</title>
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
        <a class="na" style="color: white;"  href="{{ url('/main/equake') }}">Do's</a>
        <a class="man"  href="{{ url('/main/equakedts') }}">Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/fon.png') }}" alt="">
                    <h4>Know Emergency Hotline.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/duck.jpg') }}" alt="">
                    <h4>Drop onto your Hand and Knees Cover your Head and Neck Hold on to your shelter</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/stor.png') }}" alt="">
                    <h4>Store breakable items such as bottled foods, glass in low closed cabinets with latches.</h4>
                </div>
            </div>

            <div class="column">
                 <div class="border">
                     <img src="{{ asset('img/road.png') }}" alt="">
                    <h4>Proceed cautiously once the earthquake has stopped. Avoid roads, bridges or ramps that might have been damaged by the earthquake</h4>
                </div>
            </div>

            <div class="column">
                 <div class="border">
                 <img src="{{ asset('img/car.png') }}" alt="">
                     <h4>Stop as quickly as safety permit and stay in the vehicle. Avoid stopping near or under buildings, trees, overpasses and utility wires.</h4>
                 </div>
             </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/dark.png') }}" alt="">
                    <h4>Do not move from where you are, However, move <br>away from buildings, trees, streetlights, and utility wires</h4>
                </div>
            </div>

        </div>
  
    </div>
</body>
</html>