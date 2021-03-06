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
              <li class="breadcrumb-item active">Tambah  Program</li>
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
      <form action="{{ route('program.store') }}" method="POST">
       @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="kategori_programs_id">Kategori</label>
            <select class="custom-select rounded-0 form-control" required name="kategori_programs_id">
              <option value="">Pilih Program</option>
              @foreach ($kategori_programs as $kategori_program)
                <option value="{{ $kategori_program->id }}">
                  {{ $kategori_program->nama }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ old('nama') }}">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="harga" value="{{ old('harga') }}">
          </div>
          <div class="form-group">
            <label for="date">Tanggal Mulai Program</label>
            <input type="date" class="form-control" name="date" placeholder="date" value="{{ old('date') }}">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="{{ old('keterangan') }}">
          </div>
          <div class="form-group">
            <label for="tipe">Tipe Form</label>
             <select class="custom-select rounded-0 form-control" required name="tipe">
              <option value="">Pilih Tipe</option>
              <option value="NO">Tanpa Pembayaran</option>
              <option value="YES">Pembayaran</option>               
            </select>
          </div>
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
@push('scripts')

@endpush
