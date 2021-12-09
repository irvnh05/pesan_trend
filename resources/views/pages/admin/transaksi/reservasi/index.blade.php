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
      <table id="crudTable" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>User</th>
          <th>Program</th>
          <th>Status</th>
          <th>Infaq</th>
          <th>Resi</th>
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
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'user.name', name: 'user.name' },
                { data: 'program.nama', name: 'program.nama' },
                { data: 'status_transaction', name: 'status_transaction' },
                { data: 'total', name: 'total' },
                { data: 'no_transaction', name: 'no_transaction' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush