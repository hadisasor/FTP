<?php

namespace App\Http\Livewire;

use App\Models\Hajjpackage;
use App\Models\MinaDetail;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class MinaDetails extends Component
{   

    public $minaDetails;

     protected $rules =[
        'minaDetails.*.information' => 'required',
    ];

    public function mount(){
        $this->minaDetails = MinaDetail::all();
    }

    public function add(){
        $this->minaDetails->push(new MinaDetail());
    }

    public function delete($i){
        $minaDetails = $this->minaDetails[$i];
        $this->minaDetails->forget($i);
    }


    public function render()
    {
        return view('admin.package_page.details.mina-details');
    }


}



// public  $hajjpackages = [];
// public $hajjpackage = [];

//     $url = URL::current();
//     $url = preg_replace('/[^0-9]/', '', $url);
//     $url = str_replace('1270018000','', $url);
//     $url = (array)$url;


//     $this->hajjpackages = Hajjpackage::find($url);
//     $this->hajjpackage = [];