<?php
    namespace App\Models;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class Post{
    
        public static function all(){
            $files = File::files($path = resource_path("posts/"));

            return array_map(fn($files) => $files -> getContents(), $files);
        }
         

        public static function find($slug){
            if(! file_exists($path = resource_path("posts/{$slug}.html"))) {
             throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

        }
    }