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





            <form class="" method="POST"  action="{{ action('Pharmacy@addRegisterDetials') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

<div class="card">
                        <div class="card-body">
                            <h2 class="card-title"style="margin-left:40%;margin-bottom:20px;color:#2255a4;font-weight:bold;font-family:Sans">Pharmacy Registration</h2>
                            <div class="form-group row">
                                    <label for="fname" class="col-md-3 m-t-15">Pharmacy Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter Pharmacy Name" id="name" name="name" required/>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 m-t-15">State</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="state">
                                        {{-- <option>Select State</option> --}}
                                        <optgroup label="Select State">
                                            
                                            
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
<option value="Puducherry">Puducherry</option>
                                            
                                            
                                        </optgroup>
                                        
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">
                                    <label class="col-md-3 m-t-15">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="fname" placeholder="City" name="city" required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="fname" class="col-md-3 m-t-15">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter Pharmacy address" name="address" required>
                            </div>

                           
                            
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-md-3 m-t-15">Pincode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter pincode" name="pincode" required>
                        </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-md-3 m-t-15">Contact 1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter contact number 1" name="con1" required>
                        </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-md-3 m-t-15">Contact 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter contact number 2" name="con2" required>
                        </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-md-3 m-t-15">Contact 3</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter contact number 3" name="con3" required>
                        </div> 
                            </div>
                            <div class="form-group row">
                                    <label for="fname" class="col-md-3 m-t-15">Latitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter Latitude" name="lat" >
                            </div>
                            </div>
                            <div class="form-group row">
                                    <label for="fname" class="col-md-3 m-t-15">Longitude</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter Longitude" name="long" >
                            </div>
                            </div>

                            <div class="form-group row">
                            <label class="col-md-3">Clinic Allowance Document</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="doc1" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Clinic Licence </label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="doc2" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button class="btn btn-info"style="margin-left:40%">Register</button>
                            </div>
                        </div>
                    </div>

</form>



@endsection