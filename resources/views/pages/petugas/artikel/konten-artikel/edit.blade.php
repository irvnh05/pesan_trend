@extends('layouts.petugas')

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
              <li class="breadcrumb-item"><a href="{{ url('/petugas') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit  article  {{ $item->nama }}</li>
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
      <h3 class="card-title">Edit  Artikel</h3>
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
      <form action="{{ route('article.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Judul</label>
            <input type="text" class="form-control" name="nama" placeholder="nama"  value="{{ $item->nama }}">
          </div>
           <div class="form-group">
            <label for="keterangan">Deksripsi</label>
            {{-- <textarea type="text" class="form-control" id="summernote" name="keterangan" placeholder="Keterangan"  value="{{ $item->keterangan }}">
            </textarea> --}}
            <textarea class="form-control" id="summary-ckeditor" name="keterangan" >{{ $item->keterangan }}</textarea>

          </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Ubah</button>
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
CKEDITOR.replace( 'summary-ckeditor');
</script>
@endpush
