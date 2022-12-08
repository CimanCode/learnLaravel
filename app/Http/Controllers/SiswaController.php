<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){ //untuk menampilkan seluruh data
        $siswa = siswa::query()
                ->get();
            return view("siswa.list", [
                'siswa' => $siswa]);
    }

    function detail($id){ //untuk menampilkan salah satu data
        $siswas = siswa::query()
                ->where("id", $id)
                ->first();
            return view("siswa.detail", [
                'siswa' => $siswas,
                'sekolah_id' => sekolah::all()
            ]);
    }

    function store(){ //untuk tampilan menambah data
        return view("siswa.store", [
            'sekolah_id' => sekolah::all()
        ]);
    }

    function create(Request $request){ //untuk menambah data
        $payload = [
            'nama_aiswa' => $request->input("nama_aiswa"),
            'alamat_siswa' => $request->input("alamat_siswa"),
            'email_siswa' => $request->input("email_siswa"),
            'password_siswa' => $request->input("password_siswa"),
            'jenis_kelamin_siswa' => $request->input("jenis_kelamin_siswa"),
            'tanggal_lahir_siswa' => $request->input("tanggal_lahir_siswa"),
            'nisn_siswa' => $request->input("nisn_siswa"),
            'sekolah_id' => $request->input("sekolah_id")
        ];

        siswa::query()->create($payload);
        return redirect(route('siswa.list'));
    }

    function update(Request $request, $id){ //untuk mengupdate data
        $siswa = siswa::query()
                ->where("id", $id)
                ->first();
        $siswa->fill($request->all());
        $siswa->save();
        return redirect(route('siswa.list'));
    }

    function destroy($id){ //untuk menghapus data
        $user = siswa::query()
                ->where("id", $id)
                ->delete();
        return redirect()->back();
    }
}
