<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HajjPackage extends Model
{
    use HasFactory;
    protected $table = 'hajj_packages';
    protected $primaryKey = 'id';
    //Many packages can belong to one user function
    public function user()
    {   
        return $this->belongsTo(User::class);    
    }
    
    //Many packages can belong to many hotels function
    public function hotels(){
        return $this->belongsToMany(Hotel::class); 
    }



    public function details(){
        return $this->hasMany(Detail::class);
    }

    public function minas(){
        return $this->hasMany(MinaDetail::class);
    }

    public function arafats(){
        return $this->hasMany(ArafatDetail::class);
    }

    public function transports(){
        return $this->belongsToMany(Transport::class); 
        }

    }





// <?php

// namespace App\Models;


// class hajjpackage 
// {
//     public static function all() {
//         return[

//             [
//                 'id'=>1,
//                 'packagesdays'=>35,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Golden'
//             ],

//             [
//                 'id'=>2,
//                 'packagesdays'=>30,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Golden'

//             ],

//             [   
//                 'id'=>3,
//                 'packagesdays'=>60,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Golden'
//             ],

//             [   
//                 'id'=>4,
//                 'packagesdays'=>90,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Saver'
//             ],

//             [   
//                 'id'=>3,
//                 'packagesdays'=>60,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Silver'
//             ],

//             [   
//                 'id'=>4,
//                 'packagesdays'=>90,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Deluxe'
//             ],
            
//             [   
//                 'id'=>4,
//                 'packagesdays'=>90,
//                 'Toksehname'=>'',
//                 'Packagelevel'=>'Deluxe'
//             ],
        

        
//          ];
//     }

    // public static function find($id){

    //     $hajjpackages = self::all();
    //     foreach ($hajjpackages as $hajjpackage){
    //         if ($hajjpackage['id'] == $id){
    //             return $hajjpackage;
    //         }
    //     }
    // }





// //    //Deluxe funciton    
// //     public static function alldeluxe() {
// //         return[

// //             [
// //                 'id'=>1,
// //                 'packagesdays'=>35,
// //                 'Toksehname'=>''
// //             ],

// //             [
// //                 'id'=>2,
// //                 'packagesdays'=>30,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>3,
// //                 'packagesdays'=>60,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>4,
// //                 'packagesdays'=>90,
// //                 'Toksehname'=>''
// //             ],
        
// //          ];
// //     }

// //     public static function findD($id){

// //         $hajjDP = self::alldeluxe();
// //         foreach ($hajjDP as $hajjpackage){
// //             if ($hajjpackage['id'] == $id){
// //                 return $hajjpackage;
// //             }
// //         }
// //     }









// //  //Silver funciton

// //     public static function allgolden() {
// //         return[

// //             [
// //                 'id'=>1,
// //                 'packagesdays'=>25,
// //                 'Toksehname'=>''
// //             ],

// //             [
// //                 'id'=>2,
// //                 'packagesdays'=>13,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>3,
// //                 'packagesdays'=>15,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>4,
// //                 'packagesdays'=>14,
// //                 'Toksehname'=>''
// //             ],
        
// //          ];
// //     }

// //     public static function findG($id){

// //         $hajjGP = self::allgolden();
// //         foreach ($hajjGP as $hajjpackage){
// //             if ($hajjpackage['id'] == $id){
// //                 return $hajjpackage;
// //             }
// //         }
// //     }


// //     //Silver funciton

// //     public static function allsilver() {
// //         return[

// //             [
// //                 'id'=>1,
// //                 'packagesdays'=>25,
// //                 'Toksehname'=>''
// //             ],

// //             [
// //                 'id'=>2,
// //                 'packagesdays'=>30,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>3,
// //                 'packagesdays'=>20,
// //                 'Toksehname'=>''
// //             ],

// //             [   
// //                 'id'=>4,
// //                 'packagesdays'=>30,
// //                 'Toksehname'=>''
// //             ],
        
// //          ];
// //     }

// //     public static function findS($id){

// //         $hajjSP = self::allsilver();
// //         foreach ($hajjSP as $hajjpackage){
// //             if ($hajjpackage['id'] == $id){
// //                 return $hajjpackage;
// //             }
// //         }
// //     }


// //   //saver funciton

// //   public static function allsaver() {
// //     return[

// //         [
// //             'id'=>1,
// //             'packagesdays'=>25,
// //             'Toksehname'=>''
// //         ],

// //         [
// //             'id'=>2,
// //             'packagesdays'=>30,
// //             'Toksehname'=>''
// //         ],

// //         [   
// //             'id'=>3,
// //             'packagesdays'=>60,
// //             'Toksehname'=>''
// //         ],

// //         [   
// //             'id'=>4,
// //             'packagesdays'=>90,
// //             'Toksehname'=>''
// //         ],
    
// //      ];
// // }

// // public static function findSv($id){

// //     $hajjSvP = self::allsaver();
// //     foreach ($hajjSvP as $hajjpackage){
// //         if ($hajjpackage['id'] == $id){
// //             return $hajjpackage;
// //         }
// //     }
// // }




// }
