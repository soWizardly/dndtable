<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    public function index() {
        return Image::search();
    }
    
    public function store() {
        $data = Input::all();
        return Image::make($data['url']);
    }
    
}
