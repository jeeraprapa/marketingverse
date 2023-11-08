<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\App\Models\Brand;

class BrandController extends Controller
{

    public function index ()
    {
        $brands = Brand::paginate(10);
        return view('admin::brand.index',compact('brands'));
    }

    public function create ()
    {
        return view('admin::brand.create');
    }

    public function store (Request $request)
    {
        $data = $request->validate([
                'name'        => 'required',
                'description' => 'required',
                'youtube_url' => 'required',
                'slug'        => 'required',
            ]);
        $brand = Brand::create($data);

        if($request->hasFile('thumbnail')){
            $brand->addMediaFromRequest('thumbnail')->toMediaCollection('thumbnail');
        }
        if($request->hasFile('booth')){
            $brand->addMediaFromRequest('booth')->toMediaCollection('booth');
        }
        if($request->hasFile('line_qrcode')){
            $brand->addMediaFromRequest('line_qrcode')->toMediaCollection('line_qrcode');
        }
        if($request->hasFile('poster1')){
            $brand->addMediaFromRequest('poster1')->toMediaCollection('poster1');
        }
        if($request->hasFile('poster2')) {
            $brand->addMediaFromRequest('poster2')
                  ->toMediaCollection('poster2');
        }

        $message = 'Brand created successfully';
        return redirect()->route('admin::brand')->with('success',$message);
    }

    public function edit (Brand $brand)
    {
        return view('admin::brand.edit',compact('brand'));
    }

    public function update (Brand $brand,Request $request)
    {
        $data = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'youtube_url' => 'required',
            'slug'        => 'required',
        ]);

        $brand->update($data);

        if($request->hasFile('thumbnail')){
            $brand->clearMediaCollection('thumbnail');
            $brand->addMediaFromRequest('thumbnail')->toMediaCollection('thumbnail');
        }
        if($request->hasFile('booth')){
            $brand->clearMediaCollection('booth');
            $brand->addMediaFromRequest('booth')->toMediaCollection('booth');
        }
        if($request->hasFile('line_qrcode')){
            $brand->clearMediaCollection('line_qrcode');
            $brand->addMediaFromRequest('line_qrcode')->toMediaCollection('line_qrcode');
        }
        if($request->hasFile('poster1')){
            $brand->clearMediaCollection('poster1');
            $brand->addMediaFromRequest('poster1')->toMediaCollection('poster1');
        }
        if($request->hasFile('poster2')) {
            $brand->clearMediaCollection('poster2');
            $brand->addMediaFromRequest('poster2')
                  ->toMediaCollection('poster2');
        }

        $message = 'Brand updated successfully';
        return redirect()->route('admin::brand')->with('success',$message);
    }

    public function destroy (Brand $brand)
    {
        $brand->delete();

        $brand->clearMediaCollection('thumbnail');
        $brand->clearMediaCollection('booth');
        $brand->clearMediaCollection('line_qrcode');
        $brand->clearMediaCollection('poster1');
        $brand->clearMediaCollection('poster2');

        $message = 'Brand deleted successfully';
        return redirect()->route('admin::brand')->with('success',$message);
    }

    public function view (Brand $brand)
    {
        return view('admin::brand.view',compact('brand'));
    }

}
