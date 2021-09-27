<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    $barang =  Barang::with('kategori')->get();
    $kategori =  Kategori::all();
    return view('barang.index', compact('barang','kategori'));

    // return response()->json($barang);
    }

    public function create()
    {
        $kategori =  Kategori::all();
        return view('barang.create',compact('kategori'));
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required',
            'harga'         => 'required',
            'satuan'    => 'required',
            'deskripsi'     => 'required',
            'id_kategori'   => 'required',
        ]);
         
        Barang::create($request->all());
         
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil di tambahkan.');
    }
  
    public function edit(Barang $barang)
    {
        $kategori =  Kategori::all();
        return view('barang.edit',compact('barang','kategori'));
    }
  
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama'          => 'required',
            'harga'         => 'required',
            'satuan'    => 'required',
            'deskripsi'     => 'required',
            'id_kategori'   => 'required',
        ]);
         
        $barang->update($request->all());
         
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil di update');
    }
  
    public function destroy(Barang $barang)
    {
        $barang->delete();
  
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil dihapus');
    }
}
