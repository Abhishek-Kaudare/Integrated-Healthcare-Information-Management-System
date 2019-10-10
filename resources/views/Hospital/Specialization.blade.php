@extends('admin_layout.master')



@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('hospital') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>   
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addpatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD PATIENT</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('shiftpatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SHIFT PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('dischargepatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DISCHARGE PATIENT</span></a>
        </li>
        
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('beds') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">BEDS</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('alldoctorsaffliated') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ALL DOCTORS</span></a>
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
@foreach ($data as $item)
    Specilization - {{$item->specialization_name}}    COUNT -  {{$item->count}}<br>
@endforeach

<br><br>

    <div class="login-page">
        <div class="form">
            <form class="" method="POST"  action="{{ action('Hospital@addSpecializationDetials') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

        @foreach ($data as $item)
            {{$item->specialization_name}}<input  type="text" placeholder="COUNT" id="count{{$item->idd}}" name="count{{$item->idd}}" required/>
           {{-- @if($item->count==0)
            PRICE <input  type="text" placeholder="PRICE" id="price{{$item->typeid}}" name="price{{$item->idd}}" required/>
           @endif  --}}
        <br>
        @endforeach
                

      <button class="btn btn-success">ADD</button>
      
    </form>
  </div>
</div>



@endsection