@extends('dashboard.master')
@section('content')

<div class="row mt-5 mb-5">
  <div class="col-lg-12 margin-tb">
    <div class="floar-flat">
      <h2>User Role</h2>
    </div>
    <div class="float-right">
      <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
    </div>
  </div>
</div>
@if ($message =  Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>  
  </div>    
@endif


<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nomor</th>
        <th scope="col">Nama</th>
        <th scope="col">Merk</th>
        <th scope="col">Kategori</th>
        <th scope="col">Kelompok</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">Harga Beli</th>
        <th scope="col">Discount</th>
        <th scope="col">Transaksi</th>
      </tr>
    </thead>
    @foreach ($produk as $data)
    <tbody>
      <tr>
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $data->nomor }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->merk }}</td>
        <td>{{ $data->kategori }}</td>
        <td>{{ $data->kelompok }}</td>
        <td>{{ $data->harga_jual }}</td>
        <td>{{ $data->harga_beli }}</td>
        <td>{{ $data->discount }}</td>
        <td>{{ $data->tbl_transaksi_id }}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
@endsection