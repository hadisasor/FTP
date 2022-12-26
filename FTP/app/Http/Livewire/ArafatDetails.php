<?php

namespace App\Http\Livewire;

use App\Models\ArafatDetail;
use App\Models\Hajjpackage;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Symfony\Component\Routing\Route;

class ArafatDetails extends Component
{   
    
    public $arafatDetails;

    protected $rules =[
        'arafatDetails.*.information' => 'required',
    ];
    
    public function render()
    {
        return view('admin.package_page.details.arafat-details');
    }

    
    public function mount(){
        $this->arafatDetails = ArafatDetail::all();
    }
    
    public function add(){
        $this->arafatDetails->push(new ArafatDetail());
    }

    public function delete($i){
        $arafatDetails = $this->arafatDetails[$i];
        $this->arafatDetails->forget($i);
    }
    
}


// public  $hajjpackages = [];
// public $hajjpackage = [];
// $url = URL::current();
// $url =  strstr($url, 'create_hajj');

// if($url != 'create_hajj'){
// $url = URL::current();
// $url = preg_replace('/[^0-9]/', '', $url);
// $url = str_replace('1270018000','', $url);
// $url = (array)$url;
// $this->hajjpackages = Hajjpackage::find($url);
// $this->hajjpackage = [];

// }else if ($url == 'create_hajj'){
//     return view('admin.package_page.create_hajj');
// }