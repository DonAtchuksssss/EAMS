<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gunshot</title>
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
        <a class="man" href="{{ url('/main/gun') }}">Do's</a>
        <a class="na"  style="color: white;" href="gundts.html">Dont's</a>

        <div id="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/j4.png') }}" alt="">
                    <h4>Don't simply hide a gun</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/j5.png') }}" alt="">
                        <h4>Don't make suicide easy</h4>
                </div>
            </div>

        </div>
    </div>
</body>
</html>