<?php

namespace App\Http\Controllers;

use App\Models\BookingDetail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AppointmentController extends Controller
{
    public function getAppointmentEmail(Request $request){


        // dd($request->all());
        session()->put('getAppointmentByEmail', $request->email);

        return redirect(route('manage-appointment'));
    }

    public function manageAppointment(){


        $appointments = UserDetail::where('email', session('getAppointmentByEmail'))->first();

        return view('appointments', compact('appointments'));
    }
   
   
    public function appointmentDetails($id){

        $response = Http::get('https://api.postcodes.io/postcodes/'.session("postCode"))->json();
        // dd($response);
        // 
        $addressData = $response['result'];
       
        // dd($this->addressData);
        // dd($this->meeting_date);
        $getUserDetail = BookingDetail::where('id', $id)->first();
        // dd($getUserDetail->user_detail->property_detail);

        return view('appointmentDetails', compact('getUserDetail', 'addressData'));
    }
}
