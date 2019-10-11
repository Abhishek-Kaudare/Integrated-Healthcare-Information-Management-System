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
        
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('AddSpecialization') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SPECIALIZATION</span></a>
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
    
 <form class="" method="POST"  action="{{ action('Hospital@dischargepatient') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
<div class="card">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:50%;color:#2255a4;font-weight:bold;font-family:Sans"> Discharge Patient</h2>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">

                    <select name="room" class="select2 form-control custom-select" style="float:right;width: 50%; height:36px;" required>
            <option value="" disabled="disabled" selected="selected" >Please select a room</option>

                @foreach($data as $item) 
                    @if($item->Available ==0 or $item->ccount ==$item->Available)
                     <option disabled="disabled" value="{{$item->type}}">{{$item->type}}</option></option>
                     @else
                     <option  value="{{$item->room_type}}">{{$item->type}}</option></option>
                     @endif
                 @endforeach 
            </select><br><br>


                </div>
            </div>
           
        </div>
    </div>
        <div class="border-top">
            <div class="card-body">
                <button  Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Discharge Patient</button>
                {{-- <button class="btn btn-danger">Discharge Patient</button>     --}}
            </div>
        </div>
    </form>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Room Available</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Availability</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$item->type}}</td>
                            <td>{{$item->Available}}</td>    
                        </tr>
                        @endforeach
                        
                    </tbody>
                   
                </table>
            </div>

        </div>
    </div>
    </div>
{{-- <div class="login-page">
        <div class="form">
            <form class="" method="POST"  action="{{ action('Hospital@dischargepatient') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

            @foreach ($data as $item)
                Room Type - {{$item->type}}    Available -  {{$item->Available}}<br>
            @endforeach
                <br><br>
            <select required name="room">
            <option value="" disabled="disabled" selected="selected" >Please select a room</option>

                @foreach($data as $item) 
                    @if($item->Available ==0 or $item->ccount ==$item->Available)
                     <option disabled="disabled" value="{{$item->type}}">{{$item->type}}</option></option>
                     @else
                     <option  value="{{$item->room_type}}">{{$item->type}}</option></option>
                     @endif
                 @endforeach 
            </select><br><br>
            <button class="btn btn-danger">Discharge Patient</button>    

    </form>
  </div>
</div>
 --}}

              
@endsection