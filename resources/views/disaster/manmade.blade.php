<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manmade</title>
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
    <a class="man" href="{{ url('/main/guidelines') }}">Natural Disaster</a>
    <a class="na" style="color: white;">Man-Made Disaster</a>
    <br><br><br><br>

    <div class="row">

      <div class="column">
        <div class="border">
          <img src="{{ asset('img/Fire.jpg') }}" alt="">
          <a href="{{ url('/main/fire') }}">
            <h4>Fire</h4>
          </a>
        </div>
      </div>

      <div class="column">
        <div class="border">
          <img src="{{ asset('img/Drown.jpg') }}" alt="">
          <a href="{{ url('/main/drown') }}">
            <h4>Drowning</h4>
          </a>
        </div>
      </div>

      <div class="column">
        <div class="border">
          <img src="{{ asset('img/Acc.jpg') }}" alt="">
          <a href="{{ url('/main/vehic') }}">
            <h4>Vehicular Accident</h4>
          </a>
        </div>
      </div>

      <div class="column">
        <div class="border">
          <img src="{{ asset('img/Stab.jpg') }}" alt="">
          <a href="{{ url('/main/stab') }}">
            <h4>Stab</h4>
          </a>
        </div>
      </div>

      <div class="column">
        <div class="border">
          <img src="{{ asset('img/Gun.jpg') }}" alt="">
          <a href="{{ url('/main/gun') }}">
            <h4>Gunshot</h4>
          </a>
        </div>
      </div>

    </div>
  </div>

</body>

</html>