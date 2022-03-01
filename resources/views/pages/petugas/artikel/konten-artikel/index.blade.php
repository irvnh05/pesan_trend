@extends('layouts.petugas')

@section('content')
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
         <form action="">
          <div class="form-group">
            <input type="text" name="search" placeholder="Find or Search Members...!" class="form-control mb-2"/>
            <input type="submit" class="btn btn-primary" value="Search"/>
          </div>
         </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-fluid">
      
       
    <!-- /.card -->
    <div class="card">
        <div class="card-header">
        <h3 class="card-title"> Artikel</h3>
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
            <a href="{{ route('article.create') }}" class="btn-primary btn-sm">
                <i class="fas fa-plus fa-sm text-white"> Tambah Artikel</i></a>
            </ul>
        </div>
    </div>
        <!-- /.card-header -->


        
    <!-- /.card -->
    <div class="card-body"><span id="total_records"></span>
        <table id="crudTable" class="table table-bordered table-striped  table-inverse table-responsive d-table" >
            <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>	
            <th>Caption</th>	
            <th>Foto</th>
            <th>Tgl Publish</th> 
            <th>Action</th> 
        </tr>
        </thead>
        <tbody>
              @forelse ($data  as $item)
              
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{!! Str::limit($item->keterangan, 300) !!}</td>
                <td>
                  <img src="{{ Storage::url($item->assets) }}" alt="" style="width: 200px" class="img-thumbnail">
                </td>
                <td>{{ $item->created_at }}</td>
                <td>
                  <a href="{{ route('article.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('article.destroy', $item->id) }}" method="POST" class="d-inline">
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
        <div class="mt-2">
            {{ $data->links() }}
        </div>
    </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
@endsection

@push('addon-script')

@endpush