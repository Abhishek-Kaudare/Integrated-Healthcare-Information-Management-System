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
    


<div class="login-page">

        
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


              
@endsection