@extends('admin_layout.master')

@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('Doctor') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('language') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD LANGUAGE</span></a>
        </li>

        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('awards') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">AWARD AND ACHIEVEMENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('research') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">RESEARCH AND PUBLICATION</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('summary') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SUMMARY</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('hosrequst') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOSPITAL/CLINIC REQUEST</span></a>
        </li>
        
        
      </ul>
    </nav>
@endsection

@section('content')
    

{{-- 
<div class="login-page">

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('Doctor@addSpec') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select class="select2 form-control custom-select" style="float:right;margin-right:9%;width: 30%;margin-left:50%;height:36px;"  name="spec" required>
                <option value="" disabled="disabled" selected="selected" >Please select a Specialization</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->medical_speciality_id}}">{{$item->medical_speciality_name}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->medical_speciality_id}}">{{$item->medical_speciality_name}}</option></option>
            @endforeach

                </select>
                <input  type="text" placeholder="Certificate ID" id="certiid" name="certiid" required/><br><br>

          <br>  <button class="btn btn-success">Add Specialization</button>    


    </form>
  </div>
</div> --}}


 <div class="form">
            <form class="" method="POST"  action="{{ action('Doctor@addSpec') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

    <div class="card">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:45%;color:#2255a4;font-weight:bold;font-family:Sans">Add Specialization </h2></br>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">
                <select class="select2 form-control custom-select" style="float:right;margin-right:9%;width: 30%;margin-left:50%;height:36px;"  name="spec" required>
                <option value="" disabled="disabled" selected="selected" >Please select a Specialization</option>
                            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->medical_speciality_id}}">{{$item->medical_speciality_name}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->medical_speciality_id}}">{{$item->medical_speciality_name}}</option></option>
            @endforeach                
                    </select>
                </div>
              
            </div>
            <div class="form-group row">
                <div class="col-sm-9">
                    
                    <input  type="text" style="width:20%;margin-left:61%" class="form-control" placeholder="Certificate ID" id="certiid" name="certiid" required/><br><br>
                </div>
            </div>
        </div>
    </div>
        <div class="border-top">
            <div class="card-body">
                <button  Style="margin-left:45%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Add Specialization</button>
            </div>
        </div>
    </form>



              
@endsection