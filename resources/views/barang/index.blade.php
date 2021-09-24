@extends('layouts.app')

@section('content')
<div class="page-inner">
<div class="page-header">
    <h4 class="page-title">Daftar Barang</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="flaticon-home"></i>
            </a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Admin</a>
        </li>
        <li class="separator">
            <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
            <a href="#">Barang</a>
        </li>
    </ul>
</div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Barang</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-rounded btn-outline-info float-right mb-3" href="{{ route('barang.create') }}"> Tambah Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th width="280px"class="text-center">Aksi</th>
        </tr>
        @foreach ($barang as $barangs)
        <tr>
            <td>{{ $barangs->nama }}</td>
            <td>{{ $barangs->harga }}</td>
            <td>{{ $barangs->keterangan }}</td>
            <td>{{ $barangs->deskripsi }}</td>
            <td>{{ $barangs->id_kategori }}</td>
            <td class="text-center">
                <form action="{{ route('barang.destroy',$barangs->id) }}" method="POST">
  
                    <a class="btn btn-primary btn-sm" href="{{ route('barang.edit',$barangs->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  
@endsection