@extends('admin_layout.master')

@foreach ($data as $item)
    @if($item->auth==0)

        @section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('PharmacyCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Complete Registration</span></a>
        </li>       
      </ul>
    </nav>
@endsection
    @endif

    @if($item->auth==2)
     @section('content')
    WAIT FOR AUTHORIZATION
@endsection
    @endif

    @if($item->auth==1)
     @section('content')
    @section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('checkoutmed') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">CHECK OUT MEDICINE</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addmed') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD MEDICINE</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addnewmed') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD NEW MEDICINE</span></a>
        </li>
      </ul>
    </nav>
@endsection
@endsection
    @endif



@endforeach
