<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Natural</title>
	<link type="text/css" href="{{ asset('./css/natural.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="fa-solid">
      <a href="{{ url('/ears') }}">
        <i class="fa-solid fa-angle-left"></i>
      </a>
    </nav>

    <div id="container"> 
      <a class="na" style="color: white;">Natural Disaster</a>
      <a class="man" href="{{ url('/main/manmade') }}">Man-Made Disaster</a>
      <br><br><br><br>

      <div class="row">

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/Equake.jpg') }}" alt="">
            <a href="{{ url('/main/equake') }}"><h4>Earthquake</h4></a>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/Typh.jpg') }}" alt="">
            <a href="{{ url('/main/typh') }}"><h4>Typhoon</h4></a>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/Flood.jpg') }}" alt="">
            <a href="{{ url('/main/flood') }}"><h4>Flood</h4></a>
          </div>
        </div>

        <div class="column">
          <div class="border">
          <img src="{{ asset('img/Lslide.jpg') }}" alt="">
            <a href="{{ url('/main/lslide') }}"><h4>Landslide</h4></a>
          </div>
        </div>
      </div>
    </div>

</body>
</html>