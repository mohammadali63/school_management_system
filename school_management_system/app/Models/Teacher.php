<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    public static function newTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->code = '';
        self::$teacher->email = $request->email;
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->image = '';
        self::$teacher->save();
    }
}
