<?php

namespace App\Http\Controllers;

use App\Models\Jail;
use App\Models\Napi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\NewCustomer;
use Carbon\Carbon;

class ApinapiController extends Controller
{
    public function index()
    {
        $napi = Napi::all();
        foreach ($napi as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($napi)
            ));
        }
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
        foreach ($napi as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
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
        $jail = Jail::all();
        foreach ($jail as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($jail->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($jail),
            ));
        }
    }

    public function getsearch($name)
    {
        $napi = Napi::where('name', 'LIKE', '%' . $name . '%')->get();
        foreach ($napi as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($napi),
            ));
        }
    }

    public function getsearch2($id)
    {
        $napi = Napi::where('idJail', '=', $id)->get();
        foreach ($napi as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($napi),
            ));
        }
    }

    public function getsearch3($id, $name)
    {

        $napi = Napi::where([['idJail', '=', $id], ['name', 'LIKE', '%' . $name . '%']])->get();
        foreach ($napi as $data) {
            $data->date_disposition = Carbon::parse($data->date_disposition)->format('d F Y');
            $data->date_tpp = Carbon::parse($data->date_tpp)->format('d F Y');
            $data->date_send = Carbon::parse($data->date_send)->format('d F Y');
            $data->date_start = Carbon::parse($data->date_start)->format('d F Y');
            $data->date_end = Carbon::parse($data->date_end)->format('d F Y');
            $data->jail->name;
            $data->type->name;
            $data->pk->name;
        };
        if ($napi->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($napi),
            ));
        }
    }

    public function customer()
    {
        $customer = NewCustomer::all();
        if ($customer->isEmpty()) {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => []
            ));
        } else {
            return Response::json(array(
                'success'   => true,
                'message'   => '',
                'data'      => json_decode($customer)
            ));
        }
    }
}
