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
  
    google.charts.setOnLoadCallback(regionYear);
    google.charts.setOnLoadCallback(disMonth);
    google.charts.setOnLoadCallback(disYear);
    google.charts.setOnLoadCallback(regMonth);
    google.charts.setOnLoadCallback(regYear);
  
    function regionYear()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease['regionYear'] ?>);
      var options = {
        title: 'Dengue Patient Cases By Ward in 2017',
        chartArea: {width: '60%', height: '100%'},
        hAxis: {
          title: 'Ward',
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
      var chart = new google.visualization.BarChart(document.getElementById('regionYear'));
      chart.draw(data, options);
    }
    function disMonth()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease['disMonth'] ?>);
      var options = {
        title: 'Dengue Patient Cases By Month in 2017',
        chartArea: {width: '60%', hieght: '100%'},
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
      var chart = new google.visualization.LineChart(document.getElementById('disMonth'));
      chart.draw(data, options);
    }
    function disYear()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease['disYear'] ?>);
      var options = {
        title: 'Dengue Patient Cases By Year',
        chartArea: {width: '60%', hieght: '100%'},
        hAxis: {
          title: 'Year',
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
      var chart = new google.visualization.PieChart(document.getElementById('disYear'));
      chart.draw(data, options);
    }
    function regMonth()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease['regMonth'] ?>);
      var options = {
        title: 'Dengue Patient Cases In H Ward in 2017',
        chartArea: {width: '60%', hieght: '100%'},
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
      var chart = new google.visualization.LineChart(document.getElementById('regMonth'));
      chart.draw(data, options);
    }
    function regYear()
    {
      
      var data = google.visualization.arrayToDataTable(<?php echo $disease['regYear'] ?>);
      var options = {
        title: 'Dengue Patient Cases In H Ward by Year',
        chartArea: {width: '60%', hieght: '100%'},
        hAxis: {
          title: 'Year',
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
      var chart = new google.visualization.PieChart(document.getElementById('regYear'));
      chart.draw(data, options);
    }
</script>
@endsection
@section('content')

<div class="card">
<div class="embed-container"><iframe width="900" height="700" frameborder="0" scrolling="no" marginheight="0"
    marginwidth="0" title="Mumbai Dengue Visualization"
    src="//www.arcgis.com/apps/Embed/index.html?webmap=c695e2d33de2481ebbbcfba8a06ccb08&extent=72.3768,18.674,73.8133,19.3919&zoom=true&previewImage=false&scale=true&legend=true&disable_scroll=true&theme=light"></iframe>
</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <br />
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Disease Inference</h3>
        </div>
        <div class="panel-body" align="center">
          <div id="regionYear">


          </div>
        </div>
        <div class="panel-body" align="center">
          <div id="disMonth">
        
        
          </div>
        </div>
        <div class="panel-body" align="center">
          <div id="disYear">
        
        
          </div>
        </div>
        <div class="panel-body" align="center">
          <div id="regMonth">
        
        
          </div>
        </div>
        <div class="panel-body" align="center">
          <div id="regYear">
        
        
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
<!-- This Page JS -->
<script src="{{ asset('admin/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/pages/mask/mask.init.js') }}"></script>
<script src="{{ asset('admin/assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/quill/dist/quill.min.js') }}"></script>
<script>
  //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose1').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
</script>
@endsection