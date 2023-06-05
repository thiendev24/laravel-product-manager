<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class ProductController extends Controller
{
    public function create()
    {
        return view('product/create');
    }

    public function list()
    {
        return view('product/list');
    }
}
