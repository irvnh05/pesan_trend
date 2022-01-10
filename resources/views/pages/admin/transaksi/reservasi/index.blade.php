@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item active"> Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
       
  <!-- /.card -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Transaksi</h3>
      <div class="card-tools">
        <ul class="pagination pagination-sm float-right">
          <a href="{{ route('transaction.create') }}" class="btn-primary btn-sm">
            <i class="fas fa-plus fa-sm text-white"> Tambah  Transaksi</i></a>
        </ul>
      </div>
      </div>
      
    <!-- /.card-header -->
   <!-- /.card -->
    <div class="card-body">
                      <div class="my-2">
                    {{-- <form action="{{ route('transaction.index') }}" method="GET">
                      @csrf --}}
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="start_date" name="start_date">
                            <input type="date" class="form-control" id="end_date" name="end_date">
                            <button id="btnFiterSubmitSearch"  class="btn btn-primary" type="submit">GET</button>
                        </div>
                    {{-- </form> --}}
                </div>
      <table id="crudTable" class="table table-bordered table-striped" >
        <thead>
        <tr>
          <th>No Transaksi</th>
          <th>Nama</th>
          <th>Alamat</th>        
          <th>Provinsi</th>         
          <th>Kab/Kota</th>            
          <th>Kecamatan</th>            
          <th>No HP</th>
          <th>Status</th>
          {{-- <th>Infaq</th> --}}
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          
          {{-- @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->program->nama }}</td>
                <td>{{ $item->status_transaction }}</td>
                <td>{{ $item->total }}</td>
                <td>{{ $item->no_transaction }}</td>
                <td>
                  <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
          @empty --}}
              <tr>
                <td colspan="7" class="text-center">
                  Data Kosong
                </td>
              </tr>
          {{-- @endforelse  --}}
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
</div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection

@push('addon-script')
    <script>
              $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({       

            processing: true,
            serverSide: true,
            searching: true,

            dom: 'Bfrtip',
            // buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                      columns: ':visible'
                }
            },
            'colvis'
        ],

            ajax: {
                url: "{!! url()->current() !!}",
                type: 'GET',
                data: function (d) {
                d.start_date = $('#start_date').val();
                d.end_date = $('#end_date').val();
                }
            },

            columns: [
                { data: 'no_transaction', name: 'no_transaction' },
                { data: 'user.name', name: 'user.name' },
                { data: 'user.alamat', name: 'user.alamat' },
                { data: 'user.province.name', name: 'user.province.name' },
                { data: 'user.regency.name', name: 'user.regency.name' },
                { data: 'user.districts.name', name: 'user.districts.name' },
                { data: 'user.phone_number', name: 'user.phone_number' },
                { data: 'status_transaction', name: 'status_transaction' },
                // { data: 'total', name: 'total' },
                // { data: 'no_transaction', name: 'no_transaction' },
                {

                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,           
                },
            ]
        });

        
$('#btnFiterSubmitSearch').click(function(){
     $('#crudTable').DataTable().draw(true);
}); 
    </script>
@endpush