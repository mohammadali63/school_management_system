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
        $this->user = new User();
        $this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->save();

        return redirect('/add-user')->with('massage','Your Info Save Successfully');
    }
    public function manage()
    {
        return view('admin.user.manage');
    }

}
