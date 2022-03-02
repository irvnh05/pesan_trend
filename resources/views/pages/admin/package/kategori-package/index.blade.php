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
              <li class="breadcrumb-item active">Kategori Program</li>
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
      <h3 class="card-title">Kategori Program</h3>
      <div class="card-tools">
        <ul class="pagination pagination-sm float-right">
          <a href="{{ route('kategori-program.create') }}" class="btn-primary btn-sm">
            <i class="fas fa-plus fa-sm text-white"> Tambah Kategori Program</i></a>
        </ul>
      </div>
      </div>
      
    <!-- /.card-header -->
   <!-- /.card -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Keterangan</th>
          <th>Slug</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                  <img src="{{ Storage::url($item->assets) }}" alt="" style="width: 150px" class="img-thumbnail">
                </td>
                <td>
                  <a href="{{ route('kategori-program.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('kategori-program.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="7" class="text-center">
                  Data Kosong
                </td>
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
</div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection
@push('scripts')

@endpush
