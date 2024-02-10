@extends('template.master');

@section('title', 'Tambah Data Genre')

@section('content')
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('spp.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input name="tahun" type="number" min="2000" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun"  placeholder="Tahun"
            value="{{@old('tahun')}}">
          </div>
          @error('tahun')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <label for="nominal">Nominal</label>
          <input name="nominal" type="number" min="100000" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal"  placeholder="Nominal"
          value="{{@old('nominal')}}">
          </div>
          @error('nominal')
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