<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){ //untuk menampilkan seluruh data
        $users = User::query()
                ->get();
            return view("user.list", [
                'user' => $users]);
    }

    function detail($id){ //untuk menampilkan salah satu data
        $user = User::query()
                ->where("id", $id)
                ->first();
            return view("user.detail", [
                'user' => $user]);
    }

    function store(){ //untuk tampilan menambah data
        return view("user.store");
    }

    function create(Request $request){ //untuk menambah data
        $payload = [
            'Nama' => $request->input("Nama"),
            'email' => $request->input("email"),
            'password' => $request->input("password"),
            'role' => $request->input("role")
        ];

        User::query()->create($payload);
        return redirect()->back();
    }

    function update(Request $request, $id){ //untuk mengupdate data
        $user = User::query()
                ->where("id", $id)
                ->first();
        $user->fill($request->all());
        $user->save();
        return redirect()->back();
    }

    function destroy($id){ //untuk menghapus data
        $user = User::query()
                ->where("id", $id)
                ->delete();
        return redirect()->back();
    }
}
