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


<form class="" method="POST"  action="{{ action('Hospital@addSpecializationDetials') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
<div class="row">
                    <div class="col-md-6">
                        <div class="card"style="margin-left=200%">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h2 class="card-title"style="margin-left:30%;margin-bottom:20px;color:#2255a4;font-weight:bold;font-family:Sans">Add Specialaztion</h2>
                                  

                                    @foreach ($data as $item)

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{$item->specialization_name}}</label>
                                        <div class="col-sm-9">
                                            <input id="count{{$item->idd}}"  type="text" class="form-control" id="fname" placeholder="Enter Count" name="count{{$item->idd}}" required/> 
                                        </div>
                                    </div>


            
         <br>
        @endforeach


                                    
                                <div class="border-top">
                                    <div class="card-body">
                                            <button  Style="margin-left:35%;color: white;font-weight:bold;border-radius: 55px;padding: 20px;" class="btn btn-info">Add Count</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"style="margin-left:40%;color:#2255a4;font-weight:bold;font-family:Sans">Total Count</h4>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Specialaztion</th>
                                                <th>Availability</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                     @foreach ($data as $item)
    

                                            <tr>
                                                <td>{{$item->specialization_name}}</td>
                                                <td>{{$item->count}}</td>    
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    
                            </div>
                    </div>  
                    
                </div>

@endsection