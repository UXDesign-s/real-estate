@extends('layouts.app')
@section('content')

{{-- @dd($appointments) --}}
    <div class="container mt-5 mb-5">
        <h2 class="mb-3">Your Appointmemt List</h2>
        <h6>Your Email : {{session('getAppointmentByEmail')}}</h6>
       <div class="row">
        {{-- <div class="col-md-3"></div> --}}
        <div class="col-md-6">
            <table class="table evaluationMy mt-3">
                    
                    <thead>
                        <th>Sr No</th>
                        <th>Ref:</th>
                        <th>Booking Email</th>
                        <th>Action</th>
                    </thead>
                <tbody>

                    @foreach ($appointments->booking_detail as  $appointment)
                        <tr>
                            {{-- <th scope="row">Email:</th> --}}
                            <td>{{$loop->index+1}}</td>
                            <td>{{$appointment->ref_no}}</td>
                            <td>{{$appointment->email}}</td>
                            <td>
                                <a href="{{route('appointmentDetails', $appointment->id)}}">
                                    View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                    {{-- <tr>
                        <th scope="row">Phone:</th>
                        <td>+1 (471) 132-4384</td>
                    </tr>
                    <tr>
                        <th scope="row">Valuation:</th>
                        <td>$1,337,000.00</td>
                    </tr>
                    <tr>
                        <th scope="row">Ref:</th>
                        <td>WBAC 506908384</td>
                    </tr>
                  
                    <tr>
                        <th scope="row"></th>
                        <td class="prinit" onclick="window.print();"><a href="#">Print Appointment</a>
                        <a href="#">Add to Calender</a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        {{-- <div class="col-md-1">

        </div> --}}
        <div class="col-md-6">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54252756.833981484!2d99.33200472013144!3d33.90702147533245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1694233142703!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       </div>

    </div>
@endsection
