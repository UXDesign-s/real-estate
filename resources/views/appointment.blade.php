@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- FIFTH PAGE STARTS -->
        <div class="yourOrder row">
            <div class="col-md-3">
                <h3>
                    Your Valuation
                </h3>
                <h2>$7200</h2>
                <h4>
                    We can settle finance
                </h4>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                </ul>
            </div>
            <div class="col-md-7">
                <form action="{{route('confirm-appointment')}}" method="get">
                <p>Select a time</p>
                <div class="row align-items-center justify-content-start calenderChart">
                    <div class="col-md-2 text-center">
                        <a href="#">10:00</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">10:20</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">10:40</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">11:00</a>
                    </div>
                </div>
                <div class="row align-items-center justify-content-start calenderChart">
                    <div class="col-md-2 text-center">
                        <a href="#">11:20</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">11:40</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">12:00</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">12:20</a>
                    </div>
                </div>
                <div class="row align-items-center justify-content-start calenderChart">
                    <div class="col-md-2 text-center">
                        <a href="#">12:40</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">01:00</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">01:20</a>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="#">01:40</a>
                    </div>
                </div>
                <input type="submit" value="Submit" class="continue">
                </form>
            </div>
            <div class="col-md-2">
                <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque minima eos hic
                    nihil optio adipisci dicta eaque a?</p>
            </div>
        </div>



        <!-- FIFTH PAGE ENDS -->

    </div>
@endsection
