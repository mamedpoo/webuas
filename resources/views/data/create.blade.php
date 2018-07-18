@extends('data.layouts.master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="Nama">Nama</label>
        <div class="col-md-6">
          <input name="nama" type="text" placeholder="Nama" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Alamat">Alamat</label>
        <div class="col-md-6">
          <input name="alamat" type="text" placeholder="Alamat" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

{{-- @extends('master')
@section('content')

<form action="">
<label for="">ID Barang</label>
<input type="text" placeholder="id barang...">
<br><br>

<label for="">Nama Barang</label>
<input type="text" placeholder="nama barang...">
<br><br>

<label for="">Jumlah</label>
<input type="number">
<br><br>
<button>Simpan</button>
<br><br>
</form>
@endsection
--}}
