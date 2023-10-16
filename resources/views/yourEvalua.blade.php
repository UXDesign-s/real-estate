@extends('layouts.app')
@section('content')

<div class="container">


    <!-- FOURTH PAGE STARTS -->
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
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
                <li> <img src="{{ assets('images/nexts.png') }}" alt=""> Lorem ipsum dolor sit amet consectetur adipisicing.</li>
            </ul>
        </div>
        <div class="col-md-7">
            <form action="/appointment" method="get">
            <p>Select branch and date</p>
            <div class="inputgroup d-flex">
                <input type="text" placeholder="Reading Whitly">
                <button>2.9 miles away</button>
            </div>
            <div class="row align-items-center justify-content-start calenderChart">
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
            </div>
            <div class="row align-items-center justify-content-start calenderChart">
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">Wed <br>23Aug</a>
                </div>
                <input type="submit" value="Submit" class="continue">
            </div>
            </form>
        </div>
        <div class="col-md-2">
            <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque minima eos hic nihil optio adipisci dicta eaque a?</p>
        </div>
    </div>



    <!-- FOURTH PAGE ENDS -->
</div>
@endsection
