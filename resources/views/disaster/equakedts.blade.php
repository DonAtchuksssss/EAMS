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
        <a class="man"  href="{{ url('/main/equake') }}">Do's</a>
        <a class="na"  style="color: white;" href="{{ url('/main/equakedts') }}">Dont's</a>
  
        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b6.png') }}" alt="">
                    <h4>Do not spread and believe rumors.</h4>
                </div>
            </div>
            <div class="column">
                <div class="border">
                <img src="{{ asset('img/tric.jpg') }}" alt="">
                    <h4>Do not touch PVE wires of electricity.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b1.png') }}" alt="">
                    <h4>Do not operate electrical switches or appliances, if gas leaks are suspected.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/close.jpeg') }}" alt="">
                    <h4>Close the valve of the kitchen gas stove, if it is on. If it is closed, do not open it. Do not use open flames.</h4>
                </div>
            </div>

        </div>
  
    </div>
</body>
</html>