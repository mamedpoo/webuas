@extends('data.layouts.master')
@section('content')

	<a class="btn btn-warning" href="{{ Route('create') }}">Tambah Data</a>
	<br><br>

	<table class="table well well-lg">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($rental as $datarental)
        {{-- expr --}}
        <tr>
          <td>{{$datarental->nama}}</td>
          <td>{{$datarental->alamat}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $datarental->id]) }}" class="btn btn-danger btn-xs">Hapus</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $datarental->id]) }}" class="btn btn-warning btn-xs">Edit</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}

          </td>
        </tr>

      @endforeach
      {{-- <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr> --}}
    </tbody>
  </table>
@endsection


{{-- @extends('master')
@section('content')
  <a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  <br><br>
@endsection
 --}}
