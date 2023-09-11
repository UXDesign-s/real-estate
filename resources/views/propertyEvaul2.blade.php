@extends('layouts.app')
@section('content')

<div class="container">


    <!-- Your order second page -->
    <div class="row justify-content-between yourOrder">
      
        <div class="col-md-3">
            <h3>Your Details</h3>
            <p>Step 1 of 2</p>
        </div>  <div class="col-md-6">
            <form action="/your-evaluation" method="get">
            <div class="inputGroup">
                <select id="selectField" name="Property Type">
                    <option value="Property Type">Property Type</option>
                    <option value="Detached">Detached</option>
                    <option value="Semi-Detached">Semi-Detached</option>
                    <option value="Terrace">Terrace</option>
                    <option value="Flat">Flat</option>
                </select>
            </div>
            <div class="inputGroup">
                <select id="selectField" name="Property Type">
                    <option value="How many Bedrooms">How many Bedrooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            <div class="inputGroup">
                <select id="selectField" name="Property Type">
                    <option value="Length of Rent">Length of Rent</option>
                    <option value="3 years">3 Years</option>
                    <option value="4 Years">4 Years</option>
                    <option value="5 Years">5 Years</option>
                </select>
            </div>
            <input type="submit" value="Submit">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam placeat reiciendis cumque accusantium
                enim deleniti veritatis quo distinctio ad ipsam quia libero temporibus molestiae unde, quisquam eos
                dignissimos quaerat perspiciatis animi nostrum praesentium! Alias quos excepturi quisquam? Hic, sit
                suscipit sapiente harum quae facere vero, beatae nostrum voluptate, ratione cum blanditiis ad magni
                dicta ipsum fugit iusto nisi.</p>
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
