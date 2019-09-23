<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('admin_layout.inc.head')

<body>
  <!-- Preloader - style you can find in spinners.css -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- Main wrapper - style you can find in pages.scss -->
  <div id="main-wrapper">
    <!-- Topbar header - style you can find in pages.scss -->
    @include('admin_layout.inc.header')
    <!-- End Topbar header -->   
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    @include('admin_layout.inc.sidebar')
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->  
    <!-- Page wrapper  -->    
    <div class="page-wrapper">      
      <!-- Bread crumb and right sidebar toggle -->      
      @include('admin_layout.inc.breadcrumb')
      <!-- End Bread crumb and right sidebar toggle --> 
      <!-- Container fluid  -->      
      <div class="container-fluid">

        @yield('content')
        
      </div>
      <!-- End Container fluid  -->
      <!-- footer -->
      <footer class="footer text-center">
        All Rights Reserved by Manipal.
      </footer>
      <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
  </div>
  <!-- End Wrapper --> 
  <!-- All Jquery -->
  @include('admin_layout.inc.foot')

</body>

</html>