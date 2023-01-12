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
        Teacher::newTeacher($request, $this->getTeacherCode($request));
        return redirect('/add/teacher')->with('massage','Teacher Info Save Successfully');
    }
    public function getTeacherCode($request)
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
        return $this->code;
    }

    public function manageTeacher()
    {
//        $this->teacher = Teacher::all();
//        $this->teacher = Teacher::orderBy('id', 'desc')->take(2)->get();
//        $this->teacher = Teacher::orderBy('id', 'desc')->skip(1)->take(2)->get();
        $this->teacher = Teacher::orderBy('id', 'desc')->get();
//        return $this->teacher;
        return view('admin.teacher.manage',[
            'teachers' => $this->teacher,
        ]);
    }
    public function editTeacher($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',[
            'teacher'=>$this->teacher
        ]);

    }
    public function updatrTeacher(Request $request, $id)
    {
       Teacher::UpdateTeacher($request,$id, $this->getTeacherCode($request));
        return redirect('/manage/teacher')->with('massage','Teacher Info Update Successfully');
    }
    public function deleteTeacher($id)
    {
        $this->teacher = Teacher::find($id);
        if (file_exists($this->teacher->image))
        {
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect('/manage/teacher')->with('massage','Teacher Info Delete Successfully');
    }

}
