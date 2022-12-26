<?php

namespace App\Http\Livewire;

use App\Models\Hajjpackage;
use App\Models\UmrahPackage;
use App\Models\Transport;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class TransportaionDetails extends Component
{

    public $transports;

    protected $rules =[
        'transports.*.car' => 'required',
        'transports.*.destination' => 'required',
    ];

    public function render ()
    {   
        return view('admin.package_page.details.transportaion-details');
    }
    
    public function mount(){
        $this->transports = Transport::all();
    }
    

    public function add(){
        $this->transports->push(new Transport());
    }

    public function delete($i){
        $transports = $this->transports[$i];
        $this->transports->forget($i);
    }
    
}

// public  $hajjpackages = [];
// public $hajjpackage = [];

// public $umrahpackages = [];
// public $umrahpackage = [];

// $url = URL::current();
// $url = preg_replace('/[^0-9]/', '', $url);
// $url = str_replace('1270018000','', $url);
// $url = (array)$url;


// $this->hajjpackages = Hajjpackage::find($url);
// $this->hajjpackage = [];
//  $this->umrahpackages = UmrahPackage::find($url);
// $this->umrahpackage = [];