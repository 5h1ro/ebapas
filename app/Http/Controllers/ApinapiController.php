<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Models\Napi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApinapiController extends Controller
{
    public function index()
    {
        return Napi::all();
    }

    public function create(Request $request)
    {
        $napi = new Napi;
        $napi->name   = $request->name;
        $napi->from   = $request->from;
        $napi->case   = $request->case;
        $napi->status = $request->status;
        $napi->save();

        return "Create Success";
    }

    public function update(Request $request, $id)
    {
        $napi = Napi::find($id);
        $napi->name   = $request->name;
        $napi->from   = $request->from;
        $napi->case   = $request->case;
        $napi->status = $request->status;
        $napi->save();

        return "Update Success";
    }

    public function delete($id)
    {
        $napi = Napi::find($id);
        $napi->delete();

        return "Delete Success";
    }

    public function search(Request $request)
    {
        $napi = Napi::where('name', 'LIKE', '%' . $request->name . '%')->get();
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => false,
                'message'   => 'Gaenek Cok Datane',
            ), 404);
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($napi),
            ));
        }
    }

    public function jail()
    {
        return Jail::all();
    }
}
