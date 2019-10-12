@extends('admin_layout.master')

@section('title','Analytics')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
<link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style type="text/css">
  .box {
    width: 800px;
    margin: 0 auto;
  }
</style>
<script type="text/javascript">
  google.load('visualization', '1.0', {'packages':['corechart']});
  
    google.charts.setOnLoadCallback(drawChart);
  
    function drawChart()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease ?>);
      var options = {
        title: 'Dengue Patient Cases By Month in 2017',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Month',
          minValue: 0,
          textStyle: {
          fontSize: 14,
          color: '#053061',
          bold: true,
          italic: false
        },
          titleTextStyle: {
          fontSize: 18,
          color: '#053061',
          bold: true,
          italic: false
        }
        },
        vAxis: {
          title: 'Number of Cases',
          minValue: 0,
          textStyle: {
          fontSize: 14,
          color: '#053061',
          bold: true,
          italic: false
          },
          titleTextStyle: {
          fontSize: 18,
          color: '#053061',
          bold: true,
          italic: false
          }
        }
      };
      var chart = new google.visualization.LineChart(document.getElementById('pie_chart'));
      chart.draw(data, options);
    }
</script>
@endsection

@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <br />
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Disease Inference</h3>
        </div>
        <div class="panel-body" align="center">
          <div id="pie_chart" style="width:750px; height:450px;">

          </div>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('admin/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('admin/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
  /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
</script>

@endsection