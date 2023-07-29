<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/1e3283d2da.js" crossorigin="anonymous"></script>
    <link type="text/css" href="{{ asset('./css/profile.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>

<body onload="initClock()">
    <div class="sidebar">
        <div class="logo-details">
            <img src="/img/ears.jpg" class="logo">
            <span class="logo_name">E A M S</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ url('agency/Evacuation') }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/evacuation/report') }}">
                    <i class="fa-regular fa-folder"></i>
                    <span class="links_name">Report</span>
                </a>
            </li>
            <li>
                <a class="active">
                    <i class="fa-solid fa-user"></i>
                    <span class="links_name">Profile</span>
                </a>
            </li>
            <li class="log_out">
                <a href="{{ url('/main/logout') }}">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
            </div>
            <div class="profile-details">
                <span class="user_name">{{ Auth::user()->fName }}</span>
            </div>
        </nav>

        <div class="home-content">
            <img src="{{ asset('img/default1.jpg') }}" alt="" class="default-logo">
            <div id="center"><br><br>
                <h4>{{Auth::user()->fName}} {{Auth::user()->mName}} {{Auth::user()->lName}} </h4>
            </div>
            <div style="width: 50%; display:block; margin-left:auto; margin-right:auto;">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($success =Session::get('success'))
                <div class="alert alert-danger">

                    <strong>{{ $success }}</strong>
                </div>
                @endif
                @if ($fail =Session::get('fail'))
                <div class="alert alert-danger">

                    <strong>{{ $fail }}</strong>
                </div>
                @endif

               
            </div>
            <table id="table">

                <tr>
                    <td>
                        Sex:
                    </td>
                    <td>
                        {{Auth::user()->sex}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Birthdate:
                    </td>
                    <td>
                        {{Auth::user()->birthDate}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Civil Status:
                    </td>
                    <td>
                        {{Auth::user()->civilStatus}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile Number:
                    </td>
                    <td>
                        {{Auth::user()->mobileNum}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        {{Auth::user()->email}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Street:
                    </td>
                    <td>
                        {{Auth::user()->street}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Barangay:
                    </td>
                    <td>
                        {{Auth::user()->barangay}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Municipality:
                    </td>
                    <td>
                        {{Auth::user()->municipality}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Province:
                    </td>
                    <td>
                        {{Auth::user()->province}}
                    </td>
                </tr>
                <tr style="border-style:none ;">
                    <td>
                        Region:
                    </td>
                    <td>
                        {{Auth::user()->region}}
                    </td>
                </tr>
            </table>

            <div id="center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Update Profile</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Change Password</button>
            </div> <br>

        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h54 class="modal-title">Update Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

                    <div class="modal-body">
                        <form action="{{route('profile')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">First name</label>
                                    <input type="text" class="form-control" name="fname" value="{{Auth::user()->fName}}" required>

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Middle name</label>
                                    <input type="text" class="form-control" name="mname" value="{{Auth::user()->mName}}">

                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Last name</label>
                                    <input type="text" class="form-control" name="lname" value="{{Auth::user()->lName}}" required>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="inputState">Gender</label>
                                    <select name="sex" class="form-control">
                                        <option value="{{Auth::user()->sex}}">{{Auth::user()->sex}}</option>
                                        <option {{ old('sex') === 'MALE' ? 'selected' : '' }} value="MALE">Male</option>
                                        <option {{ old('sex') === 'FEMALE' ? 'selected' : '' }} value="FEMALE">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="inputState">Civil Status</label>
                                    <select name="civilStatus" class="form-control">
                                        <option type="hidden" value="{{Auth::user()->civilStatus}}">{{Auth::user()->civilStatus}}</option>
                                        <option {{ old('civilStatus') === 'SINGLE' ? 'selected' : '' }} value="SINGLE">Single
                                        </option>
                                        <option {{ old('civilStatus') === 'MARRIED' ? 'selected' : '' }} value="MARRIED">
                                            Married</option>
                                        <option {{ old('civilStatus') === 'DIVORCED' ? 'selected' : '' }} value="DIVORCED">
                                            Divorced</option>
                                        <option {{ old('civilStatus') === 'WIDOWER' ? 'selected' : '' }} value="WIDOWER">
                                            Widower</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="inputState">Date of Birth</label>
                                    <input type="date" placeholder="Date of Birth" name="birthDate" value="{{Auth::user()->birthDate}}" class="form-control" required />
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Email</label>
                                        <input type="text" class="form-control" id="email" value="{{Auth::user()->email}}" name="email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Mobile Number</label>
                                        <input type="text" class="form-control" id="email" value="{{Auth::user()->mobileNum}}" name="mobileNum" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Street</label>
                                        <input type="text" class="form-control" id="name" name="street" value="{{Auth::user()->street}}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Region</label>
                                        <input type="text" class="form-control" id="name" name="region" value="{{Auth::user()->region}}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Municipality</label>
                                        <input type="text" class="form-control" id="name" name="municipality" value="{{Auth::user()->municipality}}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Barangay</label>
                                        <input type="text" class="form-control" id="name" name="barangay" value="{{Auth::user()->barangay}}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationTooltip03">Province</label>
                                        <input type="text" class="form-control" id="name" name="province" value="{{Auth::user()->province}}" required>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="margin: 10px;">Update</button>
                    </div>
                    </form>

                </div>

            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    <form action="{{route('update-password')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                                @endif


                                <div>
                                    <label for="oldPasswordInput" class="form-label">Old Password</label><br>
                                    <input name="old_password" type="password" class="field @error('old_password') is-invalid @enderror" id="Password" placeholder="Old Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password">Show/Hide</span>
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="newPasswordInput" class="form-label">New Password</label><br>
                                    <input name="new_password" type="password" class="field @error('old_password') is-invalid @enderror" id="newPasswordInput" placeholder="New Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-passwords">Show/Hide</span>
                                    @error('new_password')<br>
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="inputContainer">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label><br>
                                    <input name="new_password_confirmation" type="password" class="field" id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-passwordss">Show/Hide</span>
                                </div>

                            </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="margin: 10px;">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
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

    <script>
        $("body").on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#Password");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }


        });
    </script>
    <script>
        $("body").on('click', '.toggle-passwords', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#newPasswordInput");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
    </script>
    <script>
        $("body").on('click', '.toggle-passwordss', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");

            var input = $("#confirmNewPasswordInput");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
    </script>
    <script src="../../js/function.js"></script>
</body>