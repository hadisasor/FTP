<?php

namespace App\Http\Livewire;
use App\Models\Detail;
use App\Models\Hajjpackage;
use App\Models\UmrahPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class PackageDetails extends Component
{

    

    // public $hajjpackages = [];
    // public $hajjpackage = [];
    // public $umrahpackages = [];
    // public $umrahpackage = [];
    public $details;
    public $hajj_id ;
    

    protected $rules =[
        'details.*.information' => 'required',
    ];

    public function render()
    {
        
        return view('admin.package_page.details.package-details');
    }
    
    public function mount(){

        
        $this->details = Detail::all();

    }

    
    public function add(){
        $this->details->push(new Detail());
    }

    public function delete($i){
        $details = $this->details[$i];
        $this->details->forget($i);
    }

    public function save(){
      
        $this->validate();
        foreach($this->details as $detail){
            $detail->save();
        }
         session()->flash('success','the data has been saved successfully');

    }

  
}



       
        // was in mount
        // $url = URL::current();
        // $url = preg_replace('/[^0-9]/', '', $url);
        // $url = str_replace('1270018000','', $url);
        // $url = (array)$url;

        
        // $this->hajjpackages = Hajjpackage::find($url);
        // $this->hajjpackage = [];

        // $this->umrahpackages = UmrahPackage::find($url);
        // $this->umrahpackage = [];