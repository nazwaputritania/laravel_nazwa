@extends('template.master')

@push('css')
    
@endpush
  <link rel="stylesheet" href="{{ asset('adminsb/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminsb/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminsb/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">


@section('title', 'Data Petugas')

@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong> 
  </div>
@endif
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('petugas.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Tambah petugas</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Nama Petugas</th>
              <th>Level</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($petugass as $key => $value)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $value->username }} </td>
                <td> {{ $value->password }} </td>
                <td> {{ $value->nama_petugas }} </td>
                <td> {{ $value->level }} </td>
                <td>
                  <a href="{{ route('petugas.show', $value->id_petugass) }}"
                      class="btn btn-sm btn-info">
                      Detail
                  </a>
                  <a href="{{ route('petugas.edit', $value->id_petugass) }}"
                      class="btn btn-sm btn-primary">
                      Edit
                  </a>
                  <form action="{{ route('petugas.destroy', $value->id_petugass) }}"
                      method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
              </td>       
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
                <td>Data Masih Kosong</td>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
@endsection

@push('js')
    
@endpush
  <script src="{{ asset('adminsb/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <script>
    $(function () {
      $("#table").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>