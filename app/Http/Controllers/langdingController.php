<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langdingController extends Controller
{
    function landing(Request $request){
        return view('landing', [
            "judul" => $request->get('title'),
            "peserta" => [
                "Fulan",
                "Fulanah",
                "Harith",
                "Balmond",
                "Alucard",
                "Joni",
                "Alex"
            ],
            "tampilkanPeserta"  => true,
        ]);
    }    

    function customer(){
        return view('customer', [
            'div' => 'customer',
            'title' => 'Customer'
        ]);
    }

    function how(){
        return view('how', [
            'div' => 'how',
            'title' => 'How'
        ]);
    }

    function name(){
        return view('name', [
            'div' => 'name',
            'title' => 'Name'
        ]);
    }

    function diagram(){
        return view('diagram', [
            'div' => 'diagram',
            'title' => 'Diagram'
        ]);
    }

    function pricing(){
        return view('pricing', [
            'div' => 'pricing',
            'title' => 'Pricing'
        ]);
    }

    function testimoni(){
        return view('testimoni', [
            'div' => 'testimoni',
            'title' => 'Testimoni'
        ]);
    }

    function iklan(){
        return view('iklan', [
            'div' => 'iklan',
            'title' => 'iklan'
        ]);
    }
}
