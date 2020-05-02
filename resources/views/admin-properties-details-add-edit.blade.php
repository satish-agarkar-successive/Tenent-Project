@section('title') 
Tenant - Add Properties
@endsection 
@extends('layouts.main')
@section('style')


<!-- For Editor -->


<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
<!-- Code Mirror css -->
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css">


<!-- For Editor -->


@endsection 



@section('rightbar-content')



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Block And Floor</h5>

                    <button href="javascript:void(0)" id="infobar-add-block-floor-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block Name</th>
                                <th>No. Of Floor</th>                                                  
                                <th></th>                                                 
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement + 6 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block B</td>
                                  <td>Basement + 7 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block C</td>
                                  <td>Basement + 6 + Terace</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-block-floor-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Room Details</h5>

                    <button href="javascript:void(0)" id="infobar-add-room-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Room
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block Name</th>
                                <th>Floor</th>                                                  
                                <th>Room Number</th>                                          
                                <th>Room Gender</th>                                          
                                <th>Room Type</th>                                          
                                <th>Sharing Type</th>                                          
                                <th>Furnshing</th>                                          
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B01</td>
                                  <td>Male</td>      
                                  <td>Deluxe</td>      
                                  <td>2</td>
                                  <td>A/C , Water Heater , Sofa</td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B02</td>
                                  <td>Female</td>         
                                  <td>Semi - Deluxe</td>      
                                  <td>2</td> 
                                  <td>A/C , Water Heater , Sofa</td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>6</td>                              
                                  <td>601</td>  
                                  <td>Co-Living</td>      
                                  <td>Luxury</td>      
                                  <td>2</td> 
                                  <td>A/C , Water Heater , Sofa</td> 
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-room-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Bed Details</h5>

                    <button href="javascript:void(0)" id="infobar-add-bed-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Bed
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Block</th>
                                <th>Floor</th>                                                  
                                <th>Room Number</th>
                                <th>Bed Number</th>
                                <th>Rent With Food</th>                                                  
                                <th>Rent Without Food</th>                                                  
                                <th>Deposit</th>                                          
                                <th>Maintenance</th>                                          
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Block A</td>
                                  <td>Basement</td>                              
                                  <td>B01</td>      
                                  <td>1</td>  
                                  <td>8000</td>    
                                  <td>5000/-</td>      
                                  <td>2000/-</td>      
                                  <td>500/-</td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>1</td>    
                                  <td>7000/-</td>      
                                  <td>3000/-</td>    
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>2</td>
                                  <td>5000/-</td>      
                                  <td>3500/-</td>      
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>Block A</td>
                                  <td>1</td>                              
                                  <td>101</td>      
                                  <td>3</td> 
                                  <td>4000/-</td>      
                                  <td>2000/-</td>     
                                  <td>2500/-</td>      
                                  <td>1000/-</td>  
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-bed-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-pencil"></span>
                          </button>
                          <button type="button" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;">
                              <span class="ti-trash"></span>
                          </button>
                                    </div>

                                  </td>

                              

                             
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



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"  >                
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

                    <h5 class="card-title" style="display:inline-block; float: left">Other Charges</h5>

                    <button href="javascript:void(0)" id="infobar-add-charges-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Other Charges
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>Type Of Other Charge</th>                                                  
                                <th>Rate</th>                                                 
                                <th></th>                                                 
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>A.C Electricity Bill</td>
                                  <td>Per Unit</td>                              
                                  <td>50/-</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-charges-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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
                                  <td>New Matress</td>
                                  <td>Lumpsum</td>                              
                                  <td>2000/-</td>                              
                                  <td></td>      
                                  <td>
                                    
                                    <div class="btn-group btn-group-sm" style="float: none;">
                          <button type="button"  href="javascript:void(0)" class=" infobar-edit-charges-open tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;">
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

























<!-- Modal: block and floor -->

 <!-- sidebar for add-block-floor  -->


                        <div id="infobar-add-block-floor-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Block And Floor</h4><a href="javascript:void(0)" id="infobar-add-block-floor-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_block_floor" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="blockname" type="text" class="form-control" placeholder="Block Name"  />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="floorcount" type="number" class="form-control" placeholder="No. Of Floor" 
                                            oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                           <label style="color: #007bff; margin:2%;">If Your Properties Have Below Thing Then Select Respective Box</label>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="basement" name="basement">
                                                <label class="custom-control-label" for="basement">Basement</label>
                                            </div>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="terace" name="terace">
                                                <label class="custom-control-label" for="terace">Terace</label>
                                            </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Block And Floor
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-block-floor -->

  <!-- Modal: block and floor -->



<!-- Modal: block and floor -->

 <!-- sidebar for edit-block-floor -->


                        <div id="infobar-edit-block-floor-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Block And Floor</h4><a href="javascript:void(0)" id="infobar-edit-block-floor-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_block_floor" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="blockname" type="text" class="form-control" placeholder="Block Name"  />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="floorcount" type="number" class="form-control" placeholder="No. Of Floor" 
                                            oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                           <label style="color: #007bff; margin:2%;">If Your Properties Have Below Thing Then Select Respective Box</label>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="basement" name="basement">
                                                <label class="custom-control-label" for="basement">Basement</label>
                                            </div>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                             <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="terace" name="terace">
                                                <label class="custom-control-label" for="terace">Terace</label>
                                            </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-block-floor  -->

  <!-- Modal: block and floor -->




































































<!-- Modal: Rooms -->

 <!-- sidebar for add-room  -->


                        <div id="infobar-add-room-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Room</h4><a href="javascript:void(0)" id="infobar-add-room-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_room" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="roomtype" class="form-control"   >
                                                  <option  value="" selected>Room Gender</option>
                                                  <option  value="">Male</option>
                                                  <option  value="">Female</option>
                                                  <option  value="">Co-Living</option>
                                            </select>
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <select name="roomtype" class="form-control"   >
                                                  <option  value="" selected>Room Type</option>
                                                  <option  value="">Deluxe</option>
                                                  <option  value="">Semi - Deluxe</option>
                                                  <option  value="">Luxury</option>
                                                  <option  value="">General</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="sharing" class="form-control"   >
                                                  <option  value="" selected>Sharing Type</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                            </select>
                                      </div>




                                     <div class="row align-items-center pb-3">
                                            <input name="room" type="text" class="form-control" placeholder="Room Number"  />
                                      </div>





                        
                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Below Feilds will come in tab</label>
                                            </div>
                                        </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Shoe Rack</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">T.V Stand</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Dining Table</label>
                                              </div>
                                          </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Chair</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Stool</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Tea Pie</label>
                                              </div>
                                          </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Sofa</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Bed</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Cupboard</label>
                                              </div>
                                          </div>
                            

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Room
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-room -->

  <!-- Modal: Rooms -->



<!-- Modal: Rooms -->

 <!-- sidebar for edit-room -->


                        <div id="infobar-edit-room-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Room</h4><a href="javascript:void(0)" id="infobar-edit-room-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_room" >


                                    {{ csrf_field() }}


                                       <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="roomtype" class="form-control"   >
                                                  <option  value="" selected>Room Gender</option>
                                                  <option  value="">Male</option>
                                                  <option  value="">Female</option>
                                                  <option  value="">Co-Living</option>
                                            </select>
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <select name="roomtype" class="form-control"   >
                                                  <option  value="" selected>Room Type</option>
                                                  <option  value="">Deluxe</option>
                                                  <option  value="">Semi - Deluxe</option>
                                                  <option  value="">Luxury</option>
                                                  <option  value="">General</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="sharing" class="form-control"   >
                                                  <option  value="" selected>Sharing Type</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                            </select>
                                      </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="room" type="text" class="form-control" placeholder="Room Number"  />
                                      </div>




                        
                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Below Feilds will come in tab</label>
                                            </div>
                                        </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Shoe Rack</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">T.V Stand</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Dining Table</label>
                                              </div>
                                          </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Chair</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Stool</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Tea Pie</label>
                                              </div>
                                          </div>


                                        <div class="row align-items-center pb-3">
                                            <div class="custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                <label class="custom-control-label" for="shoe">Sofa</label>
                                            </div>
                                        </div>


                                         <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Bed</label>
                                              </div>
                                          </div>

                                          <div class="row align-items-center pb-3">
                                              <div class="custom-control custom-checkbox ">
                                                  <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                                  <label class="custom-control-label" for="shoe">Cupboard</label>
                                              </div>
                                          </div>
                            

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Room
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-room  -->

  <!-- Modal: Rooms -->



































































<!-- Modal: Beds -->

 <!-- sidebar for add-beds  -->


                        <div id="infobar-add-bed-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Bed</h4><a href="javascript:void(0)" id="infobar-add-bed-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_bed" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="room" class="form-control"   >
                                                  <option  value="" selected>Select Room</option>
                                                  <option  value="">101</option>
                                                  <option  value="">102</option>
                                                  <option  value="">103</option>
                                                  <option  value="">104</option>
                                            </select>
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="bed" type="text" class="form-control" placeholder="Bed Number"  />
                                     </div>


                                     
                                     <div class="row align-items-center pb-3">
                                            <input name="rentwithfood" type="number" class="form-control" placeholder="Rent Amount With Food"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="rentnofood" type="number" class="form-control" placeholder="Rent Amount Without Food"  />
                                     </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="deposit" type="number" class="form-control" placeholder="Deposit Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="maintenance" type="number" class="form-control" placeholder="Maintenance Amount"  />
                                     </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Bed
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-beds -->

  <!-- Modal: Beds -->



<!-- Modal: beds -->

 <!-- sidebar for edit-bed -->


                        <div id="infobar-edit-bed-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Bed</h4><a href="javascript:void(0)" id="infobar-edit-bed-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_bed" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <select name="block" class="form-control"   >
                                                  <option  value="" selected>Select Block</option>
                                                  <option  value="">Block A</option>
                                                  <option  value="">Block B</option>
                                                  <option  value="">Block C</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="floor" class="form-control"   >
                                                  <option  value="" selected>Select Floor</option>
                                                  <option  value="">Basement</option>
                                                  <option  value="">1</option>
                                                  <option  value="">2</option>
                                                  <option  value="">3</option>
                                                  <option  value="">4</option>
                                                  <option  value="">5</option>
                                                  <option  value="">Terace</option>
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="room" class="form-control"   >
                                                  <option  value="" selected>Select Room</option>
                                                  <option  value="">101</option>
                                                  <option  value="">102</option>
                                                  <option  value="">103</option>
                                                  <option  value="">104</option>
                                            </select>
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="bed" type="text" class="form-control" placeholder="Bed Number"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="rentwithfood" type="number" class="form-control" placeholder="Rent Amount With Food"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="rentnofood" type="number" class="form-control" placeholder="Rent Amount Without Food"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="deposit" type="number" class="form-control" placeholder="Deposit Amount"  />
                                     </div>


                                     <div class="row align-items-center pb-3">
                                            <input name="maintenance" type="number" class="form-control" placeholder="Maintenance Amount"  />
                                     </div>
                                      
                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Bed
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-bed  -->

  <!-- Modal: Beds -->


























































<!-- Modal: Charges -->

 <!-- sidebar for add-charges  -->


                        <div id="infobar-add-charges-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Other Charges</h4><a href="javascript:void(0)" id="infobar-add-charges-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                
                                <div class="custom-mode-setting">
                                    

                                   <form id="add_charges" >


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <textarea name="description" type="text" placeholder="Other Charge Description" class="form-control" style="height:100px;"  /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="charge_type" class="form-control"   >
                                                  <option  value="" selected>Type Of Other Charge</option>
                                                  <option  value="">Lumpsum</option>
                                                  <option  value="">Per Unit</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="rate" type="number" class="form-control" placeholder="Rate"  />
                                      </div>

                                     

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add Other Charges
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>

                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for add-charges -->

  <!-- Modal: Charges -->



<!-- Modal: Charges -->

 <!-- sidebar for edit-charges -->


                        <div id="infobar-edit-charges-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Other Charges</h4><a href="javascript:void(0)" id="infobar-edit-charges-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_charges" >


                                    {{ csrf_field() }}


                                    <div class="row align-items-center pb-3">
                                            <textarea name="description" type="text" placeholder="Other Charge Description" class="form-control" style="height:100px;"  /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="charge_type" class="form-control"   >
                                                  <option  value="" selected>Type Of Other Charge</option>
                                                  <option  value="">Lumpsum</option>
                                                  <option  value="">Per Unit</option>
                                            </select>
                                      </div>



                                     <div class="row align-items-center pb-3">
                                            <input name="rate" type="number" class="form-control" placeholder="Rate"  />
                                      </div>




                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="submit" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit Other Charges
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>

                            </div>
                        </div>



        <!-- sidebar for edit-charges  -->

  <!-- Modal: Charges -->

















@endsection 
@section('script')




<!-- For Editor -->

<!-- Wysiwig js -->
<!-- <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script> -->
<!-- Wysiwig js -->


<!-- Summernote JS -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Summernote JS -->


<!-- Code Mirror JS -->
<!-- <script src="{{ asset('assets/plugins/code-mirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/htmlmixed.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/css.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/javascript.js') }}"></script>
<script src="{{ asset('assets/plugins/code-mirror/xml.js') }}"></script> -->
<!-- Code Mirror JS -->

<script src="{{ asset('assets/js/custom/custom-form-editor.js') }}"></script>

<!-- For Editor -->





<script type="text/javascript">

    function Submit1() 
    {
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }

    function Submit2() 
    {
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }

    function Submit3() 
    {
         
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }


    function Submit4() 
    {

         alert( $('.note-editable').text() );


         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         
    }



    $(document).ready(function() {
      document.getElementById("propertyname").focus(); 
    });

</script>
    

@endsection 