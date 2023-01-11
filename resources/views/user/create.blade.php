@extends('admin_layouts.template')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah User</h3>
          <div class="card-tools">
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="nama">Nama User</label>
              <input type="text" name="nama_user" id="nama_user" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <textarea name="phone" id="phone" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection