@extends('layouts.app')
@section('content')

<div class="container">


    <!-- Your order second page -->
    <div class="row justify-content-between yourOrder">
      
        <div class="col-md-3">
            <h3>Confirm Your Appointment</h3>
            <h6><span class="green">Appointmnet Summary</span></h6>
            <ul>
                <li><strong>Branch:</strong> Lorem Ipsum</li>
                <li><strong>Date: </strong>1/12/23</li>
                <li><strong>Time:</strong> 10:15</li>
            </ul>
        </div>  <div class="col-md-6">
            <form action="{{route('booked')}}" method="get">
                <div class="inputGroup">
                    <label>Name</label>
                    <input type="textz" placeholder="Email">
                </div>
                <div class="inputGroup">
                    <label>Email Addresss</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputGroup">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="Phone Number">
                </div>
                <input type="submit" value="Submit">
               
                </form>
        </div>
        <div class="col-md-3">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54252756.833981484!2d99.33200472013144!3d33.90702147533245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1694233142703!5m2!1sen!2sin"
                    width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="address">
                <p><strong>Address:</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <button>Not my address</button>
        </div>
    </div>


    <!-- Second page ends -->
</div>
@endsection
