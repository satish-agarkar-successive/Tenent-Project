@section('title') 
Tenant - Add Guest
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

  .uploads { height:100px; margin:10px; }







</style>




@section('rightbar-content')




<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Add Guest</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                    <form method="POST" action="{{url('/')}}/addguest" enctype="multipart/form-data" >

                        {{ csrf_field() }}



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="property" class="form-control">
                                      <option  value="" selected>Select Property</option>
                                      <option  value="">Property 1</option>
                                      <option  value="">Property 2</option>
                                      <option  value="">Property 3</option>
                                      <option  value="">Property 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="block" class="form-control">
                                      <option  value="" selected>Select Block</option>
                                      <option  value="">Block 1</option>
                                      <option  value="">Block 2</option>
                                      <option  value="">Block 3</option>
                                      <option  value="">Block 4</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="floor" class="form-control">
                                      <option  value="" selected>Select Floor</option>
                                      <option  value="">Floor 1</option>
                                      <option  value="">Floor 2</option>
                                      <option  value="">Floor 3</option>
                                      <option  value="">Floor 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="room" class="form-control">
                                      <option  value="" selected>Select Room</option>
                                      <option  value="">101</option>
                                      <option  value="">102</option>
                                      <option  value="">103</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="bed" class="form-control">
                                      <option  value="" selected>Select Bed</option>
                                      <option  value="">Bed 1</option>
                                      <option  value="">Bed 2</option>
                                      <option  value="">Bed 3</option>
                                      <option  value="">Bed 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="booktype" class="form-control">
                                      <option  value="" selected>Select Type Of Booking</option>
                                      <option  value="">Tentative</option>
                                      <option  value="">Confirmed</option>
                                      <option  value="">Waitlist</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name Of Guest">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email Address Of Guest">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="mobile" placeholder="Guest Mobile Number" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" id="altmobile" placeholder="Guest Alternate Mobile Number" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="address" placeholder="Permanent Guest Address" >
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="number" class="form-control" placeholder="Aadhar Number [ 12 Digit ]" oninput="javascript: if (this.value.length > 12) this.value = this.value.slice(0, 12);" />
                              </div>
                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <select id="selectO" class="form-control">
                                      <option  value="" selected>Select Company / School / College / Organisation</option>
                                      <option  value="">Company</option>
                                      <option  value="">School</option>
                                      <option  value="">College</option>
                                      <option  value="">Organisation</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="addressO" placeholder="Address Of Company / School / College / Organisation" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="bookdate" placeholder="Booking Date" >
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="number" class="form-control" id="bookamount" placeholder="Booking Amount" />
                              </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="checkindate" placeholder="Check In Date" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="checkoutdate" placeholder="Check Out Date" >
                            </div>
                        </div>


                         <div class="form-row">
                            <div class="form-group col-md-6">
                                  <input type="number" id="rent" class="form-control" placeholder="Rent Amount" />
                            </div>
                            <div class="form-group col-md-6">
                                  <input type="number" id="deposit" class="form-control" placeholder="Deposit Amount" />
                            </div>
                        </div>



                        <div class="form-row">


                           <div class="form-group col-md-6">
                                  <input type="number" id="maintenancecharge" class="form-control" placeholder="Maintenance Charges" />
                            </div>


                            <div class="form-group col-md-6">
                                  <input type="number" id="discount" class="form-control" placeholder="Discount Amount" />
                            </div>

                            
                        </div>


                        <div class="form-row">

                          <div class="form-group col-md-6">
                                 <select id="vehicle" class="form-control">
                                      <option  value="" selected>Select Vehicle</option>
                                      <option  value="">Two Wheeler</option>
                                      <option  value="">Three Wheeler</option>
                                      <option  value="">Four Wheeler</option>
                                      <option  value="">No Vehicle</option>
                                  </select>
                            </div>

                            <div class="form-group col-md-6">
                                  <input type="text" id="vehiclenumber" class="form-control" placeholder="Vehicle Number" />
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="gender" class="form-control">
                                      <option  value="" selected>Select Guest Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Other</option>
                                </select>
                            </div>



                            <!-- foreach ($_FILES['uploads']['name'] as $filename) {
                                echo '<li>' . $filename . '</li>';
                            } -->


                            <div class="form-group col-md-6">
                                <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='aadharuploads[]' type="file" id="aadharuploadid" accept="image/*" oninput="aadharupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload Aadhar [ Max 10 MB. ]
                                </label>
                                <label id="aadharuploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>

                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='iduploads[]' type="file" id="iduploadid" accept="image/*" oninput="idupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload ID [ Max 10 MB. ]
                                </label>
                                <label id="iduploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                            </div>
                            <div class="form-group col-md-6">
                                 <label class="btn btn-primary-rgba btn-block" >            
                                      <input name='selfieuploads[]' type="file" id="selfieuploadid" accept="image/*" oninput="selfieupdatelist()" style="display: none; " multiple/>
                                      <i class="feather icon-upload"></i> Upload Selfie [ Max 10 MB. ]
                                </label>
                                <label id="selfieuploadname" style=" float:center;  color: #007bff; margin:2%; display: none;"></label>
                            </div>
                        </div>


                        


<!-- onclick="Submit1();" id="submit1" -->
                        <button type="submit"  class="btn btn-primary-rgba" style="margin-top: 25px; display:inline-block; float: center;" ><i class="feather icon-chevrons-up"></i>Submit</button>


                    </form>


                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->





@endsection 
@section('script')

<script type="text/javascript">

   
   function aadharupdatelist() 
   {


      if( document.getElementById('aadharuploadid').files.length > 2 ){ alert("Max 2 Images Allowed For Aadhar."); }
      else
      {
              $('#aadharuploadname').hide();
              $('#aadharuploadname').empty();
              var input = document.getElementById('aadharuploadid');
              var output = document.getElementById('aadharuploadname');
              for (var i = 0; i < input.files.length; ++i) {
                  // children += '<li>' + input.files.item(i).name + '</li>';
                      var reader = new FileReader();
                      reader.onload = function(event) {
                        $($.parseHTML('<img class="uploads">')).attr('src', event.target.result).appendTo('#aadharuploadname');  }
                      reader.readAsDataURL(input.files[i]);
              }
              $('#aadharuploadname').show();
      }


   }



   function idupdatelist() 
   {

      if( document.getElementById('iduploadid').files.length > 1 ){ alert("Max 1 Image Allowed For ID."); }
      else
      {
              $('#iduploadname').hide();
              $('#iduploadname').empty();
              var input = document.getElementById('iduploadid');
              var output = document.getElementById('iduploadname');
              var children = "Selected Files For ID";
              for (var i = 0; i < input.files.length; ++i) {
                   var reader = new FileReader();
                    reader.onload = function(event) {
                      $($.parseHTML('<img class="uploads">')).attr('src', event.target.result).appendTo('#iduploadname');
                    }
                    reader.readAsDataURL(input.files[i]);
              }
              $('#iduploadname').show();
       }

    }


   function selfieupdatelist() 
   {

      if( document.getElementById('selfieuploadid').files.length > 1 ){ alert("Max 1 Image Allowed For Selfie."); }
      else
      {
              $('#selfieuploadname').hide();
              $('#selfieuploadname').empty();
              var input = document.getElementById('selfieuploadid');
              var output = document.getElementById('selfieuploadname');
              //var children = "Selected Files For selfie";      
              for (var i = 0; i < input.files.length; ++i) {
                  // children += '<li>' + input.files.item(i).name + '</li>';
                      var reader = new FileReader();
                      reader.onload = function(event) {
                        $($.parseHTML('<img class="uploads">')).attr('src', event.target.result).appendTo('#selfieuploadname');       
                      }
                      reader.readAsDataURL(input.files[i]);
              }
              $('#selfieuploadname').show();
      }


   }



</script>


@endsection 