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
     
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('dischargepatient') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DISCHARGE PATIENT</span></a>
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
     <form class="" method="POST"  action="{{ action('Hospital@shiftpatient') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
<div class="card">
        <div class="card-body">
            <h2 class="card-title"style="margin-left:50%;color:#2255a4;font-weight:bold;font-family:Sans">Shift Patient</h2>
            <div class="form-group row">
                <!-- <label class="col-md-3 m-t-15">Single Select</label> -->
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" style="float:right;width: 35%;margin-left:20px;height:36px;">
                        <option>Please Select a room to be shifted</option>
                            <option value="AK">ICU</option>
                            <option value="HI">NORMAL WARD</option>
                            <option value="AK">ICU</option>
                            <option value="HI">NORMAL WARD</option>
                            <option value="AK">ICU</option>
                            <option value="HI">NORMAL WARD</option>
                       
                    </select>
                    <select class="select2 form-control custom-select" style="float:right;width: 35%; height:36px;">
                            <option>Please Select current room</option>
                                <option value="AK">ICU</option>
                                <option value="HI">NORMAL WARD</option>
                                <option value="AK">ICU</option>
                                <option value="HI">NORMAL WARD</option>
                                <option value="AK">ICU</option>
                                <option value="HI">NORMAL WARD</option>
                           
                        </select>
                </div>
              
            </div>
           
        </div>
    </div>
        <div class="border-top">
            <div class="card-body">
                <button type="button" Style="margin-left:45%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Add Patient</button>
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
                        <tr>
                            <td>ICU</td>
                            <td>500</td>    
                        </tr>
                        <tr>
                            <td>LABOUR ROOM</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>NORMAL WARD</td>
                            <td>500</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SPECIAL ROOM</th>
                            <th>500</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    </div>

<div class="login-page">
        <div class="form">
            <form class="" method="POST"  action="{{ action('Hospital@shiftpatient') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
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
            </select>

            <select required name="roomshift">
            <option value="" disabled="disabled" selected="selected" >Please select a room</option>

                @foreach($data as $item) 
                    @if($item->Available ==0)
                     <option disabled="disabled" value="{{$item->type}}">{{$item->type}}</option></option>
                     @else
                     <option  value="{{$item->room_type}}">{{$item->type}}</option></option>
                     @endif
                 @endforeach 
            </select><br><br>


            <button class="btn btn-warning">Shift Patient</button>    

    </form>
  </div>
</div>


              
@endsection