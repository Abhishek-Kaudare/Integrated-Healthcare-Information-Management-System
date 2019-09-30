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

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            {{-- <h5 >Basic Datatable</h5>
                            <a href={{ url( '/admin/view-category') }} class="btn btn-info float-right">View Category</a> --}}
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                
                                        <th>Name</th>
                                        {{-- <th>Qualifications</th> --}}
                                        <th>Work Experience</th>
                                        <th>View Profile</th>
                                        {{-- <th>liscense no</th>
                                        <th></th>
                                        <th>address</th>
                                        <th>phone</th>
                                        <th>languages</th>
                                        <th>gender</th>
                                        
                                        <th>awards and achievement</th>
                                        <th>research and publications</th>
                                        <th>summary</th> --}}
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        
                                        
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->work_exp}}</td>
                                    <td id=""><a class="btn btn-primary" href="AllDoctor/{{$item->doctor_id}}/{{$item->user_id}}">View Profile</a></td>
                                        
                                            
                                        
                                    </tr>  
                                    @endforeach
                                </tbody>
                               
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection