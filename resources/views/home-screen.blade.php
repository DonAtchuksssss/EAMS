@extends('layout.dash-head')

@section('css')
<link type="text/css" href="{{ asset('./css/home-screen-style.css') }}" rel="stylesheet">
@endsection

@section('content')

<body onload="initClock()">
    <div class="sidebar">
        <div class="logo-details">
            <img src="/img/ears.jpg" class="logo">
            <span class="logo_name">E A M S</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ url('/eams') }}" class="active">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/evacuation') }}">
                    <i class="fa-sharp fa-solid fa-school"></i>
                    <span class="links_name">Evacuation</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/main/search') }}">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    <span class="links_name">Search</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/main/list') }}">
                <i class="fa-regular fa-folder"></i>
                    <span class="links_name">Evacuees list</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
            </div>
        </nav>


        <div class="home-content">
            <div class="cardBox">

                <div class="card1" style="background-color:#01949A">
                    <div>
                        <div class="card-content">
                            <a href="{{ url('/main/guidelines') }}">
                                <h2> Disaster Guidelines</h2>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="card1" style="background-color:#004369">
                    <div>
                        <div class="card-content">
                            <h2>Disaster News </h2><br>
                            @foreach ($news as $news )
                            <h4>{{$news->news }} </h4>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="card1" style="background-color:#ff5c5c">
                    <div>
                        <div class="card-content">
                            <h2>Buntun Bridge | Water Level Update</h2><br>
                            @foreach ($waterlevel as $level )
                            <h4>{{$level->level }} </h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Hotline details -->
        <div class="details">
            <div class="hotlines">
                <div class="cardHeader">
                    <h2>Hotline Numbers</h2>
                </div>
                <table>
                    <tr style="color:white; background-color: #273746">
                        <td>Agency</td>
                        <td>Hotline</td>
                    </tr> @foreach ($hotlines as $hotline)
                    <tr>
                        <td>
                            {{ $hotline->agency }}
                        </td>
                        <td>
                            {{ $hotline->hotline }}
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>

            <!-- Recent reported activities -->

            <div class="dv" style="background-image:url({{url('img/www.jpg')}})">
                <div class="weat">
                    <div class="search">
                        <input type="hidden" class="search-bar">
                        <button hidden>
                            <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                            </path>
                        </button>

                    </div>
                    <div class="weather loading">
                        <h2 class="city" style="text-align: center;">Weather in Denver</h2>
                        <h3 class="temp">23°C</h3>
                        <div class="icon">
                            <div class="description">Rainy</div>
                        </div>
                        <div class="humidity">Humidity: 60%</div>
                        <div class="wind">Wind speed: 6.2 km/h</div>
                    </div>
                </div>
            </div>

        </div>

        </div>

    </section>


    <script type="text/javascript">
        // function for sidebar
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>



    <script src="../../js/function.js"></script>
    <script src="../../js/script.js"></script>

</body>
@endsection