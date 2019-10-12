@extends('admin_layout.master')

 @section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('ad') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>       

        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY CLINIC</span></a>
        </li>       

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY DOCTOR</span></a>
        </li>       

    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY PHARMACY</span></a>
        </li>       
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY BLOOD BANK</span></a>
        </li>       

      </ul>
    </nav>
@endsection

@section('content')

                     Hospital Name - {{$data["details"][0]->hospital_name}}<br>
                               City - {{$data["details"][0]->city}}<br>
                                      State - {{$data["details"][0]->state}}<br>
                                      Pincode - {{$data["details"][0]->pincode}}<br>
                                      Address - {{$data["details"][0]->address}}<br>
                                      Contact - {{$data["details"][0]->phone}}<br>
            <br>      
            <br>      
            <br> 
            <form class="" method="POST"  action="{{ action('Doctor@settimings') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>         
                <input name="hosid" type="hidden" value="{{$data['hosid']}}"/>         
                <input name="docid" type="hidden" value="{{$data['docid']}}"/>         
                
                Sunday :    <input name="sun1" type='time' > TO <input name="sun2" type='time' ><br>
                Monday : <input name="mon1" type='time' > TO <input name="mon2" type='time' ><br>
                Tuesday : <input name="tue1" type='time' > TO <input name="tue2" type='time' ><br>
                Wednesday : <input name="wed1" type='time' > TO <input name="wed2" type='time' ><br>
                Thursday : <input name="thu1" type='time' > TO <input name="thu2" type='time' ><br>
                Friday : <input name="fir1" type='time' > TO <input name="fir2" type='time' ><br>
                Saturday : <input name="sat1" type='time' > TO <input name="sat2" type='time' ><br>
                <button class="btn btn-success">Accept Request and Set Timings</button>
            </form>
            
            
          
@endsection





