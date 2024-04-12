@extends('mobilelayouts.layouts')

@section('content')

<div class="col-xs-12 col-sm-12">

<!--Page Title & Icons Start-->
<div class="header-icons-container text-center">
        <a href="/admindashboard">
            <span class="float-left">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
        </a>
        <span>Manage Driver</span>
        <a href="#">
            <span class="float-right menu-open closed">
                <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
            </span>
        </a>
</div>
<!--Page Title & Icons End-->

<div class="rest-container">
    <div class="text-center header-icon-logo-margin header-icon-logo-margin-extra">
        <div class="profile-picture-container">
            <img src="{{asset('mobstyle/images/driver-registration.svg')}}" alt="Driver Registration Icon">
        </div>
    </div>
    <div class="address-title">Manage Driver</div>

    <!--Driver Registration Information Links Container Start-->
    <div class="sign-up-form-container">
        <div class="width-100">
            <!--Driver Registration Item Start-->
            <div class="border-bottom-primary ">
                <a href="/driverreg" class="home-options-list href-decoration-none">
                    Driver Registration
                    <span class="fas fa-check icon chosen hidden"></span>
                    <span class="icon choose float-right">
                        <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                    </span>
                </a>
            </div>
            <!--Driver Registration Item End-->

            <!--Driver Registration Item Start-->
            <div class="border-bottom-primary">
                <a href="/alldriver" class="home-options-list href-decoration-none">
                    All Drivers
                    <span class="fas fa-check icon chosen hidden"></span>
                    <span class="icon choose float-right">
                        <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                    </span>
                </a>
            </div>
            <!--Driver Registration Item End-->
        </div>
    </div>
    <!--Driver Registration Information Links Container End-->

</div>
</div>


@endsection
