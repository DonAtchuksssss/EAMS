<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Typhoon</title>
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
        <a class="man" href="{{ url('/main/typh') }}">Do's</a>
        <a class="na"  style="color: white;" >Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/2.png') }}" alt="">
                    <h4>Avoid leaving the house when there is a typhoon.</h4>
                </div>
            </div>
  
            <div class="column">
                <div class="border">
                <img src="{{ asset('img/1.png') }}" alt="">
                    <h4>Do not touch electrical appliances if you are wet or standingin flood waters.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/4.png') }}" alt="">
                    <h4>Do not stay on hilltops or in open areas, lightning seeks the highest ground. Try to find a pit or any other low place in the ground and hide there.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/3.png') }}" alt="">
                    <h4>Don't go near the window If the storm is too severe, the wind can blow objects and they can fly and break the window, putting you in danger.</h4>
                </div>
            </div>

        </div>
    </div>
</body>
</html>