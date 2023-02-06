<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\images;
use Illuminate\Support\Facades\Storage;


// nwe image isert

class UploadImagesController extends Controller
{
    public function upload_banner(Request $request){

        $image = $request->file('upload');
        $fileType = time().'.'.$image->getClientOriginalExtension();

        /** @var Illuminate\Filesystem\FilesystemAdapter */
        $filesystem = Storage::disk('banner_image');
        $filesystem->putFileAs($image, $fileType);

        images::insert(
            [
                'imgPath'=>$image,
                'imgType' =>'banner',
            ]);

                
            return redirect()->back();
    }
}
