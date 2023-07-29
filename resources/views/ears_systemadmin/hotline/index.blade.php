@extends('layout.dash-head')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link type="text/css" href="{{ asset('./css/systemad.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection


@section('content')
<title>Hotline</title>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="/img/ears.jpg" alt="">
            <span class="logo_name">ResQ</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a>
                        <i class="fa-solid fa-circle-user"></i>
                        <span class="link_name">User</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a href="{{ url('/systemadmin/systemadmin') }}">System Administrator</a></li>
                    <li><a href="{{ url('/systemadmin/agencyadmin') }}">Agency Administrator</a></li>
                </ul>
            </li>
            <li>
                <a class="active">
                    <i class="fa-solid fa-phone"></i>
                    <span class="link_name">Hotline</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ url('/main/admin/agencies') }}">Hotline</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/systemadmin/news') }}">
                    <i class='bx bx-news'></i>
                    <span class="link_name">News</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ url('/main/admin/news') }}">News</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/systemadmin/waterlevel') }}">
                    <i class="fa-solid fa-bridge-water"></i>
                    <span class="link_name">Water Level</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ url('/main/admin/settings') }}">Water Level in Buntun Bridge</a></li>
                </ul>
            </li>
            <li class="log_out">
                <a href="{{ url('/main/logout') }}">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ url('/systemadmin/waterlevel') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <section class="home-section">

        <div class="home-content">
            <nav>
                <div class="bx-menuu">
                    <i class='bx bx-menu'></i>
                    <p class="text">Hotline</p>
                    <br>
                </div>
                <div class="profile-details">
                    <div class="profile-section">
                        <span class="user_name">
                            {{ Auth::user()->fName }}
                        </span>
                    </div>
                </div>
            </nav>
            <div style="padding-top:80px">
                <div class="card" style="width:75%; display:block; margin-left:auto; margin-right:auto; margin-top:5px">
                    <div class="cards-body">

                        <div class="tablse-responsive" style="padding: 20px;">
                            <div style="margin: 10px;">
                                <a href="{{ url('systemadmin/hotline/create') }}" class="btn btn-success btn-sm" title="Add New Hotline">
                                    <i class="fa-solid fa-plus" style="padding: 3px; width:50px"></i></a>
                                <a href="{{ url('systemadmin/hotline/archive') }}" class="btn btn-secondary btn-sm" title="Archive">
                                    <i class="fa fa-box-archive" style="padding: 3px;"></i></a>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr style="background-color: lightgray;">
                                        <th>Agency</th>
                                        <th>Hotline</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hotlines as $item)
                                    <tr>

                                        <td>{{ $item->agency}}</td>
                                        <td>{{ $item->hotline }}</td>

                                        <td>

                                            <a href="{{ url('systemadmin/hotline/' . $item->id . '/edit') }}" title="Edit Hotline"><button class="btn btn-primary btn-sm" style="width:50px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

                                            <form method="POST" action="{{ url('systemadmin/hotline' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline;">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Archive Hotline" style="width:50px"><i class="fa fa-box-archive" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>


@endsection