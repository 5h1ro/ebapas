<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Napi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $role = Auth::user()->role;
        $uid  = Auth::user()->uid;
        $value = $request->cookie('ebima');
        if ($role == "admin" && $uid == $value) {
            $user = Auth::user();
            $napi = Napi::count();
            $dibimbing = Napi::where('status', 'Dalam Pembimbingan')->count();
            $dikirim = Napi::where('status', 'Terkirim')->count();
            $diproses = Napi::where('status', 'Diproses')->count();
            $diterima = Napi::where('status', 'Diterima')->count();
            $bimbing = number_format((float)($dibimbing / $napi) * 100, 2, '.', '');
            $kirim = number_format((float)($dikirim / $napi) * 100, 2, '.', '');
            $proses = number_format((float)($diproses / $napi) * 100, 2, '.', '');
            $terima = number_format((float)($diterima / $napi) * 100, 2, '.', '');
            return view('admin.index', compact('user', 'bimbing', 'kirim', 'proses', 'terima', 'dibimbing', 'dikirim', 'diproses', 'diterima'));
        } else {
            Auth::logout();
            return redirect()->route('error')->with('alert', 'Device tidak terdaftar');
        }
    }
}
