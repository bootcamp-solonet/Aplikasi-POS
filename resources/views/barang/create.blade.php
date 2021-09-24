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
            <h2>Tambah Barang</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('barang.index') }}"> Kembali</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label for="kpi_golongan" class="col-sm-3 col-form-label required">Golongan</label>
            <div class="col-lg-9">
                <select name="kpi_golongan" id="kpi_golongan" class="form-control border-success">
                    <option value="">- Pilih Golongan -</option>
                    @foreach ($golongan  as $item)
                        <option value="{{ $item->nama_golongan }}">{{ $item->nama_golongan }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="id_kategori" class="col-sm-3 col-form-label required">Kategori</label>
                <div class="col-lg-9">
                <select name="id_kategori" id="id_kategori" class="form-control border-success">
                    <option value="">- Pilih Kategori -</option>
                    @foreach ($kategori  as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
</div>
@endsection