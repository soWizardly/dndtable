<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    public function index() {
        
        return Image::search();
        ##dd(storage_path()."\\images");
       # $files = Storage::allFiles('public');
        dd("hi",$files);
    
        $data = [
            "totalHits" => 10,
            "hits" => []
        ];
        for($i=0;$i<5;$i++) {
            $data["hits"][] = [
                    "largeImageURL"   => "http://localhost/images/smalllogo.png",
                    "webformatHeight" => 63, //pz
                    "webformatWidth"  => 60, //px
                    "likes"           => 69,
                    "imageWidth"      => 5000,
                    "id"              => rand(1000000, 9999999),
                    "user_id"         => rand(1000000, 9999999),
                    "views"           => 69,
                    "comments"        => 69,
                    "pageURL"         => "http://localhost/images/smalllogo.png",
                    "imageHeight"     => 63,
                    "webformatURL"    => "http://localhost/images/smalllogo.png",
                    "type"            => "photo",
                    "previewHeight"   => 63,//px
                    "tags"            => "string,string,string",
                    "downloads"       => 1000,
                    "user"            => "someuser",
                    "favorites"       => 100,
                    "imageSize"       => 100,
                    "previewWidth"    => 60,
                    "userImageURL"    => "http://localhost/images/smalllogo.png",
                    "previewURL"      => "http://localhost/images/smalllogo.png",
                ];
        }
        
        return $data;
        
    }
    
    public function store() {
        $data = Input::all();
        return Image::make($data['url']);
    }
    
}
