@section('title') 
Tenant - Users
@endsection 
@extends('layouts.main')



@section('style')

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

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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

                    <h5 class="card-title" style="display:inline-block; float: left">User Details</h5>

                    <button href="javascript:void(0)" id="infobar-adduser-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add User
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Username , Mobile , Email</th>                                                 
                                <th>Activation Date</th>                                                   
                                <th>Renewal Date</th>                                                   
                                <th>[Rupees] Deal Value</th>   
                                <th>No. Of Properties</th>                                                   
                                <th>Status</th>                                                   
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>
                           

@foreach($user as $u)

<tr>

<td>{{ $u -> user_id }} </td>
<td>{{ $u -> user_name }}<br>{{ $u -> user_mobile }}<br>{{ $u -> user_email }} </td>
<td>{{ $u -> user_activation_date }} </td>
<td>{{ $u -> user_renewal_date }} </td>
<td><i class="fa fa-inr" style="margin: 5px;"></i>{{ $u -> user_deal_value }} </td>
<td>{{ $u -> prop_count }} </td>

<td>
    @if( $u->user_status == 1)
         <label class="switch"><input data-url="/adminuser" data-action="toggle" data-id="{{$u->user_id}}" data-value="0" type="checkbox" class="switchery" checked><span class="slider round"></span></label>
    @else
         <label class="switch"><input data-url="/adminuser" data-action="toggle" data-id="{{$u->user_id}}" data-value="1" type="checkbox" class="switchery" ><span class="slider round"></span></label>
    @endif
</td>

<td>
      <div class="btn-group btn-group-sm" style="float: none;">                             
            
            <button type="button" data-id="{{$u->user_id}}"   href="javascript:void(0)" class=" edit  tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
            
            <button type="button"  data-url="/adminuser" data-action="delete" data-id="{{$u->user_id}}" class=" delete tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
      </div>
</td>


</tr>
  
@endforeach



                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="row" style="align-self: center;" >{{  $user->links() }}</div>


            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->




  <!-- Modal: addmodal -->

 <!-- sidebar for adding user -->


                        <div id="infobar-adduser-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add User</h4><a href="javascript:void(0)" id="infobar-adduser-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">

                                  <form id="adduser_form" method="POST" action="/adduser" >

                                    {{ csrf_field() }}

                                     <div class="row align-items-center pb-3">
                                            <input name="username" id="add_username" type="text" class=" onlyalphaspace form-control" placeholder="User Name" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="user_mobile" id="add_phone" type="number" class=" phone  form-control" placeholder="Mobile" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="email" id="add_email" type="email" class="form-control" placeholder="abc@xyz.com"  required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="user_gender" id="add_gender"  class=" gender form-control"  required  >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <textarea name="address" id="add_address"  type="text" placeholder="Address" class=" address form-control" style="height:100px;" required /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="state_id" id="add_state"  class=" state form-control"  required >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="city" id="add_city"  type="text" class=" city form-control" placeholder="City"required />
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="zip" id="add_zip" type="number" class=" zip form-control" placeholder="Pincode [ 6 Digits ]" required required />
                                      </div>



                                      <div  class=" input-group row align-items-center pb-3" >

                                        <div class="input-group-prepend">
                                        <span class="input-group-text">Renewal Date</span>
                                        </div>

                                        <input type="date" name="renewal_date" id="add_renewal_date"  class=" date form-control" required />

                                        <div class="input-group-append">
                                        <span class="input-group-text" ><i class="feather icon-calendar"></i></span>
                                        </div>

                                      </div>





                                      <div class="row align-items-center pb-3">
                                            <input name="dealvalue" id="add_dealvalue"  type="number" class=" dealvalue form-control" placeholder="Deal Value" required />
                                      </div>


                                      <!-- error messages -->
                                     <div class="row">
                                          <div class="alert alert-danger" align="left" id="add_errors" style="display: none;"> 
                                          </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button id="addbtn" type="button" onclick="add();" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Add User Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>

                                </div>


                            </div>
                        </div>



        <!-- sidebar for adding user -->

  <!-- Modal: addmodal -->



<!-- Modal: editmodal -->

 <!-- sidebar for editing user -->


                        <div id="infobar-edituser-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit User</h4><a href="javascript:void(0)" id="infobar-edituser-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                    <form id="edituser_form" method="POST" action="/edituser">

                                      {{ csrf_field() }}

                                     <div class="row align-items-center pb-3">

                                            <input name="user_id" id="edit_user_id" type="text" hidden />

                                            <input name="username" id="edit_username" type="text" class=" onlyalphaspace form-control" placeholder="User Name" required />

                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="user_mobile" id="edit_phone" type="number" class=" phone  form-control" placeholder="Mobile" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="email" id="edit_email" type="email" class="form-control" placeholder="abc@xyz.com"  required />
                                      </div>



                                      <div class="row align-items-center pb-3">
                                            <select name="user_gender" id="edit_gender"  class=" gender form-control"  required  >
                                            </select>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <textarea name="address" id="edit_address"  type="text" placeholder="Address" class=" address form-control" style="height:100px;" required /></textarea>
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <select name="state_id" id="edit_state"  class=" state form-control"  required >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="city" id="edit_city"  type="text" class=" city form-control" placeholder="City"required />
                                      </div>


                                      <div class="row align-items-center pb-3">
                                            <input name="zip" id="edit_zip" type="number" class=" zip form-control" placeholder="Pincode [ 6 Digits ]" required required />
                                      </div>



                                      <div  class=" input-group row align-items-center pb-3" >

                                        <div class="input-group-prepend">
                                        <span class="input-group-text">Renewal Date</span>
                                        </div>

                                        <input type="date" name="renewal_date" id="edit_renewal_date"  class="form-control" required />

                                        <div class="input-group-append">
                                        <span class="input-group-text" ><i class="feather icon-calendar"></i></span>
                                        </div>

                                      </div>





                                      <div class="row align-items-center pb-3">
                                            <input name="dealvalue" id="edit_dealvalue"  type="number" class=" dealvalue form-control" placeholder="Deal Value" required />
                                      </div>


                                     <!-- error messages -->
                                     <div class="row">
                                          <div class="alert alert-danger" align="left" id="edit_errors" style="display: none;"> 
                                          </div>
                                      </div>
                                      

                                      <div class="row align-items-center pb-5 pull-right">

                                          <button id="editbtn" type="button" onclick="edit();" class="btn btn-primary-rgba" > 
                                            <i class="feather icon-plus mr-2"></i>Edit User Details
                                          </button>
                                        
                                      </div>

                                      <div class="row align-items-center pb-3">
                                      </div>


                                    </form>
                                </div>




                            </div>
                        </div>



        <!-- sidebar for editing user -->

  <!-- Modal: editmodal -->






@endsection 



@section('script')
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>





<script type="text/javascript">


//this call is happening in core.js for edit[class]  button click listener 
function getdetails(id) 
{

       $.ajax({
          type: "GET",
          url: '/edituser',
          data: { 'id':id },
          dataType:"json",
          success: function(result) 
          { 
            
              $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
              $("#infobar-edituser-sidebar").addClass("sidebarshow");
            
              var user = result.data;

              $('#edit_user_id').val(user.user_id);
              $('#edit_username').val(user.user_name);
              $('#edit_phone').val(user.user_mobile);
              $('#edit_email').val(user.user_email);
              $('#edit_gender').val(user.user_gender);
              $('#edit_address').val(user.user_address);
              $('#edit_state').val(user.state_id);
              $('#edit_city').val(user.user_city);
              $('#edit_zip').val(user.zip);
              $("#edit_renewal_date").attr("min",user.user_activation_date);
              $("#edit_renewal_date").attr("value",user.user_renewal_date);
              $('#edit_dealvalue').val(user.user_deal_value);



          }
       });

}




    function add() 
    {

        var add_error = false;
        
        $("#add_errors").empty().hide();
        $("#add_errors").append("<ul>");


        if( $('#add_username').val() == "" ) 
            {  $("#add_errors").append("<li>Enter User Name.</li>").show();  add_error = true; }
      

        if( $('#add_phone').val() == "" ) 
            {  $("#add_errors").append("<li>Enter Phone Number And It Should Be Numeric.</li>").show();  add_error = true; }


        // if( $('#add_email').val() == "" ) 
        //     {  $("#add_errors").append("<li>Enter Email Address.</li>").show();  add_error = true; }


        if( $('#add_gender').val() == "" ) 
        {  $("#add_errors").append("<li>Select Gender.</li>").show();  add_error = true; }


        // if( $('#add_address').val() == "" ) 
        //   {  $("#add_errors").append("<li>Enter Address.</li>").show();  add_error = true; }


        if( $('#add_state').val() == "" ) 
          {  $("#add_errors").append("<li>Select State.</li>").show();  add_error = true; }


        if( $('#add_city').val() == "" ) 
          {  $("#add_errors").append("<li>Enter City.</li>").show();  add_error = true; }


        if( $('#add_zip').val() == "" ) 
          {  $("#add_errors").append("<li>Enter Pincode.</li>").show();  add_error = true; }


        // if( $('#add_dealvalue').val() == "" ) 
        //   {  $("#add_errors").append("<li>Enter Deal Value.</li>").show();  add_error = true; }

        $("#add_errors").append("</ul>");

        if( add_error == false ) { submitajax('add'); } ;   

    }





    function edit() 
    {

        var edit_error = false;
        
        $("#edit_errors").empty().hide();
        $("#edit_errors").append("<ul>");


        if( $('#edit_username').val() == "" ) 
            {  $("#edit_errors").append("<li>Enter User Name.</li>").show();  edit_error = true; }
      

        if( $('#edit_phone').val() == "" ) 
            {  $("#edit_errors").append("<li>Enter Phone Number And It Should Be Numeric.</li>").show();  edit_error = true; }


        // if( $('#edit_email').val() == "" ) 
        //     {  $("#edit_errors").append("<li>Enter Email Address.</li>").show();  edit_error = true; }



        if( $('#edit_gender').val() == "" ) 
        {  $("#edit_errors").append("<li>Select Gender.</li>").show();  add_error = true; }



        // if( $('#edit_address').val() == "" ) 
        //   {  $("#edit_errors").append("<li>Enter Address.</li>").show();  edit_error = true; }


        if( $('#edit_state').val() == "" ) 
          {  $("#edit_errors").append("<li>Select State.</li>").show();  edit_error = true; }


        if( $('#edit_city').val() == "" ) 
          {  $("#edit_errors").append("<li>Enter City.</li>").show();  edit_error = true; }


        if( $('#edit_zip').val() == "" ) 
          {  $("#edit_errors").append("<li>Enter Pincode.</li>").show();  add_error = true; }


        // if( $('#edit_dealvalue').val() == "" ) 
        //   {  $("#edit_errors").append("<li>Enter Deal Value.</li>").show();  edit_error = true; }


        $("#edit_errors").append("</ul>");

        if( edit_error == false ) { submitajax('edit'); } ;   

    }




    function submitajax(type)
    {

      var PostURL;
      var Formdata;

          if(type=="add")
          {
              document.getElementById("addbtn").disabled = true;
              $("#addbtn").html("Please Wait....");
              PostURL = "/adduser";
              Formdata =  new FormData($('#adduser_form')[0]);

          }

          if(type=="edit")
          { 
              document.getElementById("editbtn").disabled = true;
              $("#editbtn").html("Please Wait....");
               PostURL = "/edituser";
               Formdata =  new FormData($('#edituser_form')[0]);

          }



          $.ajax({
          type: "POST",
          url: PostURL,
          data: Formdata,
          dataType:"json",
          cache:false,
          processData:false,
          contentType:false,
          success: function(result) 
          { 
              
              $('.menu-hamburger-close').click();

               if(type=="add")
              {
                  document.getElementById("addbtn").disabled = false;
                  $("#addbtn").html("Add User Details");
                  alert("User Added Successfully");
              }

              if(type=="edit")
              { 
                  document.getElementById("editbtn").disabled = false;
                  $("#editbtn").html("Edit User Details");
                  alert("User Details Editted Successfully");
              }



              location.reload(); 

          },
          error: function(json) 
          {




            var error_id ;
              if(type=="add")
              {
                  document.getElementById("addbtn").disabled = false;
                  $("#addbtn").html("Add User Details");
                  error_id = "#add_errors";
              }

              if(type=="edit")
              { 
                  document.getElementById("editbtn").disabled = false;
                  $("#editbtn").html("Edit User Details");
                  error_id = "#edit_errors";
                  
              }


              if(json.status === 422) 
                {
                    $(error_id).empty();
                    $(error_id).append("<ul>");

                    var errors = json.responseJSON;

                    $.each(errors['errors'], function (key, value) {  $(error_id).append("<li>"+value+"</li>");  });

                    $(error_id).append("</ul>").show();

                } 
                else { $(error_id).hide();  }

          }
       });

    }

</script>


@endsection 