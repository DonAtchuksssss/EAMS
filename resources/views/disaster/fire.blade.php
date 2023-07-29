<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fire</title>
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
        <a class="na" style="color: white;">Do's</a>
        <a class="man" href="{{ url('/main/firedts') }}">Dont's</a>
      
        <div class="row">

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e6.png') }}" alt="">
                    <h4>Learn to use a fire extinguisher.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e4.png') }}" alt="">
                     <h4>Know two ways out of any building.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e1.png') }}" alt="">
                     <h4>Know your building’s evacuation plan.</h4>
                </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e2.png') }}" alt="">
                     <h4>Evacuate calmly and quickly whenever a fire alarm or carbon monoxide alarm sounds.</h4>
                </div>
            </div>
              
            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e5.png') }}" alt="">
                     <h4>If you encounter smoke during your evacuation, stay low to the floor.</h4>
                     </div>
            </div>

            <div class="column">
                <div class="border">
                <img src="{{ asset('img/e3.png') }}" alt="">
                     <h4>Keep important items such as medications and medical equipment handy for quick access in the event of a building evacuation.</h4>
                </div>
            </div>

        </div>

    
    </div>
</body>
</html>