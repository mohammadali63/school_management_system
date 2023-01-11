<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.add');
    }

    public function CreateTeacher(Request $request)
    {
        return $request->all();
    }

    public function manageTeacher()
    {
        return view('admin.teacher.manage');
    }
}
