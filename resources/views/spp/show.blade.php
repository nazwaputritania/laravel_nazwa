@extends('template.master');

@section('title', 'Show Data spp')

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
                <label for="tahun">Tahun</label>
                <input name="tahun" type="number" class="form-control  placeholder="Tahun" value="{{ $spp->tahun }}" @disabled(true)>
              </div>
              
              <div class="form-group">
                <label for="nominal">Kompetensi Keahlian</label>
                <input name="nominal" type="number" class="form-control placeholder="nominal" value="{{ $spp->nominal}}" @disabled(true)>
              </div>
            </div>
              
            </div>
          </div>
          <div class="px-3 d-flex justify-content-between align-items-center">
           <a href="{{route('spp.index')}}" class="btn btn-info">Back</a>
          </div>
        </div>
    </div>
    <!-- /.card -->
  </div>
@endsection
