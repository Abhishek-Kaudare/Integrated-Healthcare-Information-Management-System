@extends('admin_layout.master')

@section('sidebarOptions')
        <nav class="sidebar-nav">
         <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('hospital') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>   
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('shiftpatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SHIFT PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('dischargepatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DISCHARGE PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('AddSpecialization') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SPECIALIZATION</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('beds') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">BEDS</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('doctorAttendance') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DOCTORS ATTENDANCE</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addDoctor') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD DOCTOR</span></a>
        </li>
      </ul>
    </nav>    



        
        
@endsection


@section('content')
    


<div class="login-page">
        <div class="form">
            <form class="" method="POST"  action="{{ action('Hospital@addpatient') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

             @foreach ($data as $item)
                Room Type - {{$item->type}}    Available -  {{$item->Available}}<br>
            @endforeach
                <br><br>
            <select required name="room">
            <option value="" disabled="disabled" selected="selected" >Please select a room</option>

                @foreach($data as $item) 
                    @if($item->Available ==0)
                     <option disabled="disabled" value="{{$item->type}}">{{$item->type}}</option></option>
                     @else
                     <option  value="{{$item->room_type}}">{{$item->type}}</option></option>
                     @endif
                 @endforeach 
            </select><br><br>
            <button class="btn btn-success">Add Patient</button>    

    </form>
  </div>
</div>


              
@endsection