@section('title') 
Tenant - Guest
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

                    <h5 class="card-title" style="display:inline-block; float: left">Guest</h5>

                    <button href="javascript:void(0)" onclick="javascript: window.location = '/addguest';" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Guest
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Guest Name</th>
                                <th>Mobile No.</th>
                                <th>Property Name</th>
                                <th>Room No.</th>
                                <th>Bed No.</th>             
                                <th>Rent Amount</th>
                                <th>Deposit Amount</th>
                                <th>Check In Time / Check Out Time</th>          
                                <th>Gender</th>          
                                <th>Company / School / College / Organisation</th>        
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>



                              <tr>
                                  <td>1</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Girnar Accord</td>
                                  <td>G01</td>                               
                                  <td>1</td>                               
                                  <td>5000/-</td>                               
                                  <td>2000/-</td>                               
                                  <td>May 15, 2020 12:00 PM / May 16, 2020 05:00 PM</td>
                                  <td>Male</td>                               
                                  <td>Universal College Of Engineering</td>    
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                      <button type="button" href="javascript:void(0)" onclick="javascript:window.location='/editguest?id=1';" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Girnar Accord</td>
                                  <td>G01</td>                               
                                  <td>1</td>                               
                                  <td>5000/-</td>                               
                                  <td>2000/-</td>                               
                                  <td>May 15, 2020 12:00 PM / May 16, 2020 05:00 PM</td>
                                  <td>Male</td>                               
                                  <td>Universal College Of Engineering</td>    
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                      <button type="button" href="javascript:void(0)" onclick="javascript:window.location='/editguest?id=2';" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                          <span class="ti-pencil"></span>
                      </button>

                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>





                              <tr>
                                  <td>3</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Girnar Accord</td>
                                  <td>G01</td>                               
                                  <td>1</td>                               
                                  <td>5000/-</td>                               
                                  <td>2000/-</td>                               
                                  <td>May 15, 2020 12:00 PM / May 16, 2020 05:00 PM</td>
                                  <td>Male</td>                               
                                  <td>Universal College Of Engineering</td>    
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                      <button type="button" href="javascript:void(0)" onclick="javascript:window.location='/editguest?id=3';" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                          <span class="ti-pencil"></span>
                      </button>

                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              </tr>





                              <tr>
                                  <td>4</td>
                                  <td>Mrudul Addipalli</td>
                                  <td>8446184884</td>
                                  <td>Girnar Accord</td>
                                  <td>G01</td>                               
                                  <td>1</td>                               
                                  <td>5000/-</td>                               
                                  <td>2000/-</td>                               
                                  <td>May 15, 2020 12:00 PM / May 16, 2020 05:00 PM</td>
                                  <td>Male</td>                               
                                  <td>Universal College Of Engineering</td>    
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">

                      <button type="button" href="javascript:void(0)" onclick="javascript:window.location='/editguest?id=4';" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
<!-- <script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script> -->

@endsection 