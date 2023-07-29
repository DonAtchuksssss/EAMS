<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landslide</title>
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
        <a class="na" style="color: white;" >Do's</a>
        <a class="man"  href="{{ url('/main/lslidedts') }}">Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/c4.png') }}" alt="">
                    <h4>Locate and go to shelters.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/c5.png') }}" alt="">
                     <h4>Stay alert, awake and active during the impact or probability of impact.</h4>
                </div>
            </div>
             
            <div class="column">
                <div class="border">
                <img src="{{ asset('img/c2.png') }}" alt="">
                    <h4>Plant and grow more trees that can hold the soil through roots.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/c3.png') }}" alt="">
                     <h4>Keep drains clean; Inspect drains for litter, leaves, plastic bags rubble etc; keep the weep holes open.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/c1.png') }}" alt="">
                     <h4>Identify areas of rock fall and subsidence of buildings, cracks that indicates landslides and move to safer areas.</h4>
                </div>
            </div>

        </div>
    </div>
</body>
</html>