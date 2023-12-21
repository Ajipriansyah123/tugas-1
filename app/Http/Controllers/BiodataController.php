<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index ()
    {

        $matakuliah = ['Pemograman Lanjut', 'Mobile Programming', 'Teori Bahasa dan Automata','Riset Teknologi informasi','Machine Learning'];
        $jumlah = count ($matakuliah);
        return view ('matakuliah', ['matakuliah' => $matakuliah, 'jumlah' => $jumlah]);
    }
}
