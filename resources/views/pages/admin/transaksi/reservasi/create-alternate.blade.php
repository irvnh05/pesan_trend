@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard test</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah  Transaksi</li>
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
      <h3 class="card-title">Tambah  Transaksi</h3>
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
      <form action="{{ route('transaction.store') }}" method="POST">
       @csrf
        <div class="card-body">
          <table class="table table-bordered">
                <th>Program</th>
                 <td>
                <select class="custom-select rounded-0 form-control" required name="programs_id">
                  <option value="">Pilih Program</option>
                  @foreach ($program as $program)
                    <option value="{{ $program->id }}">
                      {{ $program->nama }}
                    </option>
                  @endforeach
                </select>
              </td>
            {{-- </tr>
                <th>Catatan</th>
                 <td>{{ $item->program->nama }}</td> 
          </tr>         --}}
        
                        </table>
                    </td>
                </th>
            </tr>
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
@push('scripts')

@endpush
