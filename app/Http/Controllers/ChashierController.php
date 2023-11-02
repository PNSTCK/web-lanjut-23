<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChashierController extends Controller
{
    public function index() {
        $data = Chashier::all();

        dd($data);
    }

    public function tambah () {
        return view('chashier.create');
    }

    public function tampil() {
        $data = Category::all();

        return view('chashier.index', compact('data'));
    }

    public function simpan(Request $request){
        $request->validate([
            'name'=> 'required|min:5'
        ]);
        Category::create($request->all());
        return to_route('chashier-index');
    }


}
