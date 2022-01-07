@extends('layouts.admin')

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
        {{-- <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" /> --}}
        <form action="{{ route('cari') }}" method="GET">
		{{ @csrf_field() }}
		<input type="text" name="nama" placeholder="Ingin mencari apa ?" class="form-control"><br>
		<input type="submit" class="btn btn-md btn-outline-primary" >
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
            <a href="{{ route('artikel.create') }}" class="btn-primary btn-sm">
                <i class="fas fa-plus fa-sm text-white"> Tambah Artikel</i></a>
            </ul>
        </div>
    </div>
        <!-- /.card-header -->


        
    <!-- /.card -->
    <div class="card-body"><span id="total_records"></span>
        <table id="crudTable" class="table table-bordered table-striped" >
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
              @forelse ($items as $item)
              
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{!! Str::limit($item->keterangan, 300) !!}</td>
                <td>{{ $item->assets }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                  <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" class="d-inline">
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
        {{ $categories->links() }}
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