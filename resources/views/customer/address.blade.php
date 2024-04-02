@extends('mobilelayouts.dash')

@section('content')


<div class="col-xs-12 col-sm-12">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="index.html">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span>Addresses</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin">
                <div class="profile-picture-container">
                    <img src="{{asset('mobstyle/images/address.svg')}}" alt="Profile Picture">
                </div>
            </div>
            <div class="address-title">My Addresses</div>

            <!--Address Page Links Container Start-->
            <div class="sign-up-form-container">
                <div class="width-100">

                    <!--Address Page Link Start-->
                    <div class="border-bottom-primary">
                        <a href="home-address.html" class="href-decoration-none home-options-list">
                            <span class="icon">
                                <img src="{{asset('mobstyle/icons/home.svg')}}" alt="Home Icon">
                            </span>
                            Home
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Address Page Link End-->

                    <!--Address Page Link Start-->
                    <div class="border-bottom-primary">
                        <a href="office-address.html" class="href-decoration-none home-options-list">
                            <span class="far fa-building icon"></span>
                            Office
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Address Page Link End-->

                    <!--Address Page Link Start-->
                    <div class="border-bottom-primary">
                        <a href="friend-address.html" class="href-decoration-none home-options-list">
                             <span class="icon">
                                <img src="{{asset('mobstyle/icons/avatar-dark.svg')}}" alt="Avatar Darker Icon">
                            </span>
                            My Friend Laura
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Address Page Link End-->

                    <!--Add Address Button Start-->
                    <div class="add-new-address">
                        <a href="add-new-address.html" class="btn btn-dark w-100 text-center">Add New Address <img class="plus-icon" src="../icons/plus.svg" alt="Add Icon"></a>
                    </div>
                    <!--Add Address Button End-->
                </div>
            </div>
            <!--Address Page Links Container End-->
        </div>
    </div>





@endsection