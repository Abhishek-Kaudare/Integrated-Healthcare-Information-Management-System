@extends('admin_layout.master')


@section('content')
    
@if($dat['final'] != null)

    @foreach($dat['final'] as $item)
        MEDICINE NAME - {{$item->medicine_name}}   COUNT - {{$item->ccount}}<br>
    @endforeach
@endif

@if($dat['dis'] != null)

    @foreach($dat['dis'] as $item)
        MEDICINE NAME - {{$item->medicine_name}}   COUNT - {{$item->ccount}}<br>
    @endforeach
@endif



<div class="login-page">

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('Pharmacy@checkoutmedPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select required name="med">
                <option value="" disabled="disabled" selected="selected" >Please select a Medicine</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->medicine_name}}</option></option>
            @endforeach

                </select>
            <input  type="text" placeholder="count" id="count" name="count" required/><br><br>

          <br>  <button class="btn btn-primary">Checkout Medicine</button>    


    </form>
  </div>
</div>


              
@endsection

@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">    
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('Pharmacy') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">HOME</span></a>
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