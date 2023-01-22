<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    public static $carousel, $image, $imageUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'carousel-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeCarousel($request)
    {
        self::$carousel = new Carousel();
        self::$carousel->title = $request->title;
        self::$carousel->heading = $request->heading;
        self::$carousel->name = $request->name;
        self::$carousel->entry_by = $request->entry_by;
        self::$carousel->description = $request->description;
        self::$carousel->image = self::getImageUrl($request);
        self::$carousel->save();
    }
}
