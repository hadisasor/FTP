<?php

namespace App\Http\Controllers;

use App\Models\HajjPackage;
use App\Models\travel;
use App\Models\UmrahPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudPackage extends Controller
{ 

     public function createHajj(Request $request){
         
        $this->validate(request(), [ 
        'groupLeader'=>'required',
        'PackageName'=>'required',
        'stayingDays'=>'required',
        'makkaHotel'=>'required',
        'madinaHotel'=>'required',
        'groupNumber'=>'required',
        'packagePrice'=>'required',
        'Th_airline'=>'required',
        'Th_departmentDate'=>'required',
        'S_arrivalDate'=>'required',
        'S_airline'=>'required',
        'S_departmentDate'=>'required',
        'Th_arrivalDate'=>'required',
        ]);

        
        $user_id = auth()->user()->id;
        $groupLeader = $request->input('groupLeader');
        $PackageName = $request->input('PackageName');
        $stayingDays = $request->input('stayingDays');
        $makkaHotel = $request->input('makkaHotel');
        $madinaHotel = $request->input('madinaHotel');
        $numberOfPilgrims = $request->input('numberOfPilgrims');
        $groupNumber = $request->input('groupNumber');
        $packagePrice = $request->input('packagePrice');
         //from Thai to Saudi Airline
         $Th_airline = $request->input('Th_airline');
         //Department from thai
         $Th_departmentDate = $request->input('Th_departmentDate');
         //Saudi Arrival
         $S_arrivalDate = $request->input('S_arrivalDate');
         //From Saudi to thai Airline
         $S_airline = $request->input('S_airline');
         //Department from Saudi
         $S_departmentDate = $request->input('S_departmentDate');
         //Thai Arrival
         $Th_arrivalDate = $request->input('Th_arrivalDate');
         //get array values from inputs
         $packageDetails = $request->packageDetails; // request gotta be like this to be able to get the array value
         $minaDetails = $request->minaDetails;
         $arafatDetails = $request->arafatDetails;
        
            DB::insert('insert into hajj_packages
            (   
            user_id,  
            groupLeader,
            PackageName,
            stayingDays,
            numberOfPilgrims,
            groupNumber,
            packagePrice,
            Th_airline,
            Th_departmentDate,
            S_arrivalDate,
            S_airline,
            S_departmentDate,
            Th_arrivalDate) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',
            [
            
            $user_id,    
            $groupLeader,
            $PackageName,
            $stayingDays,
            $numberOfPilgrims,
            $groupNumber,
            $packagePrice,
            $Th_airline,
            $Th_departmentDate,
            $S_arrivalDate,
            $S_airline,
            $S_departmentDate,
            $Th_arrivalDate]);
       
           //-------------------- many to many || one to many database implementations -----------------------------------------     
            $id = HajjPackage::select('id')->orderBy('id','desc')->first(); // get the current package id
            $id = $id['id']; // get only id from the package

            
            if($id){
                // Package details inputs *--------------------------
                if($packageDetails){
                    for ($i=0; $i < count($packageDetails); $i ++){ 
    
                    $dataSave = [
                        'hajj_package_id' => $id,
                        'umrah_package_id' => null,
                        'information' => $packageDetails[$i],
                        'img' => null,
                    ];
                    DB::table('details')->insert($dataSave);
                }}
    
                // Mina details inputs *--------------------------
                // if($minaDetails){
                // for ($i=0; $i < count($minaDetails); $i ++){
                //     $dataSave = [
                //         'hajj_package_id' => $id,
                //         'information' => $minaDetails[$i],
                //     ];
                //     DB::table('minas')->insert($dataSave);
                // }}
    
                // Arafat details inputs *--------------------------
                // if($arafatDetails){
                // for ($i=0; $i < count($arafatDetails); $i ++){
                //     $dataSave = [
                //         'hajj_package_id' => $id,
                //         'information' => $arafatDetails[$i],
                //     ];
                //     DB::table('arafats')->insert($dataSave);
                // }}

            DB::insert('insert into hajj_package_hotel (hajj_package_id, hotel_id) values(?,?)',
            [$id,$makkaHotel]);    

            DB::insert('insert into hajj_package_hotel (hajj_package_id, hotel_id) values(?,?)',
            [$id,$madinaHotel]); 
            }else{sleep(2);}

            return redirect()->to('admin/hajjpackages')->with('added','new package was created');  
         }





//------------------------------------------------------------------------------------------------------------------------------------         
//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------



    public function editingHajj(Request $request, $id){
        //deleting the pivot row first to update it 
        DB::delete('delete from hajj_package_hotel where hajj_package_id = ?', [$id] );
        DB::delete('delete from details where hajj_package_id = ?', [$id] );
        DB::delete('delete from minas where hajj_package_id = ?', [$id] );
        DB::delete('delete from arafats where hajj_package_id = ?', [$id] );

        $this->validate(request(), [ 
            'groupLeader'=>'required',
            'PackageName'=>'required',
            'stayingDays'=>'required',
            'makkaHotel'=>'required',
            'madinaHotel'=>'required',
            'groupNumber'=>'required',
            'packagePrice'=>'required',
            'Th_airline'=>'required',
            'Th_departmentDate'=>'required',
            'S_arrivalDate'=>'required',
            'S_airline'=>'required',
            'S_departmentDate'=>'required',
            'Th_arrivalDate'=>'required',
                ]);

            $hajjpackage = HajjPackage::find($id);
            $user_id = $hajjpackage['user_id'];

            $groupLeader = $request->input('groupLeader');
            $PackageName = $request->input('PackageName');
            $Stayingdays = $request->input('stayingDays');
            $makkaHotel = $request->input('makkaHotel');
            $madinaHotel = $request->input('madinaHotel');
            $numberOfPilgrims = $request->input('numberOfPilgrims');
            $groupNumber = $request->input('groupNumber');
            $PackagePrice = $request->input('packagePrice');
            //from Thai to Saudi Airline
            $Th_airline = $request->input('Th_airline');
            //Department from thai
            $Th_departmentDate = $request->input('Th_departmentDate');
            //Saudi Arrival
            $S_arrivalDate = $request->input('S_arrivalDate');
            //From Saudi to thai Airline
            $S_airline = $request->input('S_airline');
            //Department from Saudi
            $S_departmentDate = $request->input('S_departmentDate');
            //Thai Arrival
            $Th_arrivalDate = $request->input('Th_arrivalDate');

            //get array values from inputs
            $packageDetails = $request->packageDetails; // request for array valie gotta be like this 
            $minaDetails = $request->minaDetails;
            $arafatDetails = $request->arafatDetails;


         DB::update('update hajj_packages set 
                user_id=?,
                groupLeader= ?,
                PackageName = ?,              
                numberOfPilgrims = ?, 
                groupNumber = ?,            
                packagePrice = ?, 
                Th_airline = ?,            
                Th_departmentDate = ?, 
                S_arrivalDate = ?, 
                S_airline = ?,            
                S_departmentDate = ?, 
                Th_arrivalDate = ?, 
                stayingDays = ? 
                where id = ?', [
               $user_id,
               $groupLeader, 
               $PackageName, 
               $numberOfPilgrims, 
               $groupNumber, 
               $PackagePrice,
               $Th_airline,
               $Th_departmentDate, 
               $S_arrivalDate, 
               $S_airline, 
               $S_departmentDate, 
               $Th_arrivalDate, 
               $Stayingdays, 
               $id]);

               //-------------------- many to many || one to many database implementations -----------------------------------------

               DB::insert('insert into hajj_package_hotel (hajj_package_id, hotel_id) values(?,?)',
               [$id,$makkaHotel]);    
               DB::insert('insert into hajj_package_hotel (hajj_package_id, hotel_id) values(?,?)',
               [$id,$madinaHotel]); 

              // Package details inputs *--------------------------
              if($packageDetails){
                for ($i=0; $i < count($packageDetails); $i ++){ 

                $dataSave = [
                    'hajj_package_id' => $id,
                    'umrah_package_id' => null,
                    'information' => $packageDetails[$i],
                    'img' => null,
                ];
                DB::table('details')->insert($dataSave);
            }}

            // Mina details inputs *--------------------------
            // if($minaDetails){
            // for ($i=0; $i < count($minaDetails); $i ++){
            //     $dataSave = [
            //         'hajj_package_id' => $id,
            //         'information' => $minaDetails[$i],
            //     ];
            //     DB::table('minas')->insert($dataSave);
            // }}

            // Arafat details inputs *--------------------------
            // if($arafatDetails){
            // for ($i=0; $i < count($arafatDetails); $i ++){
            //     $dataSave = [
            //         'hajj_package_id' => $id,
            //         'information' => $arafatDetails[$i],
            //     ];
            //     DB::table('arafats')->insert($dataSave);
            // }}

               
     
            return redirect('admin/hajjpackages')->with('success', 'Data of package group number '. $id .' has been updated');
          
            // 'bedsPrice'=>$request->input('bedsPrice'),
    }



//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------


    
    public function createUmrah(Request $request){
         
        $this->validate(request(), [ 
        'groupLeader'=>'required',
        'PackageName'=>'required',
        'stayingDays'=>'required',
        'makkaHotel'=>'required',
        'madinaHotel'=>'required',
        'groupNumber'=>'required',
        'packagePrice'=>'required',
        'Th_airline'=>'required',
        'Th_departmentDate'=>'required',
        'S_arrivalDate'=>'required',
        'S_airline'=>'required',
        'S_departmentDate'=>'required',
        'Th_arrivalDate'=>'required',
        ]);

        // get value from inputs
        $user_id = auth()->user()->id;
        $groupLeader = $request->input('groupLeader');
        $PackageName = $request->input('PackageName');
        $stayingDays = $request->input('stayingDays');
        $makkaHotel = $request->input('makkaHotel');
        $madinaHotel = $request->input('madinaHotel');
        $numberOfPilgrims = $request->input('numberOfPilgrims');
        $groupNumber = $request->input('groupNumber');
        $packagePrice = $request->input('packagePrice');
        //from Thai to Saudi Airline
        $Th_airline = $request->input('Th_airline');
        //Department from thai
        $Th_departmentDate = $request->input('Th_departmentDate');
        //Saudi Arrival
        $S_arrivalDate = $request->input('S_arrivalDate');
        //From Saudi to thai Airline
        $S_airline = $request->input('S_airline');
        //Department from Saudi
        $S_departmentDate = $request->input('S_departmentDate');
        //Thai Arrival
        $Th_arrivalDate = $request->input('Th_arrivalDate');

        //get array values from inputs
        $packageDetails = $request->packageDetails; // request gotta be like this to be able to get the array value


             DB::insert('insert into umrah_packages
            ( 
            user_id, 
            groupLeader,
            PackageName,
            stayingDays,
            numberOfPilgrims,
            groupNumber,
            packagePrice,
            Th_airline,
            Th_departmentDate,
            S_arrivalDate,
            S_airline,
            S_departmentDate,
            Th_arrivalDate) values(?,?,?,?,?,?,?,?,?,?,?,?,?)',
            [ 
            $user_id,
            $groupLeader,
            $PackageName,
            $stayingDays,
            $numberOfPilgrims,
            $groupNumber,
            $packagePrice,
            $Th_airline,
            $Th_departmentDate,
            $S_arrivalDate,
            $S_airline,
            $S_departmentDate,
            $Th_arrivalDate]);
       

            
            //-------------------- many to many || one to many database implementations -----------------------------------------

            $id = UmrahPackage::select('id')->orderBy('id','desc')->first(); // get the current package id
            $id = $id['id']; // get only id from the package

            if($id){
                // Package details inputs *--------------------------
                DB::insert('insert into hotel_umrah_package (umrah_package_id, hotel_id) values(?,?)',
                [$id,$makkaHotel]);    
                DB::insert('insert into hotel_umrah_package (umrah_package_id, hotel_id) values(?,?)',
                [$id,$madinaHotel]); 

                if($packageDetails){
                    for ($i=0; $i < count($packageDetails); $i ++){
    
                        $dataSave = [
                            'hajj_package_id' => null,
                            'umrah_package_id' => $id,
                            'information' => $packageDetails[$i],
                            'img' => null,
                        ];
                        DB::table('details')->insert($dataSave);
                    }
                }
                }else{sleep(2);}
        
    
            // Return back to multiplie packages page ------------------------------------------------------------
            return redirect()->to('admin/umrahpackages')->with('added','new package was created');  
         }


         
         public function editingUmrah(Request $request, $id){
        //deleting the pivot row first to update it 
        DB::delete('delete from hotel_umrah_package where umrah_package_id = ?', [$id] );
        DB::delete('delete from details where umrah_package_id = ?', [$id] );  
        

        $this->validate(request(), [ 
            'groupLeader'=>'required',
            'PackageName'=>'required',
            'stayingDays'=>'required',
            'makkaHotel'=>'required',
            'madinaHotel'=>'required',
            'groupNumber'=>'required',
            'packagePrice'=>'required',
            'Th_airline'=>'required',
            'Th_departmentDate'=>'required',
            'S_arrivalDate'=>'required',
            'S_airline'=>'required',
            'S_departmentDate'=>'required',
            'Th_arrivalDate'=>'required',
            ]);

        $umrahpackage = UmrahPackage::find($id);
        $user_id = $umrahpackage['user_id'];
        $groupLeader = $request->input('groupLeader');
        $PackageName = $request->input('PackageName');
        $Stayingdays = $request->input('stayingDays');
        $makkaHotel = $request->input('makkaHotel');
        $madinaHotel = $request->input('madinaHotel');
        $numberOfPilgrims = $request->input('numberOfPilgrims');
        $groupNumber = $request->input('groupNumber');
        $PackagePrice = $request->input('packagePrice');
    
        //from Thai to Saudi Airline
        $Th_airline = $request->input('Th_airline');
        //Department from thai
        $Th_departmentDate = $request->input('Th_departmentDate');
        //Saudi Arrival
        $S_arrivalDate = $request->input('S_arrivalDate');
        //From Saudi to thai Airline
        $S_airline = $request->input('S_airline');
        //Department from Saudi
        $S_departmentDate = $request->input('S_departmentDate');
        //Thai Arrival
        $Th_arrivalDate = $request->input('Th_arrivalDate');
        //array inputs
        $packageDetails = $request->packageDetails; // request gotta be like this to be able to get the array value
        
        
        DB::update('update umrah_packages set 
        user_id=?,
        groupLeader= ?, 
        PackageName = ?, 
        numberOfPilgrims = ?, 
        groupNumber = ?, 
        packagePrice = ?, 
        Th_airline = ?, 
        Th_departmentDate = ?, 
        S_arrivalDate = ?, 
        S_airline = ?,
        S_departmentDate = ?, 
        Th_arrivalDate = ?, 
        stayingDays = ? 
        where id = ?', [
            $user_id,
            $groupLeader, 
            $PackageName, 
            $numberOfPilgrims, 
            $groupNumber, 
            $PackagePrice, 
            $Th_airline,
            $Th_departmentDate, 
            $S_arrivalDate, 
            $S_airline, 
            $S_departmentDate, 
            $Th_arrivalDate, 
            $Stayingdays, 
            $id]);
            

            // ------------------------------ many to many || one to many database implementation ------------------------------

            DB::insert('insert into hotel_umrah_package (umrah_package_id, hotel_id) values(?,?)',
            [$id,$makkaHotel]);        
            DB::insert('insert into hotel_umrah_package (umrah_package_id, hotel_id) values(?,?)',
            [$id,$madinaHotel]); 

            if($packageDetails){
            for ($i=0; $i < count($packageDetails); $i ++){
    
                $dataSave = [
                    'hajj_package_id' => null,
                    'umrah_package_id' => $id,
                    'information' => $packageDetails[$i],
                    'img' => null,
                ];
    
                // return dd($dataSave);
                DB::table('details')->insert($dataSave);
            }}


        return redirect('admin/umrahpackages')->with('success', 'Data of package group number '. $id .' has been updated');
}


public function createTravel(Request $request){

   traveling = new travel;

}


 public function editingTravel(Request $request){



 }

 public function deleteTravel(Request $request){

    

 }

//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------

    public function deleteHajj($id){
        DB::delete('delete from hajj_packages where id = ?', [$id] );
        return redirect('admin/hajjpackages')->with('deleted', 'package group '.$id.' has been deleted');
    }

    public function deleteUmrah($id){
        DB::delete('delete from umrah_packages where id = ?', [$id] );
        return redirect('admin/umrahpackages')->with('deleted', 'package group '.$id.' has been deleted');
    }

}

        // DB::delete('DELETE umrah_package, hotel_umrah_package table
        // FROM umrah_package INNER JOIN hotel_umrah_package table
        
        // ON umrah_package.id = hotel_umrah_package.umrah_package_id
        // WHERE umrah_package.id = 1
        // ',[$id]);