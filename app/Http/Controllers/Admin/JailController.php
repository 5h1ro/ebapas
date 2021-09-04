<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jail;
use App\Models\Napi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JailController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $jail = Jail::all()->sortBy("name");
        return view('admin.jail.index', compact('user', 'jail'));
    }

    public function add()
    {
        $user = Auth::user();
        $jail = Jail::all()->sortBy("name");
        return view('admin.jail.add', compact('user', 'jail'));
    }

    public function store(Request $request)
    {
        $jail = new Jail;
        $jail->name        = $request->name;
        $jail->save();

        return redirect()->to('admin');
    }

    public function update(Request $request, $id)
    {
        $jail = Jail::find($id);
        $jail->name        = $request->name;
        $jail->save();

        return redirect()->to('jail');
    }

    public function delete($id)
    {
        $jail = Jail::find($id);
        $jail->delete();

        return redirect()->to('jail');
    }
}
