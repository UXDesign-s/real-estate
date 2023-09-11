@extends('layouts.app')
@section('content')
    {{-- MAIN CONTENT --}}

    {{-- First Section Starts --}}
    <div class="container">
        <div class="row houseandPost ">
            <div class="col-md-6">
                <div class="sectionInput d-flex">
                    <h2><span class="green">30 second car</span> valuation</h2>
                    <input type="text" placeholder="Enter Your House number">
                    <input type="text" placeholder="Postcode">
                   <a href="{{route('check-registration')}}">
                    <input type="submit" value="Submit">
                </a> 
                    <p>Excellent 207,415 reviews on <i class="fa fa-star" aria-hidden="true"></i> Trustpilot </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sectionImage">
                    <img src="{{asset('images/mufasa.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    {{-- 3 Steps  Starts --}}
    <div class="container">
        <div class="row steps">
            <h2 class="text-center">Sell Your car in <span class="green">3 simple Steps</span></h2>
            <div class="col-md-4">
                <div class="stepstart text-center"> 
                    
                    <img src="{{asset('images/icon-1.png')}}" alt="">
                    <h3>1. Get your free valuation</h3>
                    <p>Start by entering your registration, mileage, email and postcode.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stepstart text-center">
                    <img src="{{asset('images/icon-2.png')}}" alt="">
                    <h3>2. Book an appointment</h3>
                    <p>Choose a date, time and branch that is convenient for you. We’ve got over 500 branches around the UK.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stepstart text-center">
                    <img src="{{asset('images/icon-3.png')}}" alt="">
                    <h3>3. Sell your car</h3>
                    <p>Drive to your chosen branch, we’ll confirm your valuation. If you’re happy, we’ll help with paperwork
                        and set up your payment.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 3 St5eps Ends --}}

    {{-- REVIEWS STARTS --}}
    <div class="reveiw container">        
        <div class="row justify-content-between">
            <h2 class="text-center">We'rated <span class="green">'Excellent'</span> on Trustpilot</h2>
            <div class="col-md-3 reviews">
                <div class="row rating align-content-center">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="star-rating d-flex justify-content-between">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="m-0">Invited</p>
                    </div>
                </div>
                <h3>Dacia</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis voluptates eveniet consequatur, nihil a molestias, illum sed provident velit</p>
                <p class="blur">username: 20 minutes ago</p>
            </div>

            <div class="col-md-3 reviews">
                <div class="row rating align-content-center">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="star-rating d-flex justify-content-between">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="m-0">Invited</p>
                    </div>
                </div>
                <h3>Dacia</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis voluptates eveniet consequatur, nihil a molestias, illum sed provident velit</p>
                <p class="blur">username: 20 minutes ago</p>
            </div>

            <div class="col-md-3 reviews">
                <div class="row rating align-content-center">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="star-rating d-flex justify-content-between">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="m-0">Invited</p>
                    </div>
                </div>
                <h3>Dacia</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis voluptates eveniet consequatur, nihil a molestias, illum sed provident velit</p>
                <p class="blur">username: 20 minutes ago</p>
            </div>
        </div>
    </div>



    {{-- REVIEWS ENDS  --}}

    {{-- VIDEO SECTION STARTS --}}
    <div class="container">
        <div class="row videosection align-items-center">
            <div class="col-md-6 videoContent">
                <h2>Check out our <br> <span class="green">‘Just Sold My Car’</span> advert!</h2>
                <p>The ‘Just Sold My Car’ campaign is now airing on TV - and features a catchy reimagining of ‘Friday’ by
                    Riton and Nightcrawlers, which captures that ‘Just Sold My Car’ feeling perfectly.</p>
            </div>
            <div class="col-md-6 videomain">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/y9j-BL5ocW8?si=xuK28p8SmipuVa92"
                    class="pinkborder" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>


    {{-- VIDEO SECTION ENDS --}}
@endsection
