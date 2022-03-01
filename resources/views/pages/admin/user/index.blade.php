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
              <li class="breadcrumb-item active"> User</li>
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
      <h3 class="card-title"> User Management<span class="typcn typcn-arrow-maximise"></span></h3>
      <div class="card-tools">
        <ul class="pagination pagination-sm float-right">
          <a href="{{ route('transaction.create') }}" class="btn-primary btn-sm">
            <i class="fas fa-plus fa-sm text-white"> Tambah  User</i></a>
        </ul>
      </div>
      </div>
      
    <!-- /.card-header -->
   <!-- /.card -->
    <div class="card-body ">
      <table id="crudTable" class="table table-bordered" >
        <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>        
          <th>Roles</th>    
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
              <tr>
                <td colspan="7" class="text-center">
                  Data Kosong
                </td>
              </tr>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({       
            responsive: true,
            processing: true,
            serverSide: true,
          
        //     dom: 'Bfrtip',
        //         buttons: [
        //     {
        //         extend: 'copyHtml5',
        //         exportOptions: {
        //             columns: [ 0, ':visible' ]
        //         }
        //     },
        //     {
        //         extend: 'excelHtml5',
        //         exportOptions: {
        //             columns: ':visible'
        //         }
        //     },
        //     {
        //         extend: 'pdfHtml5',
        //         exportOptions: {
        //               columns: ':visible'
        //         }
        //     },
        //     'colvis'
        // ],

            ajax: {
                url: "{!! url()->current() !!}",
                type: 'GET',
                data: function (d) {
                d.start_date = $('#start_date').val();
                d.end_date = $('#end_date').val();
                }
            },

            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'roles', name: 'roles' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,    
                    searchable: false,
                    sortable: false
                },
            ]
        });

        
$('#btnFiterSubmitSearch').click(function(){
     $('#crudTable').DataTable().draw(true);
}); 

// $(document).ready(function() {
//             $('#crudTable thead tr').clone(true).appendTo( '#crudTable thead' );
//             $('#crudTable thead tr:eq(1) th').each( function (i) {
//                 var title = $(this).text();
//                 $(this).html( '<input type="text" class=" d-none d-sm-block" placeholder=" Search '+title+'" />' );

//                 $( 'input', this ).on( 'keyup change', function () {
//                     if ( table.column(i).search() !== this.value ) {
//                         table
//                             .column(i)
//                             .search( this.value )
//                             .draw();
//                     }
//                 });
//             });

//             var table = $('#crudTable').DataTable( {

//                 orderCellsTop: false,
//                 fixedHeader: false,
//             });
//         });
    </script>
@endpush