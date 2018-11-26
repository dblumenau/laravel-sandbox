<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RandomImageController extends Controller
{
    public function show()
    {
        $number = rand(1, 3);
        $img = Image::make(public_path("$number.jpg"));

        return $img->response();
    }

    public function show2()
    {
        $number = rand(1, 2);
        $img = Image::make(public_path("kaplan/$number.jpg"));

        return $img->response();
    }
}
