<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function upload(Request $request)
    {
        $filePaths = [];

        foreach ($request->file('file') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            // Store the image path in the database
            $filePaths[] = 'uploads/' . $imageName;
        }

        Image::create(['image' => json_encode($filePaths)]);
        return back();
    }

    public function showImages()
    {
        $image = Image::all();

        return view('/show',['images' => $image]);
    }
}
