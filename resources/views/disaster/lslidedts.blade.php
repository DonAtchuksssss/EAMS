<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landslide</title>
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
          <a class="man"  href="{{ url('/main/lslide') }}">Do's</a>
          <a class="na"  style="color: white;" >Dont's</a>

          <div class="row">

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/d2.png') }}" alt="">
                         <h4>Do not panic and loose energy.</h4>
                    </div>
               </div>
      
               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/d3.png') }}" alt="">
                         <h4>Do not touch or walk over loose material and electrical wiring or pole.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/d4.png') }}" alt="">
                         <h4>Do not built houses near steep slopes and near drainage path.</h4>
                    </div>
               </div>

               <div class="column">
                    <div class="border">
                    <img src="{{ asset('img/d1.png') }}" alt="">
                         <h4>Don’t uproot trees unless re vegetation is planned.</h4>
                    </div>
               </div>

          </div>

     </div>
</body>
</html>