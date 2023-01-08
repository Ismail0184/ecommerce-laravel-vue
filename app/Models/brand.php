<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    public static $brand, $image, $imageUrl, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function storeBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->entry_by = $request->entry_by;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->save();
    }

    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$brand->image;
        }
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->entry_by = $request->entry_by;
        self::$brand->image = self::$imageUrl;
        self::$brand->save();
    }

    public static function destroyBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }
}
