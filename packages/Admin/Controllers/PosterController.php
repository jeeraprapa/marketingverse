<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\App\Models\Brand;

class PosterController extends Controller
{

    public function create (Brand $brand)
    {
        return view('admin::brand.poster.create',compact('brand'));
    }

    public function store(Brand $brand,Request $request){
        if($request->hasFile('poster')){
           $request->validate([
                'poster'        => 'nullable|max:2048',
            ],
            [
                'poster.max' => 'The poster may not be greater than 2 MB.',
            ]);
            $brand->addMediaFromRequest('poster')->toMediaCollection('posters');
        }

        $message = 'Poster created successfully';

        return redirect()->route('admin::brand.view',$brand)->with('success',$message);
    }

    public function destroy (Brand $brand,$poster)
    {
        $brand->deleteMedia($poster);

        $message = 'Poster deleted successfully';

        return redirect()->route('admin::brand.view',$brand)->with('success',$message);
    }
}
