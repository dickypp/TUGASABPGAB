<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('ListProduct', compact('data'));
    }

    public function tambahproduk()
    {
        return view('tambahproduk');
    }

    public function insert(Request $request)
    {
        //dd($request->all());
        Product::create($request->all());
        return redirect()->route('product')->with('success', 'Produk Berhasil di Tambahkan');
    }

    public function tampilkan($id)
    {
        $data = Product::find($id);

        return view('tampilkan', compact('data'));
    }


    public function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('product')->with('success', 'Produk Berhasil di Hapus');
    }


    public function updateproduk(Request $request, $id)
    {
        $data = Product::find($id);
        $data->update($request->all());

        return redirect()->route('product')->with('success', 'Produk Berhasil di Update');
    }

    public function destroy($id)
    {
        //
    }
}
