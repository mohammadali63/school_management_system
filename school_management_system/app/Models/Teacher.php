<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    private static $image,$imageName,$imageUrl,$directory;
    public static function  getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'teacher-images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl =self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newTeacher($request,$code)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->code = $code;
        self::$teacher->email = $request->email;
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->image = self::getImageUrl($request);
        self::$teacher->save();
    }
}
