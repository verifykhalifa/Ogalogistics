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
    <title>ADMIN PANEL</title>
</head>
<body>

<!--Loading Container Start-->
<div id="load" class="loading-overlay display-flex flex-column justify-content-center align-items-center">
    <div class="primary-color font-28 fas fa-spinner fa-spin"></div>
</div>
<!--Loading Container End-->


<div class="row h-100">
    

	@yield('content')

    <!--Main Menu Start-->
    <div class="main-menu hidden-soft">
        <div class="mini-profile-info">
            <div class="menu-close">
                <span class="float-right">
                    <img src="{{asset('mobstyle/icons/close.svg')}}" alt="Close Icon">
                </span>
            </div>
            <div class="profile-picture text-center">
                <img src="{{asset('mobstyle/images/profile-3.png')}}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <div class="profile-name text-center">Jonathan McBerly</div>
                <div class="profile-email text-center">lorem@loremipsum.com</div>
            </div>
        </div>
        <div class="menu-items">
            <div class="all-menu-items">
                <a class="menu-item" href="index.html">
                    <div>
                         <span class="menu-item-icon menu-dark">
                            <img src="{{asset('mobstyle/icons/home.svg')}}" alt="Home Icon">
                        </span>
                        <span class="menu-item-icon menu-light">
                            <img src="{{asset('mobstyle/icons/home-light.svg')}}" alt="Home Lighter Icon">
                        </span>
                        <span class="menu-item-title">Home</span>
                        <span class="menu-item-click fas fa-arrow-right"></span>
                    </div>
                </a>
                <a class="menu-item" href="profile.html">
                    <span class="menu-item-icon menu-dark profile">
                        <img src="{{asset('mobstyle/icons/avatar-dark.svg')}}" alt="Avatar Darker Icon">
                    </span>
                    <span class="menu-item-icon menu-light profile">
                        <img src="{{asset('mobstyle/icons/avatar.svg')}}" alt="Avatar Darker Icon">
                    </span>
                    <span class="menu-item-title profile">Customers</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </a>
                <a class="menu-item" href="wallet.html">
                    <span class="menu-item-icon menu-dark">
                            <img src="{{asset('mobstyle/icons/my-wallet.svg')}}" alt="Wallet Icon">
                        </span>
                    <span class="menu-item-icon menu-light">
                            <img src="{{asset('mobstyle/icons/my-wallet-light.svg')}}" alt="Wallet Icon">
                    </span>
                    <span class="menu-item-title">Drivers</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </a>
                <a class="menu-item" href="driver-registration.html">
                    <span class="menu-item-icon menu-dark">
                            <img src="{{asset('mobstyle/icons/driver-registration-dark.svg')}}" alt="Driver Registration Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                            <img src="{{asset('mobstyle/icons/driver-registration.svg')}}" alt="Driver Registration Icon">
                    </span>
                    <span class="menu-item-title">Partners</span>
                    <span class="menu-item-click fas fa-check green-status"></span>
                </a>
                <a class="menu-item position-relative" href="notifications.html">
                     <span class="menu-item-icon menu-dark">
                            <img src="{{asset('mobstyle/icons/notification.svg')}}" alt="Notification Icon">
                    </span>
                    <span class="menu-item-icon menu-light">
                            <img src="{{asset('mobstyle/icons/notification-light.svg')}}" alt="Notification Icon">
                    </span>
                    <span class="menu-item-title">Admin User</span>
                    <span class="notification-num">3</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </a>
                <a class="menu-item" href="add-new-car.html">
                    <span class="menu-item-icon fas fa-car"></span>
                    <span class="menu-item-title">Car Registration</span>
                    <span class="menu-item-click fas fa-check green-status"></span>
                </a>
                <a class="menu-item" href="support.html">
                    <span class="menu-item-icon menu-dark support">
                        <img src="{{asset('mobstyle/icons/support.svg')}}" alt="Support Icon">
                    </span>
                    <span class="menu-item-icon menu-light support">
                        <img src="{{asset('mobstyle/icons/support-light.svg')}}" alt="Support Lighter Icon">
                    </span>
                    <span class="menu-item-title">Online Support</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <a href="route('logout')" class="menu-item margin-top-auto" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <span class="menu-item-icon menu-dark logout">
                        <img src="{{asset('mobstyle/icons/logout.svg')}}" alt="Logout Icon">
                    </span>
                    <span class="menu-item-icon menu-light logout">
                        <img src="{{asset('mobstyle/icons/logout-light.svg')}}" alt="Logout Icon">
                    </span>
                    <span class="menu-item-title logout">Log out</span>
                    <span class="menu-item-click fas fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
    <!--Main Menu End-->

    

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('mobstyle/js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('mobstyle/js/popper.min.js')}}"></script>
<script src="{{asset('mobstyle/js/bootstrap.min.js')}}"></script>
<script src="{{asset('mobstyle/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1eGdP6hCYQ06z86dMEwoLNFMPYPbhgYs&amp;libraries=places&amp;callback=initMap"></script>
</body>

</html>