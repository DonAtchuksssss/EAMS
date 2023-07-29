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
<title>Account</title>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="/img/ears.jpg" alt="">
      <span class="logo_name">Ears</span>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a class="active">
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
        <a href="{{ url('/systemadmin/hotline') }}">
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
          <p class="text">System Administrator</p>
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

                <a href="{{ url('systemadmin/systemadmin') }}" class="btn btn-secondary btn-sm" title="Add New Student">
                  Back
                </a>
                <br />
              </div>
              <div class="card" style="margin:20px;">
                <div class="card-header">Edit System Administrator</div>
                <div class="card-body">

                  <form action="{{ url('systemadmin/systemadmin/' .$evac[0]->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <div class="row">
                    <input type="hidden" name="id" id="id" value="{{$evac[0]->id}}" id="id"/>
                      <div class="col">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" name="fName" value="{{$evac[0]->fName}}" required>
                      </div>
                      <div class="col">
                        <label for="validationCustom01">Last name</label>
                        <input type="text" class="form-control" name="lName" value="{{$evac[0]->lName}}" required>
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label for="inputState">Gender</label>
                        <select name="sex" class="form-control">
                          <option value="{{$evac[0]->sex}}"></option>
                          <option {{ old('sex') === 'MALE' ? 'selected' : '' }} value="MALE">Male</option>
                          <option {{ old('sex') === 'FEMALE' ? 'selected' : '' }} value="FEMALE">Female</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="inputState">Civil Status</label>
                        <select name="civilStatus" class="form-control">
                          <option value="{{$evac[0]->civilStatus}}"></option>
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
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label>Email</label></br>
                        <input type="email" name="email" class="form-control" value="{{$evac[0]->email}}" required>
                      </div>
                      <div class="col">
                        <label>Phone Number</label></br>
                        <input type="text" name="mobileNum" class="form-control" value="{{$evac[0]->mobileNum}}" required>
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label for="inputState">Date of Birth</label>
                        <input type="date" placeholder="Date of Birth" name="birthDate" class="form-control" required />
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label for="validationTooltip03">Street</label>
                        <input type="text" class="form-control" id="name" name="street" value="{{$evac[0]->street}}">
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label for="validationTooltip03">Region</label>
                        <input type="text" class="form-control" id="name" name="region" value="{{$evac[0]->region}}">
                      </div>
                      <div class="col">
                        <label for="validationTooltip03">Municipality</label>
                        <input type="text" class="form-control" id="name" name="municipality" value="{{$evac[0]->municipality}}">
                      </div>
                    </div></br>

                    <div class="row">
                      <div class="col">
                        <label for="validationTooltip03">Barangay</label>
                        <input type="text" class="form-control" id="name" name="barangay" required value="{{$evac[0]->barangay}}">
                      </div>
                      <div class="col">
                        <label for="validationTooltip03">Province</label>
                        <input type="text" class="form-control" id="name" name="province" value="{{$evac[0]->province}}">
                      </div>
                    </div> </br>

                    <div class="row">
                      <div class="col">
                        <label for="validationTooltip03">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$evac[0]->username}}">
                      </div>
                      <div class="col">
                        <label for="validationTooltip03">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                    </div></br>

                    <input type="hidden" name="role" value="2" class="form-control" required></br>
                    <input type="submit" value="Update" class="btn btn-primary" style="width:100px; padding:10px; margin-left:auto; margin-right:auto; display:block"></br>
                  </form>
                </div>
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