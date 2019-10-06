@extends('admin_layout.master')

@section('sidebarOptions')
    <nav class="sidebar-nav">
      <ul id="sidebarnav" class="p-t-30">
        
    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ url('PharmacyCompleteRegistration') }}"
            aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Complete Registration</span></a>
        </li>       
      </ul>
    </nav>
@endsection


@section('content')
<div class="login-page">
  <div class="form">

            <form class="" method="POST"  action="{{ action('Pharmacy@addRegisterDetials') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 


      Name<input type="text" placeholder="Pharmacy Name" id="name" name="name" required/>
      <br>  
        
      Pincode<input type="text" placeholder="Pincode" id="pincode" name="pincode" required/>
      <br>  
      
    State<select required>
    <option value="" disabled="disabled" selected="selected">Please select a name</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option></option>
<option value="Arunachal Pradesh ">Arunachal Pradesh </option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir ">Jammu and Kashmir </option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
<option value="Puducherry">Puducherry
    </select>
    <br>  
    City<input type="text" placeholder="City" id="city" name="city" required/>
      <br>

    Full Address<input type="text" placeholder="Address" id="address" name="address" required/>
      <br>  

      Contact 1<input type="text" placeholder="Contact 1" id="cont1" name="con1" required/>
      <br>  
      
      Contact 2<input type="text" placeholder="Contact 2" id="cont2" name="con2"/>
      <br>  

      Contact 3<input type="text" placeholder="Contact 3" id="cont3" name="con3"/>
      <br>  

      Latitude<input type="text" placeholder="Latitude" id="lat" name="lat"/>
      <br>  

      Longitude<input type="text" placeholder="Longitude" id="long" name="long"/>
      <br>  
        <label class="" for="">Choose file...</label>
      <input class="" id="" name="doc1" required type="file"><br>

      <label class="" for="">Choose file...</label>
      <input class="" id="" name="doc2" required type="file"><br>
    

      <button class="btn btn-success">Register</button>
      
    </form>
  </div>
</div>
@endsection