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

    function detail($id){
        $sekolahs = sekolah::query()
                    ->where('id', $id)
                    ->first();
                return view('sekolah.detail', [
                    'sekolah' => $sekolahs
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

    function update(Request $request, $id){
        $sekolah = sekolah::query()
                   ->where('id', $id)
                   ->first();
            $sekolah->fill($request->all());
            $sekolah->save();
            return redirect(route('sekolah.data'));
    }

    function destroy($id){
        $sekolah = sekolah::query()
                   ->where('id', $id)
                   ->delete();
            return redirect()->back();
    }
}
