@extends('mobilelayouts.layouts')

@section('content')

<div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container position-relative text-center">
            <span class="float-left back-to-map hidden">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
            <span class="title">Oga Logistics</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        
        <!--Page Title & Icons End-->
               <!--Google Maps Start-->
               <div id="map-container" class="h-100"></div>

               <!--Tapped Car Information Container Start-->
    <form id="tripDetailsForm" method="POST" action="{{route('request.ride')}}"> 
        @csrf
        <div class="">
            <div class="request-item-container remaining-height">
                
                <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                    <div class="history-item driver-request">

                       

                        <div class="border-bottom-primary">
                            <div class="status-container status-container-driver">
                            </div>
                        </div>

                        
                        <div class="margin-top-10 height-auto" id="origin-input-container">
                {{-- <span id="current-location"></span> --}}
                <div class="w-100 map-input-container map-input-container-top mt-3">
                    <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                    <div class="map-input display-flex">
                        <input id="location-input" class="controls flex-1" type="text" style="border: solid 2px; border-radius: 5px; border-color: #c4c0c0;"  placeholder="    Pick up location">
                    </div>
                </div>
                <div class="w-100 map-input-container map-input-container-bottom mt-3">
                    <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                    <div class="map-input display-flex">
                        <input id="destination-input" class="controls flex-1" type="text" style="border: solid 2px; border-radius: 5px; border-color: #c4c0c0; font-weight: 400"  placeholder="    Enter a destination location">
                    </div>
                    <span class="dotted-line-index"></span>
                </div>
                <ul id="suggestion-list"></ul>  
            </div>
            {{-- <p id="distance"></p> --}}
            <div class="payment-options">
                <div class="default-payment-method-container display-flex">
                    {{-- <div class="cars-options">
                        <div class="car-option" data-about-target-id="about-section-1">
                            <img src="{{asset('mobstyle/icons/audi.svg')}}" alt="Car Option 1">
                        </div>
                        <div class="car-option active" data-about-target-id="about-section-2">
                            <img src="{{asset('mobstyle/icons/limusine.svg')}}" alt="Car Option 2">
                        </div>
                        <div class="car-option" data-about-target-id="about-section-3">
                            <img src="{{asset('mobstyle/icons/minivan.svg')}}" alt="Car Option 3">
                        </div>
                    </div> --}}
                    <div class="about-section display-flex">
                        <div>
                            <div class="about-section-title" style="margin-left: 20px">
                                <strong id="trip_cost_init"></strong>
                            </div>
                            <div class="trip-fare-container trip-fare-driver font-weight-light">

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Estimate Price</span>
                                    <span class="float-right blue-price" id="trip-cost" ></span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Distance</span>
                                    <span class="float-right blue-price" id="trip-distance"></span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    <span class="float-left">Time</span>
                                    <span class="float-right blue-price" id="trip-time"></span>
                                    <span class="clearfix"></span>
                                </div>
                                <!--Trip Fare Item End-->

                            </div>
                        </div>
                    </div>
                    {{-- <div style="display:flex">
                        <h5 id="trip-distance"></h5>
                        <h5 id="trip-time"></h5>
                        <h5 id="trip-cost"></h5>
                    </div>
                </div> --}}
            </div>
                <input type="hidden" id="origin_address" name="origin">
                <input type="hidden" id="destination_address" name="destination">
                <input type="hidden" id="trip_distance" name="trip_distance">
                <input type="hidden" id="trip_time" name="trip_time">
                <input type="hidden" id="trip_cost" name="trip_cost">
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <div style="margin-top: 10px">
                <button type="submit" id="button1" class="btn btn-primary" style="width:100%">Request a Ride</button>
            </div>
            </div>
            
        </div>
        <!--Tapped Car Information Container End-->


             
    </div>
</form>
@endsection