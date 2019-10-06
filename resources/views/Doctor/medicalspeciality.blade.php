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
    


<div class="login-page">

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('Doctor@addSpec') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select required name="spec">
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
</div>


              
@endsection