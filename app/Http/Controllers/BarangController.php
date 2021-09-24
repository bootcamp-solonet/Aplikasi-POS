<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    $barang =  Barang::all();
    return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => 'required',
            'harga'         => 'required',
            'keterangan'    => 'required',
            'deskripsi'     => 'required',
            'id_kategori'   => 'required',
        ]);
         
        Barang::create($request->all());
         
        return redirect()->route('barang.index')
                        ->with('success','Data berhasil di tambahkan.');
    }
  
    public function edit(Barang $barang)
    {
        return view('barang.edit',compact('barang'));
    }
  
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama'          => 'required',
            'harga'         => 'required',
            'keterangan'    => 'required',
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
