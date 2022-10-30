<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{   

    public function homeBarang(){
        $barang['allBarang'] = Barang::all();
        return view('home', ['title' => 'Home'], $barang);
    }

    
    public function viewBarang($id){
        $satuBarang = Barang::find($id);
        return view('viewB', compact('satuBarang'), ['title' => 'home']);
    }

}
    