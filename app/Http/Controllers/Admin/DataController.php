<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jail;
use App\Models\Napi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $napi = Napi::all()->sortBy('number_tpp');
        $jail = Jail::all()->sortBy("name");
        return view('admin.data.index', compact('user', 'napi', 'jail'));
    }

    public function add()
    {
        $user = Auth::user();
        $jail = Jail::all()->sortBy("name");
        return view('admin.data.add', compact('user', 'jail'));
    }

    public function store(Request $request)
    {

        $napi = Napi::count();
        $napi = new Napi;
        $napi->name        = $request->name;
        $napi->idJail      = $request->idJail;
        $napi->case        = $request->case;
        $napi->type        = $request->type;
        $napi->disposition = $request->disposition;
        $napi->pk          = $request->pk;
        $napi->number_tpp  = $napi + 1;
        $napi->date_tpp    = $request->date_tpp;
        $napi->status      = $request->status;
        $napi->description = $request->description;
        $napi->save();

        return redirect()->to('admin');
    }

    public function update(Request $request, $id)
    {
        $napi = Napi::find($id);
        $napi->name        = $request->name;
        $napi->idJail      = $request->idJail;
        $napi->case        = $request->case;
        $napi->type        = $request->type;
        $napi->disposition = $request->disposition;
        $napi->pk          = $request->pk;
        $napi->number_tpp  = $request->number_tpp;
        $napi->date_tpp    = $request->date_tpp;
        $napi->status      = $request->status;
        $napi->description = $request->description;
        $napi->save();

        return redirect()->to('data');
    }

    public function delete($id)
    {
        $napi = Napi::find($id);
        $napi->delete();

        return redirect()->to('data');
    }
}
