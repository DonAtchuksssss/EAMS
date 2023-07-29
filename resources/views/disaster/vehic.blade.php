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
        <a class="na" style="color: white;">Do's</a>
        <a class="man" href="{{ url('/main/vehicdts') }}">Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/g2.png') }}" alt="">
                    <h4>Try to Control the Bleeding.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/g3.png') }}" alt="">
                    <h4>Call for Help</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/g1.png') }}" alt="">
                    <h4>Do seek medical attention before doing anything else.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/g4.png') }}" alt="">
                    <h4> Write down the names, addresses, and phone numbers of all potential witnesses to an accident before the witnesses leave the area where the accident occurred.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/g5.png') }}" alt="">
                    <h4>Do take photographs the scene of the accident, from all angles.</h4>
                </div>
            </div>

        </div>
    </div> 

</body>
</html>