@extends('template.master');

@section('title', 'Tambah Data Kelas')

@section('content')
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', ['kelas' => $kelas->id_kelass]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"  placeholder="Nama Kelas" value="{{ $kelas->nama_kelas }}">
          </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
          <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kompetensi_keahlian"  placeholder="Kompetensi Keahlian" value="{{ $kelas->kompetensi_keahlian }}">
          </div>
          @error('kompetensi_keahlian')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection