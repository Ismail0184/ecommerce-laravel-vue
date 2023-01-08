<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    private static $unit;

    public static function storeUnit($request)
    {
        self::$unit = new Unit();
        self::$unit->name = $request->name;
        self::$unit->entry_by = $request->entry_by;
        self::$unit->save();
    }

    public static function updateUnit($request, $id)
    {
        self::$unit = Unit::find($id);
        self::$unit->name = $request->name;
        self::$unit->entry_by = $request->entry_by;
        self::$unit->save();
    }

    public static function destroyUnit($id)
    {
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }
}
