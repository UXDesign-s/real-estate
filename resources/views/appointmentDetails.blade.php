@extends('layouts.app')
@section('content')

<div class="container">


    <!-- Your order second page -->
    <div class="row justify-content-between py-5">
      

        
        <div class="col-md-6">
            <h2>Complete Evaluation</h2>
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
                        <th scope="row"></th>
                        <td>RG2 0HB <br><a href="#">Get Direction</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Email:</th>
                        <td>{{$getUserDetail->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone:</th>
                        <td>{{$getUserDetail->mobile_no}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Valuation:</th>
                        <td>${{ isset($data['average']) ? number_format($getUserDetail->user_detail->property_detail->average_price, 2) : number_format($getUserDetail->user_detail->property_detail->average_price, 2) }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ref:</th>
                        <td>{{$getUserDetail->ref_no}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fee:</th>
                        <td><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusantium facilis maxime, iure nulla nemo?<br><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, accusantium.</strong></p></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td class="prinit" onclick="window.print();"><a href="#">Print Appointment</a>
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
                <p><strong>Address:</strong>{{$addressData['primary_care_trust']}}, {{$addressData['european_electoral_region']}},  {{$addressData['country']}} </p>
            </div>
            <button>Not my address</button>
        </div>
    </div>

    {{-- <div class="row neededDoc">
        <div class="col-md-4">
            <h3>Documents</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet </li>
                <li>Lorem ipsum dolor sit amet </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Your ID</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet </li>
                <li>Lorem ipsum dolor sit amet </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Finance Details</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet </li>
                <li>Lorem ipsum dolor sit amet </li>
            </ul>
        </div>
    </div>

    <div class="aboutValuation">
        <h3>About Your Valuation</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio deserunt error dolores eligendi illo suscipit sed magni reprehenderit, tenetur qui alias! Sapiente, ad recusandae! Velit vero ipsa itaque laboriosam molestiae quisquam impedit doloremque libero error, alias rem labore fugit porro reiciendis nam est ducimus assumenda adipisci maiores dolorum veritatis perspiciatis! <br>Nostrum, maiores adipisci atque voluptatibus ex repudiandae enim iure commodi perferendis porro illo eius similique, vitae minima nemo quod reprehenderit veritatis tempora facere error odio facilis, fugiat odit modi. Temporibus perferendis facilis maiores, earum dolores voluptatum! Possimus corrupti optio aspernatur reiciendis dolores vel qui eaque odio ipsam enim, numquam repellendus ratione amet officia tempora at rem repellat adipisci praesentium dicta inventore facere quod perspiciatis suscipit. Obcaecati praesentium aut sapiente distinctio adipisci, tempore vitae assumenda veniam perspiciatis similique quis aliquid ducimus quas earum perferendis molestiae recusandae itaque illum non facilis libero placeat. Consequatur recusandae eos maiores quia ipsum perferendis ducimus iusto!</p>
    </div> --}}

    <!-- Second page ends -->
</div>

@endsection
