@stack('prepend-script')
<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script> 
<!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script> 
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
 <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
<!-- ChartJS -->
 <script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script> 
<!-- Sparkline -->
 {{-- <script src="{{ asset('dashboard/plugins/sparklines/sparkline.js') }}"></script>  --}}
<!-- JQVMap -->
 {{-- <script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>  --}}
<!-- jQuery Knob Chart -->
 <script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js') }}"></script> 
<!-- daterangepicker -->
 <script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script> 
<!-- Tempusdominus Bootstrap 4 -->
 <script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> 
<!-- Summernote -->
 <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script> 
<!-- overlayScrollbars -->
 <script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> 
<!-- AdminLTE App -->
 <script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script> 
<!-- AdminLTE for demo purposes -->
 <script src="{{ asset('dashboard/dist/js/demo.js') }}"></script> 
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script> 

<script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
 <!-- DataTables  & Plugins -->
 
 <script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/jszip/jszip.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/pdfmake/pdfmake.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/pdfmake/vfs_fonts.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script> 
 <script src="{{ asset('dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('dashboard/plugins/select2/js/select2.full.min.js') }}"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
 <link rel="https://cdn.datatables.net/rowgroup/1.1.1/css/rowGroup.bootstrap4.min.css" />
  @stack('addon-script')