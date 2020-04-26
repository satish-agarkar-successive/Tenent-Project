@section('title') 
Tenant - Properties
@endsection 
@extends('layouts.main')


@section('style')

<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection 




<style type="text/css">


  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }

  .custom
  { margin-right: 10px; } 


</style>







@section('rightbar-content')


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" >                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
               <!--  <div class="card-header">
                    <h5 class="card-title">Edit with button</h5>
                </div> -->
                <div class="card-body">

                  <div style="margin-bottom: 25px;">

                    <h5 class="card-title" style="display:inline-block; float: left">Properties</h5>

                    <button   href="javascript:void(0)" onclick="javascript: window.location = '/addproperty';" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Property
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Property Name</th>
                                <th>User Name</th>
                                <th>Mobile</th>
                                <th>City</th>                                                
                                <th>No. Of Beds</th>                                                   
                                <th>Details</th>                                                   
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Girnar Accord</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Vasai</td>                               
                                  <td>0</td>                               
                                  <td>
                                       <button type="button" onclick="javascript: window.location = '/propertydetails?id=1'; " class="btn btn-warning"> <span class="custom ti-pencil"></span>Add</button>
                                      
                                  </td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" onclick="javascript: window.location = '/editproperty?id=1'; " class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>
                                  </td>
                              </tr>



                             <tr>
                                  <td>2</td>
                                  <td>Everest Tower</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Vasai</td>                               
                                  <td>20</td>                               
                                  <td>
                                       <button type="button" onclick="javascript: window.location = '/propertydetails?id=2'; " class="btn btn-info"> <span class="custom ti-pencil"></span>Edit</button>
                                  </td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" onclick="javascript: window.location = '/editproperty?id=2'; " class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>
                                  </td>
                              </tr>



                              <tr>
                                  <td>1</td>
                                  <td>Trinity</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Vasai</td>                               
                                  <td>20</td>                               
                                  <td>
                                        <button type="button" onclick="javascript: window.location = '/propertydetails?id=3'; " class="btn btn-info"> <span class="custom ti-pencil"></span>Edit</button>
                                  </td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" onclick="javascript: window.location = '/editproperty?id=3'; " class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>
                                  </td>
                              </tr>



                             
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="row" style="align-self: center;" >
                  

                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="default-datatable_previous">
                                      <a href="#" tabindex="0" class="page-link">
                                        <i class="dripicons-arrow-thin-left"></i>
                                      </a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                      <a href="#" aria-controls="default-datatable" style="z-index: 0;" class="page-link">1</a>
                                    </li> 
                                    <li class="paginate_button page-item">
                                      <a href="#" aria-controls="default-datatable" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="default-datatable_next">
                                      <a href="#" tabindex="0" class="page-link">
                                        <i class="dripicons-arrow-thin-right"></i>
                                      </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                </div>


            </div>
        </div>

        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->




@endsection 



@section('script')
<!-- Tabledit js -->
<!-- <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>      -->
<!-- <script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script> -->


<!-- <script type="text/javascript">

    function date() 
    {
     $('#datepicker').datepicker({
      "format": "mm-dd-yy",
      "startDate": "-5d",
      "endDate": "09-15-2017",
      "keyboardNavigation": false
     }); 

   }

    </script> -->




    <!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<!-- <script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script> -->

<script type="text/javascript">

    function date() 
    {
     $('#autoclose-date').datepicker({
      "format": "mm-dd-yy",
      "startDate": "-5d",
      "endDate": "09-15-2017",
      "keyboardNavigation": false
     }); 

   }

    </script>


@endsection 