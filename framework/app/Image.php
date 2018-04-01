<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    
    public static function search() {
    
        $files = Storage::allFiles('public');
        $data = [
            "totalHits" => count($files),
            "hits" => []
        ];
        foreach($files as $file) {
    
            if (pathinfo($file, PATHINFO_EXTENSION) == "png") {
                dd(Storage::getFacadeRoot());
                $size = getimagesize(Storage::getFacadeRoot().$file);
                dd($size);
        
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
        }
        
        return $files;
    }
    
    public static function make($data) {
        list(, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $name = "map";
        if (!is_dir(storage_path()."\\app\\public\\")) {
            mkdir(storage_path()."\\app\\public\\");
        }
        file_put_contents(storage_path()."\\app\\public\\$name.png", $data);
        return $name;
    }
}
