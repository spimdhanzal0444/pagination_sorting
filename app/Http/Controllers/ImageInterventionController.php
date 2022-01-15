<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageInterventionController extends Controller
{
    public function image_blade_view(){
        return view('image.index');
    }

    public function image_blade_post(Request $request){
        if ($request->file('image')){
            $file = $request->file('image');
            $fileName =  time().'.'.$file->getClientOriginalExtension();

            Image::make($file)
                ->trim()
                ->resize(350, 200, function ($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->rotate(-5)->blur(10)
                ->text("This is Image Intervention", 20, 100, function ($font){
                    $font->color(array(255, 255, 255, 0.5));
                    $font->size(150);
                })
                ->opacity(100)
                ->save(public_path('upload/image'.$fileName));

            return "Image Uploaded..";
        }
    }

    public function image_delete(){
        unlink(public_path('upload/'. 'image1638720385.PNG'));
        return "Image Delete success..";
    }
}
