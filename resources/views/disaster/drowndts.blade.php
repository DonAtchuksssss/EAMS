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
     <a class="man" href="{{ url('/main/drown') }}">Do's</a>
     <a class="na"  style="color: white;">Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/f4.png') }}" alt="">
                    <h4>Never swim alone.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/f5.png') }}" alt="">
                    <h4>Don't run on the pool deck.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/f6.png') }}" alt="">
                    <h4>Don't leave children unattended/unsupervised around any water source.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/f7.png') }}" alt="">
                    <h4>Don't swim to far.</h4>
                </div>
            </div>

        </div>
      
    </div>
</body>
</html>