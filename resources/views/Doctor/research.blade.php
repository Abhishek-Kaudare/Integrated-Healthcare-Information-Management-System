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
        <div class="form">
            <form class="" method="POST"  action="{{ action('Doctor@researchPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
            
            <textarea placeholder="Research" id="research" name="research" cols="80" rows="7" required></textarea>
                <br>
            
      <button class="btn btn-success">Add Research and/or Publication</button>
      
    </form>
  </div>
</div>

              
@endsection