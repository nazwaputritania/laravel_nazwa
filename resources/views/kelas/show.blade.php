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
                <label for="nama_kelas">Nama Kelas</label>
                <input name="nama_kelas" type="text" class="form-control  placeholder="nama_kelas" value="{{ $kelas->nama_kelas }}" @disabled(true)>
              </div>
              
              <div class="form-group">
                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                <input name="kompetensi_keahlian" type="text" class="form-control placeholder="kompetensi_keahlian" value="{{ $kelas->kompetensi_keahlian}}" @disabled(true)>
              </div>
            </div>
              
            </div>
          </div>
          <div class="px-3 d-flex justify-content-between align-items-center">
           <a href="{{route('kelas.index')}}" class="btn btn-info">Back</a>
          </div>
        </div>
    </div>
    <!-- /.card -->
  </div>
@endsection
