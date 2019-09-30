@extends('admin_layout.master')

@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30"> 
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('hospital') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>   
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD PATIENT</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">UPDATE PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">SHIFT PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DISCHARGE PATIENT</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('beds') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">BEDS</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">DOCTORS ATTENDANCE</span></a>
        </li>
        
      </ul>
    </nav>
@endsection


@section('content')
    
     Name - {{$data['doctor'][0]->name}}<br>           
     
                                        {{-- Qualifications<br>  --}}
                                        Work Experience -  {{$data['doctor'][0]->work_exp}}<br>
                                        liscense no - {{$data['doctor'][0]->doc_license_no}}<br>
                                        address - {{$data['doctor'][0]->address}}<br>
                                        phone - {{$data['doctor'][0]->phone}}<br>
                                        languages - {{$data['doctor'][0]->languages}}<br>


                             

                                        {{-- gender - {{$data[0]->gender}}<br> --}}
                                        awards and achievement - @foreach($data['aaa'] as $item)
                                        , {{$item->award_or_achievement}}  
                                        @endforeach<br>
                                        research and publications - @foreach($data['rap'] as $item)
                                        , {{$item->research_and_publication}}  
                                        @endforeach<br>
                                        Medical Speciality - @foreach($data['doctor'] as $item)
                                        , {{$item->medical_speciality_name}}  
                                        @endforeach<br>
    
                                        
                                         
                                        summary - {{$data['doctor'][0]->summary}}<br>
                                        {{-- @endforeach --}}
<a class="btn btn-success" href="requestDoctor/{{$data['hosid']}}/{{$data['doctor'][0]->user_id}}/{{$data['doctor'][0]->doctor_id}}">Request Doctor</a>
              
@endsection