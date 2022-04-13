@extends('dashboard.master')
@section('content')
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

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="Masukkan Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
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
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection