@extends('template.master');

@section('title', 'Show Data Kelas')

@section('content')
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" class="form-control  placeholder="Username" value="{{ $petugas->username }}" @disabled(true)>
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="text" class="form-control placeholder="Password" value="{{ $petugas->password}}" @disabled(true)>
              </div>
            </div>

            <div class="form-group">
                <label for="nama_petugas">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control placeholder="Nama Petugas" value="{{ $petugas->nama_petugas}}" @disabled(true)>
              </div>
            </div>
              
            
          <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control @error('level') {{ 'is-invalid' }} @enderror" id="level">
              <option value="{{ $petugas->level}}" @disabled(true) >Pilih Level</option>
              <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}>Admin</option>
              <option value="petugas" {{ old('level') == 'petugas' ? 'selected' : '' }}>Petugas</option> 
            </select>
          </div>

            </div>
          </div>
          <div class="px-3 d-flex justify-content-between align-items-center">
           <a href="{{route('petugas.index')}}" class="btn btn-info">Back</a>
          </div>
        </div>
    </div>
    <!-- /.card -->
  </div>
@endsection
