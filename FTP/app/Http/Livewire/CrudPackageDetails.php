<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CrudPackageDetails extends Component
{


    public $webPath, $hajjpackage, $umrahpackage;



    public function render()
    {
        return view('livewire.crud-package-details');
    }


    public function packageDelete($id){
        back()->with('detail','Deleting detail from database ');
        DB::delete('delete from details where id = ?', [$id]);
    }



}
