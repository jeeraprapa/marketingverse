<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\App\Models\Brand;

class PhotoController extends Controller
{

    public function create (Brand $brand)
    {
        return view('admin::brand.photo.create',compact('brand'));
    }

    public function store(Brand $brand,Request $request){
        if($request->hasFile('photo')){
            $brand->addMediaFromRequest('photo')->toMediaCollection('photos');
        }

        $message = 'Photo created successfully';

        return redirect()->route('admin::brand.view',$brand)->with('success',$message);
    }

    public function destroy (Brand $brand,$photo)
    {
        $photo->deleteMedia($photo);

        $message = 'Photo deleted successfully';

        return redirect()->route('admin::brand.view',$brand)->with('success',$message);
    }
}
