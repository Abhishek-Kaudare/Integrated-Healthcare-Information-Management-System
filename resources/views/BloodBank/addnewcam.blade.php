@extends('admin_layout.master')


@section('content')
<div class="login-page">
  <div class="form">

            <form class="" method="POST"  action="{{ action('BloodBank@addcampPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 


      Name<input type="text" placeholder="Campaign Name" id="name" name="name" required/>
      <br>  
        


    Full Address<input type="text" placeholder="Address" id="address" name="address" required/>
      <br>  

    Start Time - <input type="datetime-local" name="start" required><br>
    End Time - <input type="datetime-local" name="end" required><br>

      <button class="btn btn-success">Register</button>
      
    </form>
  </div>
</div>
@endsection


@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('BloodBank') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('checkoutblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">CHECK OUT BLOOD</span></a>
        </li>       
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD BLOOD</span></a>
        </li>
        
      </ul>
    </nav>
@endsection