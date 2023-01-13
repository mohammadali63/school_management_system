<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user,$users;
    public function index()
    {
        return view('admin.user.add');
    }
    public function Create(Request $request)
    {
        User::newUsers($request);
        return redirect('/add-user')->with('massage','Your Info Save Successfully');
    }
    public function manage()
    {
        return view('admin.user.manage',[
            'users' => User::all()
        ]);
    }
    public function Edit($id)
    {
        $this->user = User::find($id);
        return view('admin.user.edit',['user'=> $this->user]);
    }
    public function Update(Request $request, $id)
    {
        User::updateUser($request,$id);
        return redirect('/manage-user')->with('massage','Your Info Update Successfully');
    }
    public function Delete($id)
    {
        $this->user = User::find($id);
        $this->user->delete();
        return back();
    }

}
