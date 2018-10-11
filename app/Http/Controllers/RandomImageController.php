<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomImageController extends Controller
{
    public function show()
    {
        $number = rand(1, 3);
        $img = Image::make(public_path("$number.jpg"));

        return $img->response();


    }
}
