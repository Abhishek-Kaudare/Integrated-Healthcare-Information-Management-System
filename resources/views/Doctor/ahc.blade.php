@extends('admin_layout.master')



@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('Doctor') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
          <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('medicalspeciality') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">MEDICAL SPECIALITY</span></a>
        </li>
        
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('language') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD LANGUAGE</span></a>
        </li>

        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('awards') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">AWARD AND ACHIEVEMENT</span></a>
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
                                
                                        <th>Hospital Name</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>pincode</th>
                                        <th>address</th>
                                        <th>phone 1 </th>
                                        <th>Timings</th>
                                        <th>Discontinue</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        
                                        
                                        <td>{{$item->hospital_name}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->state}}</td>
                                        <td>{{$item->pincode}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->phone}}</td>
                                    {{-- <td id=""><a class="btn btn-primary" href="Doc1/{{$item->doc1}}">Doc 1</a></td>
                                        <td id=""><a class="btn btn-primary" href="Doc2//{{$item->doc2}}">Doc 2</a></td> --}}
                                        <td style="padding-right:10px">
                                            @if($item->monin !=null)
                                            MONDAY : {{$item->monin}} - {{$item->monout}}
                                            @endif
                                            @if($item->tuesin !=null)
                                            TUESDAY : {{$item->tuesin}} - {{$item->tuesout}}
                                            @endif
                                            @if($item->wedin !=null)
                                            WEDNESDAY : {{$item->wedin}} - {{$item->wedout}}
                                            @endif
                                            @if($item->thurin !=null)
                                            THURSDAY : {{$item->thurin}} - {{$item->thurout}}
                                            @endif
                                            @if($item->friin !=null)
                                            FRIDAY : {{$item->friin}} - {{$item->friout}}
                                            @endif
                                            @if($item->satin !=null)
                                            SATURDAY : {{$item->satin}} - {{$item->satout}}
                                            @endif
                                            @if($item->sunin !=null)
                                            SUNDAY : {{$item->sunin}} - {{$item->sunout}}
                                            @endif

                                        </td>
                                        <td id=""><a class="btn btn-danger" href="removeHospital/{{$item->doctor_id}}/{{$item->hospital_id}}">Discontinue</a></td>
                                            
                                        
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