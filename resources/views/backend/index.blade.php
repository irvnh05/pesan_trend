@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs />
@endsection

@section('content')
<div class="card mb-4 ">
    <div class="card-body">

        <x-backend.section-header>
            @lang("Welcome to", ['name'=>config('app.name')])

            <x-slot name="subtitle">
                {{ date_today() }}
            </x-slot>
            <x-slot name="toolbar">
                <button class="btn btn-outline-primary mb-1" type="button" data-toggle="tooltip" data-coreui-placement="top" title="Tooltip">
                    <i class="fa-solid fa-bullhorn"></i>
                </button>
            </x-slot>
        </x-backend.section-header>

        <hr>

        <!-- Dashboard Content Area -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment"></script>

        <div id="transactionMonthlyChart" style="width: 100%; height: 400px;"></div>
        <div id="paymentStatusChart" style="width: 100%; height: 200px;"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     
        <script type="text/javascript">
            google.charts.load('current', { packages: ['corechart'] });
            google.charts.setOnLoadCallback(drawCharts);
        
            function drawCharts() {
              // Function to get transaction data from the server
              function getTransactionData() {
                $.ajax({
                  url: '{{ route("backend.transactions.index_data") }}', // Ubah dengan URL atau path ke data JSON Anda
                  method: 'GET',
                  success: function (response) {
                    var data = response.data; // Data transaksi dari JSON
        
                    // Update transaction monthly chart
                    updateTransactionMonthlyChart(data);
        
                    // Update payment status chart
                    updatePaymentStatusChart(data);
                  },
                  complete: function () {
                    // Schedule the next data retrieval in 5 seconds
                    setTimeout(getTransactionData, 5000);
                  }
                });
              }
        
              // Function to update transaction monthly chart
              function updateTransactionMonthlyChart(data) {
                var monthlyCounts = {};
                var monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        
                // Menghitung jumlah transaksi per bulan
                for (var i = 0; i < data.length; i++) {
                  var transactionDate = moment(data[i].tanggal_transaksi, 'YYYY-MM-DD');
                  var month = transactionDate.month(); // Mengambil bulan (0-11)
        
                  if (monthlyCounts[month]) {
                    monthlyCounts[month]++;
                  } else {
                    monthlyCounts[month] = 1;
                  }
                }
        
                var monthLabels = monthNames.slice();
                var chartData = [['Bulan', 'Jumlah Transaksi']];
                for (var i = 0; i < monthLabels.length; i++) {
                  var monthIndex = i;
                  var monthCount = monthlyCounts[monthIndex] || 0;
                  chartData.push([monthLabels[i], monthCount]);
                }
        
                var data = google.visualization.arrayToDataTable(chartData);
        
                var options = {
                  title: 'Grafik Jumlah Transaksi per Bulan',
                  titleTextStyle: {
                    fontSize: 18,
                    bold: true
                  },
                  legend: { position: 'none' },
                  colors: ['#4FC0C0'],
                  chartArea: {
                    width: '80%',
                    height: '70%'
                  },
                  hAxis: {
                    title: 'Bulan',
                    textStyle: {
                      fontSize: 12
                    }
                  },
                  vAxis: {
                    title: 'Jumlah Transaksi',
                    minValue: 0,
                    format: '#,###'
                  },
                  curveType: 'function',
                  lineWidth: 3,
                  pointSize: 6
                };
        
                var chart = new google.visualization.LineChart(document.getElementById('transactionMonthlyChart'));
                chart.draw(data, options);
              }
        
              // Function to update payment status chart
              function updatePaymentStatusChart(data) {
                var paymentStatusCounts = {};
                var paymentStatusColors = {
                  'pending': '#FBC02D',
                  'paid': '#4CAF50',
                  'cancelled': '#F44336'
                };
        
                // Menghitung jumlah transaksi per status pembayaran
                for (var i = 0; i < data.length; i++) {
                  var paymentStatus = data[i].status_pembayaran;
        
                  if (paymentStatusCounts[paymentStatus]) {
                    paymentStatusCounts[paymentStatus]++;
                  } else {
                    paymentStatusCounts[paymentStatus] = 1;
                  }
                }
        
                var paymentStatusData = [['Status Pembayaran', 'Jumlah Transaksi', { role: 'style' }]];
                for (var status in paymentStatusCounts) {
                  paymentStatusData.push([status, paymentStatusCounts[status], paymentStatusColors[status]]);
                }
        
                var paymentStatusChart = new google.visualization.ColumnChart(document.getElementById('paymentStatusChart'));
                var paymentStatusOptions = {
                  title: 'Grafik Jumlah Transaksi berdasarkan Status Pembayaran',
                  titleTextStyle: {
                    fontSize: 18,
                    bold: true
                  },
                  legend: { position: 'none' },
                  chartArea: {
                    width: '80%',
                    height: '70%'
                  },
                  hAxis: {
                    title: 'Status Pembayaran',
                    textStyle: {
                      fontSize: 12
                    }
                  },
                  vAxis: {
                    title: 'Jumlah Transaksi',
                    minValue: 0,
                    format: '#,###'
                  }
                };
        
                paymentStatusChart.draw(google.visualization.arrayToDataTable(paymentStatusData), paymentStatusOptions);
              }
        
              // Start polling data
              getTransactionData();
            }
          </script>
    </div>
</div>
<!-- / card -->

@include("backend.includes.dashboard_demo_data")

@endsection