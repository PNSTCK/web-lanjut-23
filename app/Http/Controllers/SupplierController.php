<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $data = Supplier::all();

        dd($data);
    }

    public function tambah () {
        return view('supplier.create');
    }

    public function tampil() {
        $data = Category::all();

        return view('supllierier.index', compact('data'));
    }

    public function simpan(Request $request){
        $request->validate([
            'name'=> 'required|min:5'
        ]);
        Category::create($request->all());
        return to_route('supplier-index');
    }

    public function delete($id) {
        Category::find ($id) -> delete();
        return to_route('supplier-index');
    }

    public function edit($id) {
        $data = Category::find ($id);
        return view('supplier.edit', compact('data'));
    }

    public function update(Request $request) {
        $request->validate ([
            'name' => 'requeired'
        ]);

        Category::find($id) -> update($request->all());
        return to_route('supplier-index');
    }
}
