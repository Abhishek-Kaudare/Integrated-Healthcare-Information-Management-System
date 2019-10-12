@extends('admin_layout.master')


@section('content')
    

 <form class="" method="POST"  action="{{ action('BloodBank@checkoutbloodPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
    <div class="card">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:45%;color:#2255a4;font-weight:bold;font-family:Sans">Checkout Blood</h2>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">
                    <select name="bt" class="select2 form-control custom-select" style="float:right;margin-right:9%;width: 30%;margin-left:50%;height:36px;" required>
                        <option value="" disabled="disabled" selected="selected" >Please select a Medicine</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->bloodtype_id}}">{{$item->type}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->bloodtype_id}}">{{$item->type}}</option></option>
            @endforeach

                </select>
                </div>
              
            </div>
            <div class="form-group row">
                <div class="col-sm-9">
                    <input name = "quantity" type="number" style="width:20%;margin-left:61%"class="form-control" id="lname" placeholder="Quantity in ml">
                </div>
            </div>
        </div>
    </div>
        <div class="border-top">
            <div class="card-body">
                <button  Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info"> Checkout Blood</button>
            </div>
        </div>
    </form>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Blood Count</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Blood</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if($dat['final'] != null)

    @foreach($dat['final'] as $item)
        

                                <tr>
                            <td>{{$item->type}}</td>
                            <td>{{$item->quantity}}</td>    
                        </tr>

    @endforeach
@endif

@if($dat['dis'] != null)

    @foreach($dat['dis'] as $item)
        

                                <tr>
                            <td>{{$item->type}}</td>
                            <td>{{$item->quantity}}</td>    
                        </tr>

    @endforeach
@endif

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>



              
@endsection


@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('BloodBank') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD BLOOD</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addnewcam') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD NEW CAMPAIGN</span></a>
        </li>
      </ul>
    </nav>
@endsection