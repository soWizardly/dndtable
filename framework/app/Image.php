<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    
    public static function search() {
    
        $prefix = Storage::disk('images')->getAdapter()->getPathPrefix();
        $files  = Storage::disk('images')->allFiles();
        $max    = 120;
        $data   = [
            "totalHits" => count($files),
            "hits"      => []
        ];
        
        foreach($files as $file) {
            if (pathinfo($prefix.$file, PATHINFO_EXTENSION) == "png") {
                $size = getimagesize($prefix.$file);
                $url = Storage::disk('images')->url($file);
                $data["hits"][] = [
                    "largeImageURL"   => $url,
                    "webformatHeight" => $size[1] > $max ? $max : $size[1],
                    "webformatWidth"  => $size[0] > $max ? $max : $size[0],
                    "likes"           => 69,
                    "imageWidth"      => 5000,
                    "id"              => rand(1000000, 9999999),
                    "user_id"         => rand(1000000, 9999999),
                    "views"           => 69,
                    "comments"        => 69,
                    "pageURL"         => $url,
                    "imageHeight"     => $size[1] > $max ? $max : $size[1],
                    "webformatURL"    => $url,
                    "type"            => "photo",
                    "previewHeight"   => $size[1] > $max ? $max : $size[1],
                    "tags"            => "string,string,string",
                    "downloads"       => 1000,
                    "user"            => "someuser",
                    "favorites"       => 100,
                    "imageSize"       => $size[1] > $max ? $max : $size[1],
                    "previewWidth"    => $size[0] > $max ? $max : $size[0],
                    "userImageURL"    => $url,
                    "previewURL"      => $url,
                ];
            }
        }
        
        return $data;
    }
    
    public static function make($data) {
        list(, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $name = "map";
        Storage::disk('images')->put("$name.png",$data);
        return $name;
    }
}
