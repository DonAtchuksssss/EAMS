<!doctype html>
<html>

<head>
    <title>Evacuation</title>
    <meta charset="UTF-8">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
    <link type="text/css" href="{{ asset('./css/agency.css') }}" rel="stylesheet">
    
</head>

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
            </div>

        </nav>

        <div class="home-content">

        <div class="container my-5 py-5 px-5 mx-5">
        <div class="container">
            @yield('content')
        </div>
        </div>
        </div>
    </section>

    <body>


        

        <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="../../js/function.js"></script>
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
        <script>var sList = "";
$('input[type=checkbox]').each(function () {
    sList += "(" + $(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
});
console.log (sList);</script>
        @livewireScripts
    </body>

</html>