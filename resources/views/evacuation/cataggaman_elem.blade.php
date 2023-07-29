@extends('layout.dash-head')

@section('css')
<link type="text/css" href="{{ asset('./css/evac.css') }}" rel="stylesheet">
@endsection

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                <a href="{{ url('/eams') }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/evacuation') }}" class="active">
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
        </nav>

        <div class="home-content">
            <table id="table">
                <tr>
                    <th>Number of Evacuees</th>
                    <th>Capacity</th>
                </tr>

                <tr>
                    @foreach ($facility as $facilities)
                    <td>{{ $count}} </td>
                    <td>{{ $facilities->capacity }} </td>
                    @endforeach

                </tr>

            </table>

        </div>

        </nav>
        <div class="map-content">


            <input type="hidden" id="latitude" name="latitude" />
            <input type="hidden" id="longitude" name="longitude" />

            <div class="input-group">
                <i class="fa-solid fa-location-crosshairs icon"></i>
                <input type="text" class="form-control" placeholder="Origin" id="from">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-location-dot icon"></i>
                <input type="text" class="form-control" placeholder="Destination" id="to" value="Cataggaman Elementary School, New Provincial Road, Tuguegarao City, Cagayan, Philippines">
            </div>

            <div class="icon-direction col-xs-offset2 col-xs-10">
                <button onclick="Map();"><i class="fa-solid fa-diamond-turn-right "></i></button>
            </div>

            <div id="map">

            </div>
            <div id="output">

            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAhWiJ06MRz8AP2rKI5LYZzbev7L4xxc8&callback=Map">
    </script>
    <script src="../../js/direction.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script>
        // function for side-bar
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }

        // function for search-bar
        let inputBox = document.querySelector(".input-box"),
            searchIcon = document.querySelector(".icon"),
            closeIcon = document.querySelector(".close-icon");

        searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
        closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
    </script>





</body>
@endsection