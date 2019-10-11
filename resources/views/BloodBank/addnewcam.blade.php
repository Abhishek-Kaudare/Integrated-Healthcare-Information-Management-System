@extends('admin_layout.master')


@section('content')

<form>
    <form class="" method="POST"  action="{{ action('BloodBank@addcampPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                        <h2 class="card-title"style="margin-left:45%;color:#2255a4;font-weight:bold;font-family:Sans">Register Campaign</h2></br>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input name="name" type="text" class="form-control" id="cname" placeholder="Enter Campaign Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" class="form-control" id="address" placeholder="Enter full address">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label class="m-t-15"style="margin-left:19%">Start Date</label>
                        <input name="start" type="text" style="margin-left:19px" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                
                    <div class="input-group">
                            <label class="m-t-15"style="margin-left:19%">End Date</label>
                            <input name="end" type="text" style="margin-left:19px" class="form-control" id="datepicker-autoclose1" placeholder="mm/dd/yyyy">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
               
       
        <div class="border-top">
            <div class="card-body">
                <button type="button" Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 12px;" class="btn btn-info">Register</button>
            </div>
        </div>
    </form>


{{-- <div class="login-page">
  <div class="form">

            <form class="" method="POST"  action="{{ action('BloodBank@addcampPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 


      Name<input type="text" placeholder="Campaign Name" id="name" name="name" required/>
      <br>  
        


    Full Address<input type="text" placeholder="Address" id="address" name="address" required/>
      <br>  

    Start Time - <input type="datetime-local" name="start" required><br>
    End Time - <input type="datetime-local" name="end" required><br>

      <button class="btn btn-success">Register</button>
      
    </form>
  </div>
</div> --}}
@endsection


@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('BloodBank') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('checkoutblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">CHECK OUT BLOOD</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD BLOOD</span></a>
        </li>
        
      </ul>
    </nav>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
       
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

  
    <script src="{{ asset('js/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/assets/libs/quill/dist/quill.min.js') }}"></script>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
    <!-- date picker -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
   
   
    <!-- This Page JS -->
    <script src="{{ asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
   
    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    



@endsection