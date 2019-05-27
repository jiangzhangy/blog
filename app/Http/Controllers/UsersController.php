<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
            return view('users.create');
    }    //
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    /**
     * 注册用户
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'  =>  'required|max:50',
            'email' =>  'required|email|unique:users|max:255',
            'password'  =>  'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name'  => $request->name,
            'email' =>  $request->email,
            'password'  =>  $request->password,
        ]);
        session()->flash('success', '恭喜注册成功！开始进入美的圈子吧~~');
        return redirect()->route('users.show', [$user]);
    }

}


