<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fire</title>
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
        <a class="man" href="{{ url('/main/fire') }}">Do's</a>
        <a class="na"  style="color: white;" >Dont's</a>
	 
	    <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e7.png') }}" alt="">
                    <h4>Don't leave cooking appliances unattended.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e8.png') }}" alt="">
                    <h4>Don't leave candles, incense, barbecue grills or other open flames unattended.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e9.png') }}" alt="">
                    <h4>Don't use an elevator during an fire.</h4>
                </div>
            </div>

        </div>
   
    </div>
</body>
</html>