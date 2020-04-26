@section('title') 
Tenant - Business
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

                    <h5 class="card-title" style="display:inline-block; float: left">Business</h5>

                    <button href="javascript:void(0)" id="infobar-addbusiness-open" style="display:inline-block; float: right;" class="btn btn-primary-rgba" > 
                      <i class="feather icon-plus mr-2"></i>Add Business
                    </button>


                    <br>

                  </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name Of Business</th>
                                <th>Username , Mobile , State , City</th>
                                <th>Type of Business</th>
                                <th>Number of Employees</th>
                                <th>Year of Establishment</th>
                                <th>GST , PAN , FSSAI</th>    
                                <th>Status</th>                                             
                                <th>Action</th>                                        
                              </tr>
                            </thead>
                            <tbody>



@foreach($business as $b)


<tr>

<td>{{ $b -> business_id }}</td>
<td>{{ $b -> business_name }}</td>
<td>{{ $b -> user_name }}<br>{{ $b -> user_mobile }}<br>{{ $b -> state }}<br>{{ $b -> user_city }}</td>
<td>{{ $b -> type }}</td>
<td>{{ $b -> business_employee_count }}</td>
<td>{{ $b -> business_est_year }}</td>
<td>{{ $b -> business_gst }}<br>{{ $b -> business_pan }}<br>{{ $b -> business_fssai }}</td>
<td>
    @if( $b->business_status == 1)
         <label class="switch"><input data-url="/adminbusiness" data-action="toggle" data-id="{{$b->business_id}}" data-value="0" type="checkbox" class="switchery" checked><span class="slider round"></span></label>
    @else
         <label class="switch"><input data-url="/adminbusiness" data-action="toggle" data-id="{{$b->business_id}}" data-value="1" type="checkbox" class="switchery" ><span class="slider round"></span></label>
    @endif
</td>

<td>
      <div class="btn-group btn-group-sm" style="float: none;">                             
            
            <button type="button" data-id="{{$b->business_id}}"   href="javascript:void(0)" class=" edit  tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
            
            <button type="button"  data-url="/adminbusiness" data-action="delete" data-id="{{$b->business_id}}" class=" delete tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
      </div>
</td>


</tr>
  
@endforeach


                             
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="row" style="align-self: center;" >
                  

                </div>


            </div>
        </div>
        <!-- End col -->

    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->






  <!-- Modal: addmodal -->

 <!-- sidebar for adding user -->


                        <div id="infobar-addbusiness-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Add Business</h4><a href="javascript:void(0)" id="infobar-business-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">

                                  <form id="add_business" enctype="multipart/form-data">

                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">
                                            <input name="business_name" type="text" class=" onlyalphaspace form-control" placeholder="Name Of Business" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="user_id" class=" user form-control"  required  >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="state_id" class=" state form-control" required  ></select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                        <input name="city" type="text" class=" city form-control" placeholder="City" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_pincode" type="number" class=" zip form-control" placeholder="Pincode [ 6 Digits ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_url" type="webaddress" class=" webaddress form-control" placeholder="Web Address [ http: //www.google.com ] " required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                          <label class="btn btn-primary-rgba btn-block" >            
                                                <input type="file" id="business_logo" style="display: none;" name="business_logo" accept="image/*"  onchange="PreviewImage();" /><i class="feather icon-upload"></i> Upload Logo
                                          </label>
                                          <label id="imagename" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                                          <img id="uploadPreview" style=" float:center margin:2%; width: 100%; height: 100%; display: none;" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select name="business_type_id" class=" businesstype form-control" required  >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_employee_count" type="number" class=" empcount form-control" placeholder="Number Of Employees" required />
                                      </div>

                                      <div class="row align-items-center pb-3">                                
                                            <input name="business_est_year" type="number" class=" year form-control" placeholder="Year Of Establishment [ YYYY ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_gst" type="number" class=" gst form-control" placeholder="GST Number [ 15 Digit ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_pan" type="number" class=" pan form-control" placeholder="PAN Number [ 10 Digit ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input name="business_fssai" type="number" class=" fssai form-control" placeholder="FSSAI Number [ 14 Digit ]" required />
                                      </div>


                                      <!-- error messages -->
                                     <div class="row">
                                          <div class="alert alert-danger" align="left" id="add_errors" style="display: none;"> 
                                          </div>
                                      </div>



                                      <div class="row align-items-center pb-5 pull-right">

                                          <button type="button" id="addbtn" onclick="submitx('add'); return false;" class="btn btn-primary-rgba" >
                                            <i class="feather icon-plus mr-2"></i>Add Business Details
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


                        <div id="infobar-editbusiness-sidebar" class="infobar-settings-sidebar">
                            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                                <h4>Edit Business</h4><a href="javascript:void(0)" id="infobar-editbusiness-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
                            </div>
                            <div class="infobar-settings-sidebar-body">
                                <div class="custom-mode-setting">
                                    

                                   <form id="edit_business" enctype="multipart/form-data">


                                    {{ csrf_field() }}


                                     <div class="row align-items-center pb-3">

                                            <input name="business_id" id="edit_business_id" type="text" hidden />
                                            <input name="old_logoname" id="old_logoname" type="text" hidden />

                                            <input id="edit_business_name" name="business_name" type="text" class=" onlyalphaspace form-control" placeholder="Name Of Business" required />

                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select id="edit_user_id" name="user_id" class=" user form-control"  required  >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select id="edit_state_id" name="state_id" class=" state form-control" required  ></select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                        <input id="edit_city" name="city" type="text" class=" city form-control" placeholder="City" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_pincode" name="business_pincode" type="number" class=" zip form-control" placeholder="Pincode [ 6 Digits ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_url" name="business_url" type="webaddress" class=" webaddress form-control" placeholder="Web Address [ http: //www.google.com ] " required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                          <label class="btn btn-primary-rgba btn-block" >            
                                                <input type="file" id="edit_business_logo" style="display: none;" name="business_logo" accept="image/*"  onchange="EditPreviewImage();" /><i class="feather icon-upload"></i> Upload New Logo
                                          </label>
                                          <label id="edit_imagename" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                                          <img id="edit_uploadPreview" style=" float:center margin:2%; width: 100%; height: 100%; display: none;" />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <select id="edit_business_type_id" name="business_type_id" class=" businesstype form-control" required  >
                                            </select>
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_employee_count" name="business_employee_count" type="number" class=" empcount form-control" placeholder="Number Of Employees" required />
                                      </div>

                                      <div class="row align-items-center pb-3">                                
                                            <input id="edit_business_est_year" name="business_est_year" type="number" class=" year form-control" placeholder="Year Of Establishment [ YYYY ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_gst" name="business_gst" type="number" class=" gst form-control" placeholder="GST Number [ 15 Digit ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_pan" name="business_pan" type="number" class=" pan form-control" placeholder="PAN Number [ 10 Digit ]" required />
                                      </div>

                                      <div class="row align-items-center pb-3">
                                            <input id="edit_business_fssai" name="business_fssai" type="number" class=" fssai form-control" placeholder="FSSAI Number [ 14 Digit ]" required />
                                      </div>


                                      <!-- error messages -->
                                     <div class="row">
                                          <div class="alert alert-danger" align="left" id="edit_errors" style="display: none;"> 
                                          </div>
                                      </div>


                                      <div class="row align-items-center pb-5 pull-right">

                                        <button type="button" id="editbtn" onclick="submitx('edit'); return false;" class="btn btn-primary-rgba" > <i class="feather icon-plus mr-2"></i>Edit Business Details
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

<script type="text/javascript">



function getdetails(id) 
{

       $.ajax({
          type: "GET",
          url: '/editbusiness',
          data: { 'id':id },
          dataType:"json",
          success: function(result) 
          { 

              $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
              $("#infobar-editbusiness-sidebar").addClass("sidebarshow");

              console.log(result.data.user_id);
              var business = result.data;

              $('#edit_business_employee_count').val(business.business_employee_count);
              $('#edit_business_est_year').val(business.business_est_year);
              $('#edit_business_fssai').val(business.business_fssai);
              $('#edit_business_gst').val(business.business_gst);
              $('#edit_business_name').val(business.business_name);
              $('#edit_business_pan').val(business.business_pan);
              $('#edit_state_id').val(business.state_id);
              $('#edit_business_type_id').val(business.business_type_id);
              $('#edit_city').val(business.user_city);
              $('#edit_user_id').val(business.user_id);
              $('#edit_business_pincode').val(business.zip);
              $('#edit_business_url').val(business.business_url);


              $url = "{{ URL::asset('/BusinessLogos/') }}/"+business.business_logo;
              $("#edit_uploadPreview").attr("src", $url);
              $('#edit_uploadPreview').show();
              $('#edit_imagename').text( "[ " +business.business_logo+ " ] , You Can Replace This Image By Re-Uploading New Image").show();

              
              
              $('#edit_business_id').val(business.business_id);
              $('#old_logoname').val(business.business_logo);


          }


       });

}


  function submitx(type) 
  {

      var PostURL;
      var formdata;

          if(type=="add")
          {
              document.getElementById("addbtn").disabled = true;
              $("#addbtn").html("Please Wait....");
              PostURL = "/addbusiness";
              formdata =  new FormData($('#add_business')[0]);
              formdata.append('business_logo', $('input[type=file]')[0].files[0]);
          }

          if(type=="edit")
          { 
              document.getElementById("editbtn").disabled = true;
              $("#editbtn").html("Please Wait....");
              PostURL = "/editbusiness";
              formdata =  new FormData($('#edit_business')[0]);
              formdata.append('business_logo', $('input[type=file]')[1].files[0]);
          }



          $.ajax({
          type: "POST",
          url: PostURL,
          data: formdata,
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
                  $("#addbtn").html("Add Business Details");
                  alert("Business Added Successfully");
              }

              if(type=="edit")
              { 
                  document.getElementById("editbtn").disabled = false;
                  $("#editbtn").html("Edit Business Details");
                  alert("Business Details Editted Successfully");
              }



              location.reload(); 

          },
          error: function(json) 
          {


// alert(json);
//infobar-settings-sidebar-body


            var error_id ;
              if(type=="add")
              {
                  document.getElementById("addbtn").disabled = false;
                  $("#addbtn").html("Add Business Details");
                  error_id = "#add_errors";
              }

              if(type=="edit")
              { 
                  document.getElementById("editbtn").disabled = false;
                  $("#editbtn").html("Edit Business Details");
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


 

    function PreviewImage() {



          $('#uploadPreview').hide();
          $('#imagename').text("").hide();


        var file = $('input[type=file]')[0].files[0];

        var oFReader = new FileReader();
        oFReader.readAsDataURL( file );

        var valid = ['jpg','jpeg','bmp','png','gif','svg']; //array of valid extensions
        var fileName = file.name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        var FileSize = file.size / 1024 / 1024; // in MB


        if (FileSize > 10) 
        {
            alert('File size exceeds 10 MB');
        } 
        else if ($.inArray(fileNameExt, valid) == -1) 
        {
            alert("Only [ "+valid.join(', ')+" ]\nImage Formats Are Accepted ");
        }
        else 
        {
            oFReader.onload = function (oFREvent) { document.getElementById("uploadPreview").src = oFREvent.target.result; };
            $('#uploadPreview').show();
            //$('#imagelable').show();
            $('#imagename').text("").hide();
            $('#imagename').text( "[ " + file.name + " ] , You Can Replace This Image By Re-Uploading New Image").show();
        }


       

    }





    function EditPreviewImage() {
      


          $('#edit_uploadPreview').hide();
          $('#edit_imagename').text("").hide();


        var file = $('input[type=file]')[1].files[0];

        var oFReader = new FileReader();
        oFReader.readAsDataURL( file );

        var valid = ['jpg','jpeg','bmp','png','gif','svg']; //array of valid extensions
        var fileName = file.name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        var FileSize = file.size / 1024 / 1024; // in MB


        if (FileSize > 10) 
        {
            alert('File size exceeds 10 MB');
        } 
        else if ($.inArray(fileNameExt, valid) == -1) 
        {
            alert("Only [ "+valid.join(', ')+" ]\nImage Formats Are Accepted ");
        }
        else 
        {
            oFReader.onload = function (oFREvent) { document.getElementById("edit_uploadPreview").src = oFREvent.target.result; };
            $('#edit_uploadPreview').show();
            //$('#imagelable').show();
            $('#edit_imagename').text("").hide();
            $('#edit_imagename').text( "[ " + file.name + " ] , You Can Replace This Image By Re-Uploading New Logo").show();
        }


       

    };


</script>



@endsection 