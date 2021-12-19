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
              <li class="breadcrumb-item active">Detail Transaksi  {{ $item->nama }}</li>
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
      {{-- <h3 class="card-title">Tambah  Transaksi</h3> --}}
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

      <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <th>Email</th>
                <td>{{ $item->user->email }}</td>
                <tr>
                    <th>Nama Lengkap</th>
                     <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                    <th>Program</th>
                     <td>{{ $item->program->nama }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                     <td>{{ $item->status_transaction }}</td>
                </tr>
                <tr>
                    <th>Infaq</th>
                     <td>Rp {{ $item->total }}</td>
                </tr>
                <tr>
                    <th>Resi</th>
                     <td>{{ $item->no_transaction }}</td>
                </tr>
                <tr>
                    {{-- <th>Pembelian
                        <td>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Transaksi ID</th>
                                    <th>Total</th> --}}
                                    {{-- <th>ID</th>
                                    <th>User</th>
                                    <th>Program</th>
                                    <th>Status</th>
                                    <th>Infaq</th> --}}
                                {{-- </tr>
                                @foreach ($item->detail as $detail)
                                    <tr>
                                        <td>{{ $detail->transactions_id	 }}</td>
                                        <td>{{ $detail->nominal_programs }}</td> --}}
                                        {{-- <td>{{ $detail->email }}</td>
                                        <td>{{ $detail->whatsapp }}</td>                                        --}}
                                    {{-- </tr>
                                @endforeach
                            </table>
                        </td>
                    </th>
                </tr> --}}
            </table>

        </div>
      </div>

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
