@extends('dashboard.master')
@section('contenr')
<div class="row-mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit User</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Ada masalah input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('user.update',["user"=>$user->id])}}" method="post">
    @csrf
    @method('put')

    <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="nomor1">Nomor</label>
          <input type="text" class="form-control"  value="Mark" required>
        </div>
        <div class="col-md-2 mb-3">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" value="Otto" required>
        </div>
        <div class="col-md-2 mb-3">
          <label for="merk">Merk</label>
          <input type="text" class="form-control" value="Otto" required>
        </div>
        <div class="col-md-2 mb-3">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" value="Otto" required>
        </div>
        <div class="col-md-2 mb-3">
          <label for="kelompok">Kelompok</label>
          <input type="text" class="form-control" value="Otto" required>
        </div>
      </div>
      <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="hargabeli">Harga Beli</label>
            <input type="number" class="form-control"  value="Mark" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="hargajual">Harga Jual</label>
            <input type="number"" class="form-control" value="Otto" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="discount">Discount</label>
            <input type="text" class="form-control" idvalue="Otto" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="potonganharga">Potongan Harga</label>
            <input type="number" class="form-control" value="Otto" required>
          </div>
        </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</form>
@endsection