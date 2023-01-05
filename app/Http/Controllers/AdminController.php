<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Peminjaman;
use App\Models\DataLaptop;
use App\Models\User;



class AdminController extends Controller
{
    public function indexPeminjaman(){
       
        $data = Peminjaman::all();

        return view('admin.data-peminjaman', compact('data'));
    }

    public function indexDataLaptop(){
       
        $data = DataLaptop::all();

        return view('admin.data-laptop', compact('data'));
    }

    public function indexDataLaboran(){
       
        $data = User::all();

        return view('admin.data-laboran', compact('data'));
    }

    public function createDataLaboran(){
        return view('admin.create-account-laboran');
    }

    public function storeDataLaboran(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => 0,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('account'));   
    }


    public function editLaboranData($id){
        $data = User::get();
        $data = User::where('id', $id)->first();
        return view('admin.edit-laboran', ['data' => $data]);
    }

    public function updateLaboranData(Request $request, $id){

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => 0,
            'password' => Hash::make($request->password),
           
        ]);
        return redirect(route('account'));
    }

    public function deleteLaboranData($id){
        User::where('id', $id)->Delete();   
        return redirect(route('account'));
    }

    public function createDataLaptop(){
        return view('admin.create-data-laptop');
    }

    public function storeDataLaptop(Request $request){

        DataLaptop::create([
            'no_laptop' => $request->no_laptop
           
        ]);
        return redirect(route('dataLaptop'));   
    }

    public function deleteLaptopData($id){
        DataLaptop::where('id', $id)->Delete();
        return redirect(route('dataLaptop'));
    }

}
