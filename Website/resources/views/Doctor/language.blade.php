@extends('admin_layout.master')

@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('Doctor') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('medicalspeciality') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">MEDICAL SPECIALITY</span></a>
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
    
<form class="" method="POST"  action="{{ action('Doctor@addlang') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
    <div class="">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:46%;color:#2255a4;font-weight:bold;font-family:Sans">Add Language</h2>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">
            

            <select class="select2 form-control custom-select" style="float:right;width: 50%; height:36px;" name="lang" required>
            <option value="" disabled="disabled" selected="selected" >Please select a Language</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->languages}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->languages}}</option></option>
            @endforeach 


                </select>
                </div>
            </div>
           </div>
        <div class="border-top">
            <div class="card-body">
                <button  Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Add Language</button>
            </div>
        </div>
        </div>
    </form>
{{-- <div class="login-page">

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('Doctor@addlang') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select required name="lang">
                <option value="" disabled="disabled" selected="selected" >Please select a Language</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->languages}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->languages}}</option></option>
            @endforeach 


                </select>

          <br><br>  <button class="btn btn-success">Add Language</button>    
    </form>
  </div>
</div>
 --}}

              
@endsection