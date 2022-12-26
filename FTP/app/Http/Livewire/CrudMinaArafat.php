<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CrudMinaArafat extends Component
{

    public $webPath, $hajjpackage, $col;

    
        public function render()
        {
            return view('livewire.crud-mina-arafat');
        }

    public function minaDelete($id){
        back()->with('detail','Mina details was deleted from database');
        DB::delete('delete from minas where id = ?', [$id]);
    }

    public function arafatDelete($id){
        back()->with('detail','Arafat details was deleted from database');
        DB::delete('delete from arafats where id = ?', [$id]);    
    }


}
