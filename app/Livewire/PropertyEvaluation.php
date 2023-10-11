<?php

namespace App\Livewire;

use App\Models\BookingDetail;
use App\Models\PropertyDetail;
use App\Models\UserDetail;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PropertyEvaluation extends Component
{


    public $page_1_show = true;
    public $page_2_show  = false;
    public $page_3_show   = false;
    public $page_4_show = false;
    public $page_5_show    = false;
    public $page_6_show    = false;


    public $houseNo;
    public $postCode;
    public $email;
    public $phone_no;
    public $property_type;
    public $bedroom;
    public $rent_length;
    public $steps;
    public $data;
    public $meeting_date;
    public $meeting_branch;
    public $booking_date;
    public $booking_time;
    public $meeting_time;
    public $booking_email;
    public $name;
    public $mobile_no;
    public $getUserDetails;
    public $addressData;


    protected $rules = [
        'email' => 'required|email|unique',
        'phone_no' => 'required|min:6',
    ];

    public function mount()
    {

        $email = session("email");
        $this->getUserDetails = UserDetail::where('email', $email)->first();

        if (!session('houseNo')) {

            // dd("adsd", $this->getUserDetails, $email);

            return redirect(route('home'));
        }
        $bookingDate = [];
        for ($i = 0; $i < 9; $i++) {

            $date = Carbon::today()->addDays($i);
            $formattedDate = $date->format('D d/M');
            $bookingDate[] = $formattedDate;
        }
        $this->booking_date = $bookingDate;


        $bookingTime = [];

        // Get the current hour and minute
        $currentHour = Carbon::now()->hour;
        $currentMinute = Carbon::now()->minute;

        // Loop through the remaining hours of the day
        for ($hour = $currentHour; $hour < 24; $hour++) {
            // Check if it's the current hour, and adjust the starting minute accordingly
            $startMinute = ($hour === $currentHour) ? $currentMinute : 0;

            // Create the time string
            $time = Carbon::now()->setHour($hour)->setMinute($startMinute)->format('H:i');

            $bookingTime[] = $time;
        }
        $this->booking_time = $bookingTime;

        $this->email = $this->getUserDetails->email ?? "";
        // $this->houseNo = $this->getUserDetails->houseNo;
        // $this->postCode = $this->getUserDetails->postCode;
        $this->phone_no = $this->getUserDetails->phone_no ?? "";
        $this->steps = $this->getUserDetails->steps ?? "";
        $this->name = $this->getUserDetails->booking_detail->name   ?? "";
        $this->booking_email = $this->getUserDetails->booking_detail->booking_email   ?? "";
        $this->mobile_no = $this->getUserDetails->booking_detail->mobile_no   ?? "";
        $this->property_type = $this->getUserDetails->property_detail->property_type ?? "";
        $this->bedroom = $this->getUserDetails->property_detail->bedrooms ?? "";
        $this->rent_length = $this->getUserDetails->property_detail->rent_length ?? "";


        // dd( $this->getUserDetails->property_detail->rent_length);
    }


    public function pageOne()
    {

        $this->validate([
            'email' => 'required|email',
            'phone_no' => 'required|min:6',
        ]);

        // dd(session('houseNo'));

        $houseNo = session("houseNo");
        $postCode = session("postCode");


        $user =  UserDetail::updateOrCreate([
            "email" => $this->email,
            "postCode" => $postCode
        ], [

            "phone_no" => $this->phone_no,
            "steps" => 1,
        ]);


        // dd($user->id);
        PropertyDetail::updateOrCreate([
            "postCode" => $postCode,
            "user_detail_id" => $user->id,
        ]);

        session()->put('email', $this->email);
        session()->flash('message', 'Step 1 Completed successfully.');
        $this->page_1_show = false;
        $this->page_2_show = true;
        // dd($this->validate());

    }

    public function pageTwo()
    {

        $this->validate([
            'property_type' => 'required',
            'bedroom' => 'required',
            'rent_length' => 'required',

        ]);


        $houseNo = session("houseNo");
        $postCode = trim(session("postCode"));

        $email = session("email");
        UserDetail::where("email", $email)->update([
            "steps" => 2,
        ]);


        // dd($bookingDate);

        $getUserUd = UserDetail::where("email", $email)->first();

        $response = Http::get('https://api.propertydata.co.uk/prices?key=5FRZROYKDO&postcode=' . $postCode . '&bedrooms=' . $this->bedroom . '&type=' . $this->property_type)->json();
        // dd($response);

        if ($response['status'] == 'error') {

            session()->flash('error', $response['message']);
        } else {


            PropertyDetail::where('user_detail_id', $getUserUd->id)->update([

                "houseNo" => $houseNo,
                "bedrooms" => $this->bedroom,
                "bedrooms" => $this->bedroom,
                "rent_length" => $this->rent_length,
                "property_type" => $this->property_type,
                "points_analysed" => $response['data']['points_analysed'],
                "radius" => $response['data']['radius'],
                "average_price" => $response['data']['average'],
                "raw_data" => serialize($response['data']['raw_data']),

            ]);



            $this->data = $response['data'];

            session()->flash('message', 'Step 2 Completed successfully.');
            $this->page_2_show = false;
            $this->page_3_show = true;
        }
    }


    public function pageThree()
    {

        $email = session("email");
        UserDetail::where("email", $email)->update([
            "steps" => 3,
        ]);


        // dd($this->meeting_date);
        $this->getUserDetails = UserDetail::where('email', $email)->first();

        BookingDetail::updateOrCreate(
            ['user_detail_id' => $this->getUserDetails->id],

            [
                'meeting_branch' => $this->meeting_branch,
                'meeting_date' => $this->meeting_date
            ]
        );



        $this->page_3_show = false;
        $this->page_4_show = true;
    }


    public function pageFour()
    {

        $email = session("email");
        UserDetail::where("email", $email)->update([
            "steps" => 4,
        ]);


        // dd($this->meeting_date);
        $this->getUserDetails = UserDetail::where('email', $email)->first();

        BookingDetail::updateOrCreate(
            ['user_detail_id' => $this->getUserDetails->id],

            [
                'meeting_time' => $this->meeting_time,
            ]
        );

        $this->page_4_show = false;
        $this->page_5_show = true;
    }


    public function pageFive()
    {

        $email = session("email");
        UserDetail::where("email", $email)->update([
            "steps" => 5,
        ]);


        $response = Http::get('https://api.postcodes.io/postcodes/'.session("postCode"))->json();
        // dd($response);
        // 
        if($response){
        $this->addressData = $response;
        }
        // dd($this->addressData);
        // dd($this->meeting_date);
        $this->getUserDetails = UserDetail::where('email', $email)->first();

        BookingDetail::updateOrCreate(
            ['user_detail_id' => $this->getUserDetails->id],

            [
                'name' => $this->name,
                'email' => $this->booking_email,
                'mobile_no' => $this->mobile_no
            ]
        );

        $this->page_5_show = false;
        $this->page_6_show = true;
    }




    public function back($formShow, $formHide)
    {

        $varShow = "page_" . $formShow . "_show";
        $varHide = "page_" . $formHide . "_show";

        // dd("page_".$varHide."_show");

        $this->$varShow =  true;
        $this->$varHide =  false;
    }

    public function forward($formShow, $formHide)
    {


        $varShow = "page_" . $formShow . "_show";
        $varHide = "page_" . $formHide . "_show";
        // dd("page_".$varHide."_show");
        // dd("page_".$formId."_show");

        $this->$varShow =  true;
        $this->$varHide =  false;
    }

    public function render()
    {

        $email = session("email");
        $this->getUserDetails = UserDetail::where('email', $email)->first();

        // dd($this->getUserDetails->booking_detail);
        $this->email = $this->getUserDetails->email ?? "";
        // $this->houseNo = $this->getUserDetails->houseNo;
        // $this->postCode = $this->getUserDetails->postCode;
        $this->phone_no = $this->getUserDetails->phone_no ?? "";
        $this->steps = $this->getUserDetails->steps ?? "";
        $this->meeting_branch = $this->getUserDetails->booking_detail->meeting_branch ?? "";
        $this->meeting_date = $this->getUserDetails->booking_detail->meeting_date   ?? "";
        $this->meeting_time = $this->getUserDetails->booking_detail->meeting_time   ?? "";
        $this->name = $this->getUserDetails->booking_detail->name   ?? "";
        $this->booking_email = $this->getUserDetails->booking_detail->email   ?? "";
        $this->mobile_no = $this->getUserDetails->booking_detail->mobile_no   ?? "";
        $this->property_type =  $this->getUserDetails->property_detail->property_type ?? "";
        $this->bedroom =  $this->getUserDetails->property_detail->bedrooms ?? "";
        $this->rent_length =  $this->getUserDetails->property_detail->rent_length ?? "";
        $this->data =  $this->getUserDetails->property_detail ?? '';
        // dd($this->getUserDetails->property_detail->rent_length);

        return view('livewire.property-evaluation');
    }
}
