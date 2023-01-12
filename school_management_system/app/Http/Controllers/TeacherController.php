<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $code,$updateString,$id,$name,$year,$teacher,$teachers;
    public function index()
    {
        return view('admin.teacher.add');
    }

    public function CreateTeacher(Request $request)
    {
        $this->teacher = Teacher::orderBy('id', 'desc')->first();
        if ($this->teacher)
        {
            $this->id = $this->teacher->id + 1;
        }
        else
        {
            $this->id = 1;
        }
        $this->updateString = preg_replace('/[^A-Za-z0-9]/','',$request->name);
        $this->name = strtoupper(substr($this->updateString, 0,3));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        Teacher::newTeacher($request, $this->code);
        return redirect('/add/teacher')->with('massage','Teacher Info Save Successfully');
    }

    public function manageTeacher()
    {
        return view('admin.teacher.manage');
    }
}
