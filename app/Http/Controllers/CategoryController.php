<?php

 namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $data = Category::all();

        dd($data);
    }

    public function tampil() {
        $data = Category::all();

        return view('category.index', compact('data'));
    }

    public function tambah () {
        return view('category.create');
    }

    public function simpan(Request $request){
        $request->validate([
            'name'=> 'required|min:5'
        ]);
        Category::create($request->all());
        return to_route('category-index');
    }



    public function delete($id) {
        Category::find ($id) -> delete();
        return to_route('category-index');
    }

    public function edit($id) {
        $data = Category::find ($id);
        return view('category.edit', compact('data'));
    }

    public function update(Request $request) {
        $request->validate ([
            'name' => 'requeired'
        ]);

        Category::find($id) -> update($request->all());
        return to_route('category-index');
    }
}
