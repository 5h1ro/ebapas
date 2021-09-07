<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jail;
use App\Models\Napi;
use App\Models\Pk;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $type = Type::all()->sortBy("name");
        return view('admin.type.index', compact('user', 'type'));
    }

    public function add()
    {
        $user = Auth::user();
        $type = Type::all()->sortBy("name");
        return view('admin.type.add', compact('user', 'type'));
    }

    public function store(Request $request)
    {
        $type = new Type;
        $type->name        = $request->name;
        $type->save();

        return redirect()->to('admin');
    }

    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->name        = $request->name;
        $type->save();

        return redirect()->to('type');
    }

    public function delete($id)
    {
        $type = Type::find($id);
        $type->delete();

        return redirect()->to('type');
    }
}
