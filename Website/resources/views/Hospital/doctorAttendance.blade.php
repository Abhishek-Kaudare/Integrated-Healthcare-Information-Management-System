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
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('AddSpecialization') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SPECIALIZATION</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('beds') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">BEDS</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('alldoctorsaffliated') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ALL DOCTORS</span></a>
        </li>
     
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addDoctor') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD DOCTOR</span></a>
        </li>
      </ul>
    </nav>
@endsection



@section('content')

<section>
                    <div>
                         <form class="" method="POST"  action="{{ action('Hospital@drAttendance') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                        <label class="control-label"style="margin-left:40%;color:#2255a4;font-weight:bold;font-family:Sans;padding-bottom:20px;"><h1>Mark Doctors Attendence</h1></label>
                        <div class="controls">
                          
                          <input  type="text" placeholder="Doctor ID" id="docid" name="docid" style="margin-left: 550px;padding: 5px;width:20%;"class="span11" required />
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button onclick="markalert()" Style="margin-left:50%;color: white;font-weight:bold;border-radius: 55px;padding: 10px;" class="btn btn-info">Mark Attendence</button>
                        </div>
                </section>




              
@endsection