<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HotelCrud extends Component
{


    public $webPath, $umrahpackage, $hajjpackage, $hotels;
    public $madinaHotel, $makkaHotel; 

    public function render()
    {   
        
        return view('livewire.hotel-crud');
    }
}
