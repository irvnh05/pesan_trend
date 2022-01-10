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
              <li class="breadcrumb-item active">Tambah  Artikel</li>
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
      <h3 class="card-title">Tambah  Artikel</h3>
      </div>
      
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- form start -->
      <form action="{{ route('artikel.store') }}"  method="POST" enctype="multipart/form-data">
       @csrf
        <div class="card-body">
        <table class="table table-bordered">
          <div class="form-group">
            <label for="assets">Foto</label>
            <input type="file" name="assets" placeholder="Foto" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="nama">Judul</label>
            <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ old('nama') }}">
          </div>
          <div class="form-group">
            <label for="keterangan">Dekripsi</label>
            <textarea type="text" class="form-control" id="summary-ckeditor" name="keterangan" placeholder="keterangan" value="{{ old('keterangan') }}">
            </textarea> 
          </div>
        </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.card -->

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
CKEDITOR.replace( 'summary-ckeditor', {
    
    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
});
</script>
@endpush
