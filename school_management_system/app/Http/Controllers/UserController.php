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
        return view('admin.user.manage');
    }

}
