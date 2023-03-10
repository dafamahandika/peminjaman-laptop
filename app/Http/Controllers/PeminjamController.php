<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\DataLaptop;
use Illuminate\Support\Facades\Auth;


class PeminjamController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(){
        $data = DataLaptop::all();
        //dd($data);
        return view('peminjam.create',compact('data'));
    }

    public function indexPeminjaman(){

        
       
        $data = Peminjaman::all();

        return view('peminjam.list', compact('data'));
    }

    public function storePeminjaman(Request $request){
        $request->validate([
            'nisn' => 'required|min:8|max:8|unique:peminjaman,nisn',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'no_laptop' => 'required',
            'ruangan' => 'required'

        ]);

        Peminjaman::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'no_laptop' => $request->no_laptop,
            'ruangan' => $request->ruangan

        ]);

        return redirect()->intended('list-peminjaman')->with('success','Peminjaman Berhasil Dilakukan!');
    }

    
}
