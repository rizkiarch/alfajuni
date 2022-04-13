@extends('dashboard.master')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Create User</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('user.index') }}" class="btn btn-secondary"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Input gagal. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('user.store') }}" method="post">
    @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Address</strong>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="#">
                  </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Role</strong>
                    <select name="role" class="custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HRD">HRD</option>
                        <option value="Admin">Admin</option>
                        <option value="Karyawan">Karyawan</option>
                      </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection