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
        <a class="na" style="color: white;">Do's</a>
        <a class="man"href="{{ url('/main/typhdts') }}">Dont's</a>

        <h1>Before</h1>
        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/sec.jpg') }}" alt="">
                    <h4>Secure important belongings</h4>
                </div>
             </div>  

            <div class="column">
                <div class="border">
                    <<img src="{{ asset('img/safe.jpg') }}" alt="">
                    <h4>Make sure the home is safe.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/weat.jpg') }}" alt="">
                    <h4>Check to see if your area is at risk of storm surge.</h4>
                </div>
            </div>
              
            <div class="column">
                <div class="border">
                <img src="{{ asset('img/5.png') }}" alt="">
                    <h4>Before evacuating, close the main switches of electricity, water and LPG tanks.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/6.png') }}" alt="">
                    <h4>Prepare an Emergency Food Supply</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/call.jpg') }}" alt="">
                    <h4>Make sure you have someone to call or turn to for help during a disaster.</h4>
                </div>
            </div>
        </div>
              
        <h1>During</h1>
        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/7.png') }}" alt="">
                    <h4>Extend your phone's battery life so that you are prepared in case of an emergency.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/alert.jpg') }}" alt="">
                  <h4>Pay attention to emergency information and alerts</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/yel.jpg') }}" alt="">
                    <h4>If local officials tell you to evacuate, do so immediately</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/boil.jpg') }}" alt="">
                    <h4>If run out drinking water, you can use tap water by boiling it</h4>
                </div>
            </div>
        </div>
                
        <h1>After</h1>
        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/8.png') }}" alt="">
                    <h4>Find out if a relative or acquaintance is missing and report it immediately to the appropriate person.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/9.png') }}" alt="">
                    <h4>Pnspect the house for damage and repair it if necessary.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/10.png') }}" alt="">
                    <h4>Report the fallen electric post to the person incharge</h4>
                </div>
            </div>

        </div>
    </div>
</body>
</html>