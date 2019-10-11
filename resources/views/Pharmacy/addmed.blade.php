@extends('admin_layout.master')


@section('content')
    
@if($dat['count'] != null)

    @foreach($dat['count'] as $item)
        MEDICINE NAME - {{$item->medicine_name}}   COUNT - {{$item->ccount}}<br>
    @endforeach
@endif

<div class="login-page">

     <div class="form">
            <form class="" method="POST"  action="{{ action('Pharmacy@addmedPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
    <div class="card">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:45%;color:#2255a4;font-weight:bold;font-family:Sans">Add Medicine</h2></br>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">
                    <select name="med" class="select2 form-control custom-select" style="float:right;margin-right:9%;width: 30%;margin-left:50%;height:36px;" required>
                        <option value="" disabled="disabled" selected="selected" >Please select a Medicine</option>
                         @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

                </select>
                </div>
              
            </div>
            <div class="form-group row">
                <div class="col-sm-9">
                    
                    <input style="width:20%;margin-left:61%" class="form-control"  type="number" placeholder="Count" id="count" name="count" required/><br><br>
                </div>
            </div>
        </div>
    </div>
        <div class="border-top">
            <div class="card-body">
                <button  Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Update </button>
            </div>
        </div>
    </form>

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('Pharmacy@addmedPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select required name="med">
                <option value="" disabled="disabled" selected="selected" >Please select a Medicine</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

                </select>
            <input  type="text" placeholder="count" id="count" name="count" required/><br><br>

          <br>  <button class="btn btn-success">Add Medicine</button>    


    </form>
  </div>
</div>
   
@endsection

 @section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('Pharmacy') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('checkoutmed') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">CHECK OUT MEDICINE</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addnewmed') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD NEW MEDICINE</span></a>
        </li>
      </ul>
    </nav>
@endsection