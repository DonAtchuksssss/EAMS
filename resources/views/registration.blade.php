@extends('layout.head')


@section('css')
    <link type="text/css" href="{{ asset('./css/registration.css') }}" rel="stylesheet">
@endsection
@section('title', 'Registration Form')


@section('content')


    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- START: SIGN UP -->
                <form action="{{ url('/main/registration') }}" class="sign-up-form" id="wrapped" method="post"
                    enctype="multipart/form-data">
                    <input id="website" name="website" type="text" value="">

                    {{ csrf_field() }}

                    <h2 class="title">Sign up</h2>


                    <div id="wizard_container">

                        <div id="top-wizard">
                            <span id="location"></span>
                            <div id="progressbar"></div>
                        </div>

                        <!-- BEGIN: Error Message-->
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
                       
                       
                        <!-- END: Error Message-->

                        <div id="middle-wizard">
                            <div class="step">
                                <!-- START: BASIC INFORMATION -->
                                <h3>Basic Information</h3>
                                <div class="sign-up-input-field">
                                    <input type="text" placeholder="First Name" name="fName"
                                        value="{{ old('fName') }}" class="required"
                                        oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <div class="sign-up-input-field">
                                    <input type="text" placeholder="Middle Name" name="mName"
                                        value="{{ old('mName') }}" oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <div class="sign-up-input-field">
                                    <input type="text" placeholder="Last Name" name="lName" value="{{ old('lName') }}"
                                        class="required" oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <select class="sign-up-select-field styled-select required" name="sex">
                                    <option value="">Select your Gender</option>
                                    <option {{ old('sex') === 'MALE' ? 'selected' : '' }} value="MALE">Male</option>
                                    <option {{ old('sex') === 'FEMALE' ? 'selected' : '' }} value="FEMALE">Female</option>
                                </select>
                                <div class="sign-up-input-field">
                                    <input type="date" placeholder="Date of Birth" name="birthDate"
                                        value="{{ old('birthDate') }}" class="required" />
                                </div>
                                <select class="sign-up-select-field styled-select required" name="civilStatus">
                                    <option value="">Select your Civil Status</option>
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
                            <!-- END: BASIC INFORMATION -->

                            <!-- START: ADDRESS -->
                            <div class="step">
                                <h3>Address</h3>
                                <div class="sign-up-input-field">
                                    <input type="text" placeholder="Street (House#, Slot Number, Block)" name="street"
                                        value="{{ old('street') }}" class="required"
                                        oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <input type="hidden" name="region" value="{{ old('region') }}" />
                                <select class="sign-up-select-field styled-select required" id="region">
                                    <option value="">Select your Region</option>
                                    <option>Region II</option>
                                </select>
                                <input type="hidden" name="province" value="{{ old('province') }}" />
                                <select class="sign-up-select-field styled-select required" id="province">
                                    <option value="">Select your Province</option>
                                    <option>Cagayan</option>
                                </select>
                                <input type="hidden" name="municipality" value="{{ old('municipality') }}" />
                                <select class="sign-up-select-field styled-select required" id="city">
                                    <option value="">Select your City/Municipality</option>
                                    <option>Tuguegarao</option>
                                </select>
                                <input type="hidden" name="barangay" value="{{ old('barangay') }}" />
                                <select class="sign-up-select-field styled-select required" id="barangay">
                                    <option value="">Select your Barangay</option>
                                    <option>Centro</option>
                                </select>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                            </div>

                            <!-- END: ADDRESS -->

                            <!-- START: ACCOUNT -->
                            <div class="submit step" id="end">
                                <h3>Account</h3>
                                <div class="input-field">
                                    <i class="fas fa-user"></i>
                                    <input type="text" placeholder="Username" class="required" name="username"
                                        value="{{ old('username') }}" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Password" class="required" name="password"
                                        id="password" value="{{ old('password') }}" />
                                    <span>
                                        <i class="fas fa-eye" id="eye" onclick="toggle()"
                                            value="Show password"></i>
                                    </span>
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" placeholder="Email" class="required" name="email"
                                        value="{{ old('email') }}" />
                                </div>
                                <div class="input-field">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" placeholder="Mobile Number" class="required" name="mobileNum"
                                        value="{{ old('mobileNum') }}" />
                                </div>
                                <!-- END: ACCOUNT -->
                            </div>
                        </div>


                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" value="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->


                </form>

                <!-- END: SIGN UP -->

            </div>
        </div>
    </div>



    <div class="panels-container">

        <!-- START: RIGHT PANEL -->

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn"> <a style="text-decoration: none; color:white;"
                        href="{{ url('/main') }}">
                        Sign in
                </button>
            </div>
            <img src="img/regis.svg" class="image" alt="" />
        </div>

    </div>
    <!-- END: RIGHT PANEL -->

    {{-- function toggle password --}}
    <script>
        function toggle() {
            var upass = document.getElementById('password');
            var toggleBtn = document.getElementById('eye');
            if (password.type == "password") {
                password.type = "text";
                eye.value = "Hide password";
                document.getElementById("eye").style.color = '#264653';
            } else {
                password.type = "password";
                eye.value = "Show password";
                document.getElementById("eye").style.color = '#ED8975';
            }
        }
    </script>




    <!-- SCRIPTS -->
    <script src="./js/common/jquery-3.2.1.min.js"></script>
    <script src="./js/common/common_scripts.min.js"></script>
    <script src="./js/common/common_functions.min.js"></script>
    <script src="./js/function.js"></script>
    <script type="text/javascript" src="./js/location.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var my_handlers = {
                fill_provinces: function() {
                    var region_code = $(this).val();
                    $('#province').ph_locations('fetch_list', [{
                        "region_code": region_code
                    }]);

                },
                fill_cities: function() {
                    var province_code = $(this).val();
                    $('#city').ph_locations('fetch_list', [{
                        "province_code": province_code
                    }]);
                },
                fill_barangays: function() {
                    var city_code = $(this).val();
                    $('#barangay').ph_locations('fetch_list', [{
                        "city_code": city_code
                    }]);

                }

            };

            $(function() {
                $('#region').on('change', my_handlers.fill_provinces);
                $('#province').on('change', my_handlers.fill_cities);
                $('#city').on('change', my_handlers.fill_barangays);

                $('#region').ph_locations({
                    'location_type': 'regions'
                });
                $('#province').ph_locations({
                    'location_type': 'provinces'
                });
                $('#city').ph_locations({
                    'location_type': 'cities'
                });
                $('#barangay').ph_locations({
                    'location_type': 'barangays'
                });
                $('#region').ph_locations('fetch_list');


                $('#region').on('change', function() {

                    var selected_caption = $("#region option:selected").text();
                    $('input[name=region]').val(selected_caption);

                })

                $('#province').on('change', function() {

                    var selected_caption = $("#province option:selected").text();
                    $('input[name=province]').val(selected_caption);

                })

                $('#city').on('change', function() {

                    var selected_caption = $("#city option:selected").text();
                    $('input[name=municipality]').val(selected_caption);

                })

                $('#barangay').on('change', function() {

                    var selected_caption = $("#barangay option:selected").text();
                    $('input[name=barangay]').val(selected_caption);

                })
            });

        });
    </script>

@endsection
