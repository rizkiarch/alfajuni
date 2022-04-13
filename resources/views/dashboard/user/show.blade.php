@extends('dashboard.master')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Show User</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>
    
@endsection