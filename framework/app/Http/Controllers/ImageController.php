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
    
    public function pushToTable() {
        $data = Input::all();
        
        #$data = \File::get($data);
        var_dump($data);exit();
        
        return Image::make($data['url']);
    }
    
    public function store() {
        
        $file = Input::all()[0];
        if (!$file) {
            throw new \InvalidArgumentException("You must upload a file");
        }
        
        $path = storage_path()."\Backgrounds";
        if (\File::exists($path)) {
            mkdir($path,777);
        }
    
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
    
        return $path.DIRECTORY_SEPARATOR.$fileName;
    }
    
}
