<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Models\Napi;
use App\Models\Type;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index()
    {
        $type = Type::all()->sortBy("name");
        return view('index', compact('type'));
    }

    public function load($name, $idType)
    {
        if ($idType == "0") {
            $napi = Napi::where('name', 'LIKE', '%' . $name . '%')->first();
            return view('client.client', compact('napi'));
        } else {
            $napi = Napi::where([['idType', '=', $idType], ['name', 'LIKE', '%' . $name . '%']])->first();
            return view('client.client', compact('napi'));
        }
    }

    public function ai(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Napi::where('name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
