@extends('layouts.app')
@section('content')

<div class="container">


    <!-- Your order second page -->
    <div class="row justify-content-between yourOrder">
      

        
        <div class="col-md-6">
            <h2>Your Appointment is booked</h2>
           
            <table class="table evaluationMy">
                {{-- <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead> --}}
                <tbody>
                    <tr>
                        <th scope="row">Date:</th>
                        <td><span class="greencolor"> 25th Aug 2023</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Time:</th>
                        <td><span class="greencolor">12:40</span></td>
                    </tr>
                    <tr>
                        <th scope="row">Meeting Address:</th>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, explicabo. <br><a href="#">Get Directions</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Email:</th>
                        <td>loremipsum@gmail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone:</th>
                        <td>9874563210</td>
                    </tr>
                    <tr>
                        <th scope="row">Valuation:</th>
                        <td><p>&4500<br><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, accusantium.</strong></p></td>
                    </tr>
                    <tr>
                        <th scope="row">Ref:</th>
                        <td>WBAC 14578</td>
                    </tr>
                    <tr>
                        <th scope="row">Ref:</th>
                        <td>WBAC 14578</td>
                    </tr>
                    <tr>
                        <th scope="row">Fee:</th>
                        <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusantium facilis maxime, iure nulla nemo?<br><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, accusantium.</strong></p></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td class="prinit"><a href="#">Print Appointment</a>
                        <a href="#">Add to Calender</a>
                        </td>
                    </tr>
                </tbody>
            </table>
 
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
