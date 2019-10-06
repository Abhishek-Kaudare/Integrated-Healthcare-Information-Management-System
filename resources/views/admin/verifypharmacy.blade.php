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
                                        <th>City</th>
                                        <th>State</th>
                                        <th>pincode</th>
                                        <th>address</th>
                                        <th>phone 1 </th>
                                        <th>doc1</th>
                                        <th>doc2</th>
                                        <th>Verify</th>
                                        <th>Reject</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($values as $item)
                                    <tr>
                                        
                                        
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->state}}</td>
                                        <td>{{$item->pincode}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->phone}}</td>
                                    <td id=""><a class="btn btn-primary" href="Doc1/{{$item->doc1}}">Doc 1</a></td>
                                        <td id=""><a class="btn btn-primary" href="Doc2//{{$item->doc2}}">Doc 2</a></td>
                                    <td id=""><a class="btn btn-success" href="acceptPharmacy/{{$item->pharmacy_id}}/{{$item->user_id}}">Accept Pharmacy</a></td>
                                        <td id=""><a class="btn btn-danger" href="rejectPharmacy/{{$item->pharmacy_id}}/{{$item->user_id}}">Reject Pharmacy</a></td>
                                             
                                        
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





