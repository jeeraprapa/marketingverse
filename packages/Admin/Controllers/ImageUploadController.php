<?php

namespace Packages\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $request->validate([
                'upload'        => 'max:2048',
            ],
            [
                'poster.max' => 'The poster may not be greater than 2 MB.',
            ]);            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            if(env('FILESYSTEM_DRIVER') == 's3'){
                $url = Storage::disk('s3')->put('images/editor', $request->upload);
                $fileName = Storage::disk('s3')->url($url);
                $url = $fileName;
            }else{
                $request->file('upload')->move(public_path('media'), $fileName);
                $url = asset('media/' . $fileName);
            }

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
