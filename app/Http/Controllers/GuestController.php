<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Models\Napi;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index()
    {
        $jail = Jail::all()->sortBy("name");
        return view('index', compact('jail'));
    }

    public function load($name, $idJail)
    {
        if ($idJail == "0") {
            $napi = Napi::where('name', 'LIKE', '%' . $name . '%')->first();
            return view('client.client', compact('napi'));
        } else {
            $napi = Napi::where([['idJail', '=', $idJail], ['name', 'LIKE', '%' . $name . '%']])->first();
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
