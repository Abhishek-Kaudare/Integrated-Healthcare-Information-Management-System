@extends('admin_layout.master')


@section('content')
    
@if($dat['final'] != null)

    @foreach($dat['final'] as $item)
        MEDICINE NAME - {{$item->type}}   COUNT - {{$item->quantity}}<br>
    @endforeach
@endif

@if($dat['dis'] != null)

    @foreach($dat['dis'] as $item)
        MEDICINE NAME - {{$item->type}}   COUNT - {{$item->quantity}}<br>
    @endforeach
@endif



<div class="login-page">

        
        <div class="form">
            <form class="" method="POST"  action="{{ action('BloodBank@checkoutbloodPOST') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                <select required name="bt">
                <option value="" disabled="disabled" selected="selected" >Please select a Medicine</option>
                

            @foreach($dat['dis'] as $item)
            <option disabled="disabled"  value="{{$item->id}}">{{$item->type}}</option></option>
            @endforeach

            @foreach($dat['final'] as $item)
            <option  value="{{$item->id}}">{{$item->type}}</option></option>
            @endforeach

                </select>
            <input  type="text" placeholder="Quantity In ml" id="quantity" name="quantity" required/><br><br>

          <br>  <button class="btn btn-primary">Checkout Blood</button>    


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
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addblood') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD BLOOD</span></a>
        </li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('addnewcam') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">ADD NEW CAMPAIGN</span></a>
        </li>
      </ul>
    </nav>
@endsection