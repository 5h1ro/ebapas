<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.setting.index', compact('user'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->to('admin');
    }
}
