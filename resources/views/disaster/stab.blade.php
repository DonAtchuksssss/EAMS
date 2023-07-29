<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stab</title>
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
        <a class="na" style="color: white;" >Do's</a>
        <a class="man" href="{{ url('/main/stabdts') }}">Dont's</a>

        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/i2.png') }}" alt="">
                    <h4>Keep pressure on the wound until an ambulance arrives</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/i1.png') }}" alt="">
                    <h4>If the person has been stabbed, it is critical to call emergency services as soon as possible.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/i3.png') }}" alt="">
                    <h4>If you happen to have first aid materials with you, fasten the dressing in place using a bandage or tape. Do not lift or remove the dressing as this will disrupt clot formation and re-start the bleeding</h4>
                </div>
            </div>
        </div>

    </div>
</body>
</html>