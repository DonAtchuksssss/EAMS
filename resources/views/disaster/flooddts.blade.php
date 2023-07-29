
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
        <a class="man" href="{{ url('/main/flood') }}">Do's</a>
        <a class="na"  style="color: white;">Dont's</a>

  	    <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b5.jpg') }}" alt="">
                    <h4>Don't drive a vehicle through flooded area.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b1.png') }}" alt="">
                    <h4>Don't carried away by rumors and do not spread rumors.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b6.png') }}" alt="">
                     <h4>Don't reconnect your power supply until a qualified engineer has checked it.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b3.jpg') }}" alt="">
                     <h4>Avoid contact with flood water it may be contaminated with sewage, oil,  chemicals or other subtances.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b7.png') }}" alt="">
                     <h4>Don't use TVs, VCRS, CRT terminals or other electrical equipment while standing on wet floors, especially concrete.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b2.png') }}" alt="">
                     <h4>Don't walk in standing water, use a pole or  stick to ensure that you do not step into deep water, open manholes or ditches.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/b4.jpg') }}" alt="">
                     <h4>Look before you step-after a flood, the ground and floors are covered with debris, which may include broken bottles, sharp, objects, nails etc. Floors and stairs covered with mud and debris can be slippery.</h4>
                </div>
            </div>

        </div>

    </div>
</body>
</html>