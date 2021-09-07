<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jail;
use App\Models\Napi;
use App\Models\Pk;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $napi = Napi::all()->sortBy('number_tpp');
        $jail = Jail::all()->sortBy("name");
        $pk = Pk::all()->sortBy("name");
        $type = Type::all()->sortBy("name");
        return view('admin.data.index', compact('user', 'napi', 'jail', 'pk', 'type'));
    }

    public function add()
    {
        $user = Auth::user();
        $napi = Napi::all()->sortBy('number_tpp');
        $jail = Jail::all()->sortBy("name");
        $pk = Pk::all()->sortBy("name");
        $type = Type::all()->sortBy("name");
        return view('admin.data.add', compact('user', 'napi', 'jail', 'pk', 'type'));
    }

    public function store(Request $request)
    {

        $napicount = Napi::count();
        $napi = new Napi;
        $napi->name        = $request->name;
        $napi->idJail      = $request->idJail;
        $napi->case        = $request->case;
        $napi->idType        = $request->idType;
        $napi->date_disposition = $request->date_disposition;
        $napi->idPk          = $request->idPk;
        $napi->number_tpp  = $napicount + 1;
        $napi->date_tpp    = $request->date_tpp;
        $napi->date_send    = $request->date_send;
        $napi->date_start    = $request->date_start;
        $napi->date_end    = $request->date_end;
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
        $napi->idType        = $request->idType;
        $napi->date_disposition = $request->date_disposition;
        $napi->idPk          = $request->idPk;
        $napi->date_tpp    = $request->date_tpp;
        $napi->date_send    = $request->date_send;
        $napi->date_start    = $request->date_start;
        $napi->date_end    = $request->date_end;
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
