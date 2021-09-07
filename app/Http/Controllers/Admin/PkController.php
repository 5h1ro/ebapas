<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jail;
use App\Models\Napi;
use App\Models\Pk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pk = Pk::all()->sortBy("name");
        return view('admin.pk.index', compact('user', 'pk'));
    }

    public function add()
    {
        $user = Auth::user();
        $pk = Pk::all()->sortBy("name");
        return view('admin.pk.add', compact('user', 'pk'));
    }

    public function store(Request $request)
    {
        $pk = new Pk;
        $pk->name        = $request->name;
        $pk->save();

        return redirect()->to('admin');
    }

    public function update(Request $request, $id)
    {
        $pk = Pk::find($id);
        $pk->name        = $request->name;
        $pk->save();

        return redirect()->to('pk');
    }

    public function delete($id)
    {
        $pk = Pk::find($id);
        $pk->delete();

        return redirect()->to('pk');
    }
}
