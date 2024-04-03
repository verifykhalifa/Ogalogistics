@extends('mobilelayouts.driver')

@section('content')


<div class="col-xs-12 col-sm-12 remaining-height">

<!--Page Title & Icons Start-->
<div class="header-icons-container text-center">
    <span class="float-left back-to-map hidden">
        <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
    </span>
    <span class="title">Offline</span>
    <a href="#">
        <span class="float-right menu-open closed">
            <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
        </span>
    </a>
</div>
<!--Page Title & Icons End-->

<!--Google Maps Start-->
<div id="map" class="h-100"></div>
<!--Google Maps End-->

<!--All Notifications & Status Container Start-->
<div class="change-request-status">
    <label class="switch float-left">
        <input type="checkbox">
        <span class="slider"></span>
    </label>
    <img src="{{asset('mobstyle/icons/map-position.svg')}}" class="float-right" alt="Map Position">
    <div class="clearfix"></div>

    <!--Notification Container Start-->
    <div class="request-notification-container map-notification offline-notification map-notification-warning">
        You are offline!
        <div class="font-weight-light">
            Go online to accept jobs!
        </div>
    </div>
    <!--Notification Container End-->

    <!--Notification Container Start-->
    <div class="request-notification-container hidden map-notification meters-left-450 map-notification-warning">
        450 meters to the final goal
        <div class="font-weight-light">
            <span><img src="{{asset('mobstyle/icons/path-right.svg')}}" class="direction-icon"> </span>  Turn Right on Main Street
        </div>
    </div>
    <!--Notification Container End-->

    <!--Notification Container Start-->
    <div class="request-notification-container hidden map-notification meters-left-50 map-notification-warning">
        50 meters to the final goal
        <div class="font-weight-light">
            <span><img src="{{asset('mobstyle/icons/path-left.svg')}}" class="direction-icon"> </span> Turn left on Victoria Avenue
        </div>
    </div>
    <!--Notification Container End-->

    <!--Link Notification Container Start-->
    <a href="new-requests.html" class="new-request href-decoration-none">
        <div class="request-notification-container hidden map-notification new-request-notification">
            3 New Requests!
            <div class="font-weight-light">
                Please accept or decline request
            </div>
        </div>
    </a>
    <!--Link Notification Container End-->

</div>
<!--All Notifications & Status Container End-->

<!--Go To Pickup Button Start-->
<div class="go-to-pickup-btn hidden">
    <button type="button" class="btn btn-primary text-uppercase">Go to Pickup</button>
</div>
<!--Go To Pickup Button End-->

<!--Tapped Car Information Container Start-->
<div class="tapped-car-info request hidden">
    <div class="request-item-container remaining-height">
        <div class="profile-information text-center">
            <div class="profile-information">
                <img class="profile-picture-img" src="{{asset('mobstyle/images/profile-16.png')}}" alt="Profile Picture">
                <div class="profile-name font-18">Amanda Legren</div>
            </div>
        </div>
        <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
            <div class="history-item driver-request">

                <!--Wishes Container Start-->
                <div class="notification-container">
                    <div class="grey-label">Wishes</div>
                    <p class="grey-label font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis velit vitae enim gravida lacinia. Ut at auctor arcu. Ut eu pellentesque tortor.
                    </p>
                </div>
                <!--Wishes Container End-->

                <div class="border-bottom-primary">
                    <div class="status-container status-container-driver">
                    </div>
                </div>

                <!--Addresses Container Start-->
                <div class="addresses-container position-relative driver-addresses-container">
                    <div class="height-auto">
                        <div class="w-100 map-input-container map-input-container-top">
                            <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                            <div class="map-input mr-0 display-flex">
                                <input class="controls flex-1 font-weight-light" type="text"
                                       placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                            </div>
                        </div>
                        <div class="w-100 map-input-container map-input-container-bottom">
                            <span class="map-input-icon">
                                <img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon">
                            </span>
                            <div class="map-input mr-0 display-flex border-0">
                                <input class="controls flex-1 font-weight-light" type="text"
                                       placeholder="Enter a destination location" value="Palo Alto" disabled>
                            </div>
                            <span class="dotted-line"></span>
                        </div>
                    </div>
                </div>
                <!--Addresses Container End-->

                <!--All Trips Container Start-->
                <div class="all-trip-fares">
                    <div class="border-bottom-primary border-bottom-light-grey">
                        <div class="text-uppercase trip-fare">Trip Fare</div>
                    </div>
                    <div class="trip-fare-container trip-fare-driver font-weight-light">

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Estimate Price</span>
                            <span class="float-right blue-price">$12.30</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Distance</span>
                            <span class="float-right blue-price">5.54 km</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Distance from Customer</span>
                            <span class="float-right blue-price">0.740 km</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                    </div>
                </div>
                <!--All Trips Container End-->

                <!--Accept Or Decline Container Start-->
                <div class="request-btn-container display-flex justify-content-between">
                    <div class="request-btn">
                        <button type="button" class="btn btn-transparent text-uppercase">Decline</button>
                    </div>
                    <div class="request-btn">
                        <button type="button" class="btn btn-primary w-100 font-weight-light text-uppercase btn-accept">Accept</button>
                    </div>
                </div>
                <!--Accept Or Decline Container End-->

            </div>
        </div>
    </div>
</div>
<!--Tapped Car Information Container End-->

<div class="request-ride-info hidden">
    <div class="tapped-car-container">
        <div class="tapped-car-info-container">

            <!--Profile Information Start-->
            <div class="text-center">
                <img class="profile-picture-img" src="{{asset('mobstyle/images/profile-18.png')}}" alt="Profile Picture">
                <div class="tapped-car-info-header-icons float-right">
                    <div class="double-up slide-up font-20 float-right">
                        <img src="{{asset('mobstyle/icons/uparrow.svg')}}" alt="Uparrow Icon">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div>
                    Amanda Legran
                </div>
            </div>
            <!--Profile Information End-->

            <div class="overflow-scroll-y">

                <!--Wishes Container Start-->
                <div class="notification-container addAddress">
                    <div class="grey-label font-13">Wishes</div>
                    <div class="grey-label font-helvFTrip Fetica font-weight-light font-13">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Praesent quis velit vitae enim gravida lacinia.
                        Ut at auctor arcu. Ut eu pellentesque tortor.
                    </div>
                    <div class="border-bottom-primary border-bottom-light-grey">
                        <div class="status-container status-container-driver">
                        </div>
                    </div>
                </div>
                <!--Wishes Container End-->

                <!--Address Container Start-->
                <div class="addresses-container position-relative driver-addresses-container hidden border-bottom-primary">
                    <div class="height-auto">
                        <div class="w-100 map-input-container map-input-container-top">
                            <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                            <div class="map-input mr-0 display-flex">
                                <input class="controls flex-1 font-weight-light" type="text"
                                       placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                            </div>
                        </div>
                        <div class="w-100 map-input-container map-input-container-bottom">
                            <span class="map-input-icon">
                                <img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon">
                            </span>
                            <div class="map-input mr-0 display-flex border-0">
                                <input class="controls flex-1 font-weight-light" type="text"
                                       placeholder="Enter a destination location" value="Palo Alto" disabled>
                            </div>
                            <span class="dotted-line"></span>
                        </div>
                    </div>
                </div>
                <!--Address Container End-->

                <!--All Trip Fare Items Container Start-->
                <div class="all-trip-fares hidden">
                    <div class="border-bottom-primary border-bottom-light-grey">
                        <div class="text-uppercase trip-fare">Trip Fare</div>
                    </div>
                    <div class="trip-fare-container trip-fare-driver font-weight-light">

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Trip Price</span>
                            <span class="float-right blue-price">$17.89</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Distance</span>
                            <span class="float-right blue-price">15.45 km</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                        <!--Trip Fare Item Start-->
                        <div class="trip-fare-item">
                            <span class="float-left">Time Since Departure</span>
                            <span class="float-right blue-price">1 Hour 25 Minutes</span>
                            <span class="clearfix"></span>
                        </div>
                        <!--Trip Fare Item End-->

                    </div>
                </div>
                <!--All Trip Fare Items Container End-->

                <div class="drop-off-btn-container hidden">
                    <button type="button" class="btn btn-primary font-weight-light w-100 text-uppercase">Drop off</button>
                </div>

                <div class="finish-ride-btn-container hidden">
                    <a href="index.html" class="btn btn-finish font-weight-light w-100 text-uppercase">Complete Trip</a>
                </div>

                <!--Pickup Buttons Container Start-->
                <div class="pickup-btn-container display-flex">
                    <div class="pickup-btn-item">
                        <button type="button" class="btn btn-dark text-uppercase pick-up">Pick Up</button>
                    </div>
                    <div class="pickup-btn-other">
                        <div class="pickup-btn-item">
                            <a href="chat.html" class="btn btn-dark text-uppercase">
                                <span class="fas fa-comments font-20"></span>
                            </a>
                        </div>
                        <div class="pickup-btn-item">
                            <button type="button" class="approved-icon call text-uppercase">
                                <span class="fas fa-phone text-white font-20"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Pickup Buttons Container End-->

            </div>
        </div>
    </div>
</div>
</div>



@endsection