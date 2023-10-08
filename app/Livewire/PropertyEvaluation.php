<?php

namespace App\Livewire;

use App\Models\BookingDetail;
use App\Models\PropertyDetail;
use App\Models\UserDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PropertyEvaluation extends Component
{


    public $page_1_show = true;
    public $page_2_show  = false;
    public $page_3_show   = false;
    public $page_4_show = false;
    public $page_5_show    = false;


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


    protected $rules = [
        'email' => 'required|email|unique',
        'phone_no' => 'required|min:6',
    ];

    public function mount(){

        $email = session("email");
        $getUserDetails = UserDetail::where('email', $email)->first();
        
        if(!session('houseNo')){

            dd("adsd", $getUserDetails, $email);

            return redirect( route('home') );
        }

        $this->email = $getUserDetails->email??"";
        // $this->houseNo = $getUserDetails->houseNo;
        // $this->postCode = $getUserDetails->postCode;
        $this->phone_no = $getUserDetails->phone_no ?? "";    
        $this->steps = $getUserDetails->steps ?? "";  
        $this->property_type = $getUserDetails->property_detail->property_type ?? "";  
        $this->bedroom = $getUserDetails->property_detail->bedrooms ?? "";  
        $this->rent_length = $getUserDetails->property_detail->rent_length ?? ""; 
        
        
        // dd( $getUserDetails->property_detail->rent_length);
    }


    public function pageOne(){

        $this->validate([
            'email' => 'required|email',
            'phone_no' => 'required|min:6',
        ]);

        // dd(session('houseNo'));

        $houseNo = session("houseNo");
        $postCode = session("postCode");
        

       $user =  UserDetail::updateOrCreate([
            "email"=> $this->email, 
            "postCode"=> $postCode
        ],[
            
            "phone_no"=> $this->phone_no,
            "steps"=> 1,
        ]);


        // dd($user->id);
        PropertyDetail::updateOrCreate([
            "postCode"=> $postCode,
            "user_detail_id"=> $user->id,
        ]);

        session()->put('email', $this->email);
        session()->flash('message', 'Step 1 Completed successfully.');
        $this->page_1_show = false;
        $this->page_2_show = true;
        // dd($this->validate());

    }

    public function pageTwo(){
       
        $this->validate([
            'property_type' => 'required',
            'bedroom' => 'required',
            'rent_length' => 'required',
           
        ]);


        $houseNo = session("houseNo");
        $postCode = trim(session("postCode"));

        $email = session("email");
        UserDetail::where("email" , $email)->update([
            "steps"=> 2,
        ]);

        $getUserUd = UserDetail::where("email", $email)->first(); 
        
        $response = Http::get('https://api.propertydata.co.uk/prices?key=5FRZROYKDO&postcode='.$postCode.'&bedrooms='.$this->bedroom.'&type='.$this->property_type)->json();
        // dd($response);

        if($response['status'] == 'error'){

            session()->flash('error', $response['message']);

        }else{


            PropertyDetail::where('user_detail_id' , $getUserUd->id )->update([
                
                "houseNo"=> $houseNo,
                "bedrooms"=> $this->bedroom,
                "bedrooms"=> $this->bedroom,
                "rent_length"=> $this->rent_length,
                "property_type"=> $this->property_type,
                "points_analysed"=> $response['data']['points_analysed'],
                "radius"=> $response['data']['radius'],
                "average_price"=> $response['data']['average'],
                "raw_data"=> serialize($response['data']['raw_data']),
    
            ]);
    

            $this->data = $response['data'];

            session()->flash('message', 'Step 2 Completed successfully.');
            $this->page_2_show = false;
            $this->page_3_show = true;
        }


    }


    public function pageThree(){

        $email = session("email");
        UserDetail::where("email" , $email)->update([
            "steps"=> 3,
        ]);


        // dd($this->meeting_date);
        $getUserDetails = UserDetail::where('email', $email)->first();

        BookingDetail::updateOrCreate(
            ['user_details_id'=> $getUserDetails->id],
           
           [ 
            'meeting_branch' => $this->meeting_branch,
            'meeting_date' => $this->meeting_date
        ]);

        

            $this->page_3_show = false;
            $this->page_4_show = true;
    }


    public function pageFour(){

        $email = session("email");
        UserDetail::where("email" , $email)->update([
            "steps"=> 4,
        ]);


        // dd($this->meeting_date);
        $getUserDetails = UserDetail::where('email', $email)->first();

        BookingDetail::updateOrCreate(
            ['user_details_id'=> $getUserDetails->id],
           
           [ 
            'meeting_time' => $this->meeting_branch,
        ]);

            $this->page_4_show = false;
            $this->page_5_show = true;
    }


    


    public function back($formShow, $formHide ){
    
        $varShow = "page_".$formShow."_show";
        $varHide = "page_".$formHide."_show";

        // dd("page_".$formId."_show");

        $this->$varShow =  true ;
        $this->$varHide =  false ;
   
    }

    public function forward($formShow, $formHide ){
    
        
        $varShow = "page_".$formShow."_show";
        $varHide = "page_".$formHide."_show";

        // dd("page_".$formId."_show");

        $this->$varShow =  true ;
        $this->$varHide =  false ;
   
    }

    public function render()
    {

        $email = session("email");
        $getUserDetails = UserDetail::where('email', $email)->first();

        $this->email = $getUserDetails->email??"";
        // $this->houseNo = $getUserDetails->houseNo;
        // $this->postCode = $getUserDetails->postCode;
        $this->phone_no = $getUserDetails->phone_no ?? "";    
        $this->steps = $getUserDetails->steps ?? "";  
        $this->property_type =  $getUserDetails->property_detail->property_type ?? "";  
        $this->bedroom =  $getUserDetails->property_detail->bedrooms ?? "";  
        $this->rent_length =  $getUserDetails->property_detail->rent_length ?? "" ;  
        $this->data =  $getUserDetails->property_detail ?? '';
        // dd($getUserDetails->property_detail->rent_length);

        return view('livewire.property-evaluation');
    }
}
