<?php

namespace Ellego\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public static function upload($image, $dest='', $prefix='')
    {

        $title = $prefix . '-' . time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images/'. $dest), $title);

        return($title);
    }
}
