@extends('dashboard.master')
@section('content')

<div class="row mt-5 mb-5">
  <div class="col-lg-12 margin-tb">
    <div class="floar-flat">
      <h2>User Role</h2>
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
        <th scope="col">Nama</th>
        <th scope="col">E-mail</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $data)
      <tr>
        <th scope="row">{{ ++$i }}</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->role }}</td>
        <td class="text-center">
         <form action="{{ route('user.destroy',$data->id) }}" method="POST">
            <a href="{{ route('user.show', $data->id) }}" class="btn btn-info btn-sm">Show</a>
            <a href="{{ route('user.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>

            @method('delete')
            @csrf

            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ini?')">Delete</button>
          </form>
        </td>
      </tr>
    </tbody>
      @endforeach
      
  </table>
@endsection
