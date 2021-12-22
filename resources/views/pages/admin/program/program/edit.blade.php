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
              <li class="breadcrumb-item active">Edit  Program  {{ $item->nama }}</li>
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
      <h3 class="card-title">Tambah  Program</h3>
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
      <form action="{{ route('program.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="kategori_programs_id">Kategori</label>
            <select class="custom-select rounded-0 form-control" required name="kategori_programs_id">
              <option value="{{ $item->kategori_programs_id }}">Jangan Diubah</option>
              @foreach ($kategori_programs as $kategori_program)
                <option value="{{ $kategori_program->id }}">
                  {{ $kategori_program->nama }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="nama"  value="{{ $item->nama }}">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="harga" value="{{ $item->harga }}">
          </div>
          <div class="form-group">
            <label for="date">Tanggal Mulai Program</label>
            <input type="date" class="form-control" name="date" placeholder="date"  value="{{ $item->date }}">
          </div>
          <div class="form-group">
            <label for="tipe">Tipe Form</label>
            <select class="custom-select rounded-0 form-control" required name="tipe">
              <option value="{{ $item->tipe }}">Jangan Diubah</option>
              <option value="NO">TANPA PEMBAYARAN</option>
              <option value="YES">PEMBAYARAN</option>
            </select>
          </div>          
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan"  value="{{ $item->Keterangan }}">
          </div>
          {{-- <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="Url" value="{{ old('slug') }}">
          </div> --}}
        </div>
        <!-- /.card-body -->

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
@push('scripts')

@endpush
