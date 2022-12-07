<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    function index(){
        $sekolah = sekolah::query()
                   ->get();
                return view("sekolah.data", [
                    'sekolah' => $sekolah
                ]);
    }

    function store(){
        return view("sekolah.store");
    }

    function create(Request $request){
        $payload = [
            'nama_sekolah' => $request->input("nama_sekolah"),
            'alamat_sekolah' => $request->input("alamat_sekolah"),
            'email_sekolah' => $request->input("email_sekolah")
        ];
        sekolah::query()->create($payload);
        return redirect(route('sekolah.data'));
    }
}
