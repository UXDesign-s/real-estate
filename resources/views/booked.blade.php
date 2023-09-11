@extends('layouts.app')
@section('content')

<div class="container">


    <!-- Your order second page -->
    <div class="row justify-content-between yourOrder">
      

        
        <div class="col-md-6">
            <h2>Your Appointment is booked</h2>
            <ul>
                <li>Date: 10/12/2023</li>
                <li>Time:</li>
                <li>Branch: <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea facere perspiciatis earum vitae, cumque blanditiis asperiores repudiandae tempore. Assumenda obcaecati inventore qui at quod accusamus velit molestias nam delectus. Doloribus!</p>
                </li>
                <li>Email:</li>
                <li>Date:</li>
                <li>Date:</li>
                <li>Date:</li>
            </ul>
 
        </div>
        <div class="col-md-6">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54252756.833981484!2d99.33200472013144!3d33.90702147533245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1694233142703!5m2!1sen!2sin"
                    width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"
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
