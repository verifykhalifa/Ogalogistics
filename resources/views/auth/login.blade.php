<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/fontawesome.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/styles.css')}}">
    <title>Sign In</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->

<div class="row h-100">
    <div class="col-xs-12 col-sm-12">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="sign-up.html">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span>Sign In</span>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
                <img src="{{asset('mobstyle/images/logo-main.svg')}}" alt="Main Logo">
            </div>

            <!--Sign Up Container Start-->
            <div class="sign-up-form-container text-center">
                <form class="width-100" method="POST" action="{{ route('login') }}" >
                    @csrf
                    <!--Sign Up Form Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/avatar-light.svg')}}" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="email" autocomplete="off" name="email" placeholder="Username">
							<x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                    </div>
                    <!--Sign Up Form Field End-->

                    <!--Sign Up Form Field Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/lock.svg')}}" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{asset('mobstyle/icons/eye.svg')}}" alt="Password Visibility Icon">
                                </span>
                            </div>
							<x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                    </div>
                    <!--Sign Up Form Field End-->

                    <div class="form-submit-button">
					<button type="{{ __('login') }}" class="btn btn-primary text-uppercase font-weight-normal" style="width: 100%;">
						Sign in 
					</button>
                    </div>
                </form>
            </div>
            <!--Sign Up Container Start-->

        </div>
    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">By signing up you have agreed to our </span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">Terms of Use & Privacy Policy</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('mobstyle/js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('mobstyle/js/popper.min.js')}}"></script>
<script src="{{asset('mobstyle/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mobstyle/js/main.js')}}"></script>
</body>

</html>