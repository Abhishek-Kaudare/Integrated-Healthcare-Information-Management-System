@extends('admin_layout.master')

 @section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('verifyh') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY HOSPITAL</span></a>
        </li>       

        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('HospitalCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY CLINIC</span></a>
        </li>       

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('verifyd') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY DOCTOR</span></a>
        </li>       

    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('verifyp') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY PHARMACY</span></a>
        </li>       
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('verifyb') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">VERIFY BLOOD BANK</span></a>
        </li>       

      </ul>
    </nav>
@endsection





