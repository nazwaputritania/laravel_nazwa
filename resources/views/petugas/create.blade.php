@extends('template.master')

@section('title', 'Tambah Data Petugas')

@section('content')
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- form start -->
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control @error('username') {{ 'is-invalid' }} @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
            @error('username')
              <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="text" class="form-control @error('password') {{ 'is-invalid' }} @enderror" id="password" placeholder="Password" value="{{ old('password') }}">
            @error('password')
              <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama_petugas">Nama Petugas</label>
            <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') {{ 'is-invalid' }} @enderror" id="nama_petugas" placeholder="Nama Petugas" value="{{ old('nama_petugas') }}">
            @error('nama_petugas')
              <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control @error('level') {{ 'is-invalid' }} @enderror" id="level">
              <option value="" selected disabled>Pilih Level</option>
              <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}>Admin</option>
              <option value="petugas" {{ old('level') == 'petugas' ? 'selected' : '' }}>Petugas</option>
            </select>
            @error('level')
              <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection
