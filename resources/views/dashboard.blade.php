
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
    <link type="text/css" href="{{ asset('./css/dashboard.css') }}" rel="stylesheet">
    
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
     
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a href="profile.php">
                        <i class="fa-solid fa-user"></i>
                        <div class="title">Profile</div>
                    </a>
               </li>
 
                <li>
                    <a href="{{ url('/main/logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <div class="title">Logout</div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="top-bar">
                <h1>Evacuation Assistance and Response System</h1>
            </div>
            <div class="cards">
            
                <div class="card">

                    <div class="card-content">
                         <h2>Evacuation Center</h2>
                        <br>
                        <a href="{{ url('/main/allevac') }}">view</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                         <h2>Disaster Guidelines</h2>
                           <br>
                     <a href="{{ url('/main/guidelines') }}">view</a>
                    </div>
                </div>
                

                <div class="card">
                    <div class="card-content">
                       <h2>Disaster News</h2><br><br>
                     
                    </div>
                </div>
                
                <div class="card">

                    <div class="card-content">
                         <h2>Buntun Bridge | Water Level Update</h2>
                        <br>
                         
                    </div>  
                </div>                                          

            </div>
            <div class="tables">
                <div class="last">
                    <div class="heading">
                        <h2>Tuguegarao City Emergency Hotline</h2>
                        
                    </div>
                    <table class="appointments">
                    
            <tbody>
             <tr style="color:white; background-color: #273746">
                <td>Agency</td>
                <td>Hotline</td>             
          
    </table>
        </div>

                <div class="dv" style=" background-image:url({{url('img/www.jpg')}})">
                    <div class="weat">
                         <div class="search">
         <input type="hidden" class="search-bar" >
        <button> <path
                d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
              </path></button>
            
    </div>
    <div class="weather loading">
      <h2 class="city">Weather in Denver</h2>
      <h1 class="temp">51°C</h1>
      <div class="flex">
 
        <div class="description">Cloudy</div>
      </div>
      <div class="humidity">Humidity: 60%</div>
      <div class="wind">Wind speed: 6.2 km/h</div>
    </div> 
                    </div>   
                </div>



            </div>
            <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
                <a href="#"><i class="icon ion-social-facebook"></i></a>
             

            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Phone: 09123456789</a></li>
                 <li class="list-inline-item"><a href="#">Email: Ears@gmail.com</a></li><br>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
        </div>

    </div>
    <script src="../../js/script.js"></script>
 
</body>

</html>
