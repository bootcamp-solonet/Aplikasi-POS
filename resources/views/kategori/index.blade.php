@extends('layouts.app')

@section('content')
<div class="page-inner">
<div class="page-header">
    <h4 class="page-title">Daftar Kategori</h4>
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
            <a href="#">Kategori</a>
        </li>
    </ul>
</div>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Kategori</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-rounded btn-outline-info float-right mb-3" href="{{ route('kategori.create') }}"> Tambah Kategori</a>
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
            <th>Nama Kategori</th>
            <th width="280px"class="text-center">Aksi</th>
        </tr>
        @foreach ($kategori as $kategoris)
        <tr>
            <td>{{ $kategoris->nama_kategori }}</td>
            <td class="text-center">
                <form action="{{ route('kategori.destroy',$kategoris->id) }}" method="POST">
  
                    <a class="btn btn-outline-warning btn-sm" href="{{ route('kategori.edit',$kategoris->id) }}"><i class="fas fa-edit"></i> Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
  
@endsection