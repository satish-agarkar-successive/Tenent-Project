@section('title') 
Tenant - Add Properties
@endsection 
@extends('layouts.main')
@section('style')

<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet" type="text/css">

@endsection 


<style type="text/css">
   .custom
   { margin-right: 10px; } 
</style>



@section('rightbar-content')


 <form method="POST" id="form" action="{{url('/')}}/addproperty" >

      {{ csrf_field() }}


<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Add Property</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                   <!--  <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }} -->

                        <div class="form-row">
                            <div class="form-group col-md-6">
                               
                                <input type="text" class="form-control" name="propertyname" id="propertyname" placeholder="Property Name" >
                            </div>
                            <div class="form-group col-md-6">
                               
                                <input type="text" class="form-control" name="buildingname" placeholder="Building Name" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                
                                <input type="text" class="form-control" name="address1" placeholder="Address Line 1" >
                            </div>
                            <div class="form-group col-md-6">
                                
                                <input type="text" class="form-control" name="address2" placeholder="Address Line 2" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <select name="state" class="form-control">
                                      <option  value="" selected>Select State</option>
                                      <option  value="">Maharashtra</option>
                                      <option  value="">Andhra Pradesh</option>
                                      <option  value="">Gujurat</option>
                                      <option  value="">Karnataka</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input name="city" id="city"  type="text" class=" city form-control" placeholder="City"required />
                            </div>
                            <div class="form-group col-md-3">
                                <input type="number" class="form-control" name="zip" placeholder="Zip" oninput="javascript: if (this.value.length > 6) this.value = this.value.slice(0, 6);">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="landmark" placeholder="Landmark" >
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                               
                                <select name="propertytype" class="form-control">
                                      <option  value="" selected>Select Property Type</option>
                                      <option  value="">Flat</option>
                                      <option  value="">Villa</option>
                                      <option  value="">Bungalow</option>
                                      <option  value="">Duplex</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                               
                                <select name="accommodationtype" class="form-control">
                                      <option  value="" selected>Select Accommodation Type</option>
                                      <option  value="">Guest House</option>
                                      <option  value="">Hostel</option>
                                      <option  value="">Apartment</option>
                                      <option  value="">Hotel</option>
                                      <option  value="">Resort</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                               
                                <select name="user" class="form-control">
                                      <option  value="" selected>Select User</option>
                                      <option  value="">User 1</option>
                                      <option  value="">User 2</option>
                                      <option  value="">User 3</option>
                                      <option  value="">user 4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select name="propgender" class="form-control">
                                      <option  value="" selected>Select Property Gender</option>
                                      <option  value="">Male</option>
                                      <option  value="">Female</option>
                                      <option  value="">Co-Head</option>
                                      <option  value="">Co-Living</option>
                                      <option  value="">Both</option>
                                </select>
                            </div>
                        </div>

                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->





<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" style="margin-top: 5%;" >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"   style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Select Amenities</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                    <!-- bifurcate form post by data present inside -->
                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="parking" value="parking" name="Amenities[]">
                                    <label class="custom-control-label" for="parking">Parking</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="laundry" value="laundry" name="Amenities[]">
                                    <label class="custom-control-label" for="laundry">Laundry</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="ac" value="ac" name="Amenities[]">
                                    <label class="custom-control-label" for="ac">Air Conditioning</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="balcony" value="balcony" name="Amenities[]">
                                    <label class="custom-control-label" for="balcony">Balcony</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="wifi" value="wifi" name="Amenities[]">
                                    <label class="custom-control-label" for="wifi">Wifi</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tv" value="tv" name="Amenities[]">
                                    <label class="custom-control-label" for="tv">Tele Vision [ T.V. ]</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dth" value="dth" name="Amenities[]">
                                    <label class="custom-control-label" for="dth">DTH / Cable</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="gym" value="gym" name="Amenities[]">
                                    <label class="custom-control-label" for="gym">GYM</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="spa" value="spa" name="Amenities[]">
                                    <label class="custom-control-label" for="spa">SPA</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="playground" value="playground" name="Amenities[]">
                                    <label class="custom-control-label" for="playground">Playground</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="pool" value="pool" name="Amenities[]">
                                    <label class="custom-control-label" for="pool">Pool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="security_guard" value="security_guard" name="Amenities[]">
                                    <label class="custom-control-label" for="security_guard">Security Guard</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cctv" value="cctv" name="Amenities[]">
                                    <label class="custom-control-label" for="cctv"> CCTV Camera </label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="hotwater" value="hotwater" name="Amenities[]">
                                    <label class="custom-control-label" for="hotwater">Hot Water</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shower" value="shower" name="Amenities[]">
                                    <label class="custom-control-label" for="shower">Shower</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Amenities[]">
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                        </div>

                    
                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->




<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar" style="margin-top: 5%;" >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30"  style="margin-bottom: 0%;"   style="margin-bottom: 0%;"  >

                <div class="card-header">
                    <h5 class="card-title">Select Furnishing</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">

                    <!-- bifurcate form post by data present inside -->
                    <form method="POST" action="{{url('/')}}/addproperties" >

                        {{ csrf_field() }}

                         <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="shoe" value="shoe"  name="Furnishing[]">
                                    <label class="custom-control-label" for="shoe">Shoe Rack</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tvstand" value="tvstand"  name="Furnishing[]">
                                    <label class="custom-control-label" for="tvstand">T.V Stand</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="dining" value="dining"  name="Furnishing[]">
                                    <label class="custom-control-label" for="dining">Dining Table</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="chair" value="chair"  name="Furnishing[]">
                                    <label class="custom-control-label" for="chair">Chair</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="stool" value="stool"  name="Furnishing[]">
                                    <label class="custom-control-label" for="stool">Stool</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="tea" value="tea"  name="Furnishing[]">
                                    <label class="custom-control-label" for="tea">Tea Pie</label>
                                </div>
                            </div>                            
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="sofa" value="sofa"  name="Furnishing[]">
                                    <label class="custom-control-label" for="sofa">Sofa</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="bed" value="bed"  name="Furnishing[]">
                                    <label class="custom-control-label" for="bed">Bed</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="cupboard" value="cupboard"  name="Furnishing[]">
                                    <label class="custom-control-label" for="cupboard">Cupboard</label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id=""  value="" name="Furnishing[]" >
                                    <label class="custom-control-label" for=""></label>
                                </div>
                            </div>
                        </div>


                </div>


            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->







<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"   >
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header" style="margin-bottom: 25px;">
                    <h5 class="card-title">Terms And Condition</h5>
                </div>
                <div class="card-body" style="margin-bottom: 25px;">
                        <div id="summernote"></div>
                </div>
            </div>
        </div>  
        <!-- End col -->
    </div> 
    <!-- End row -->
</div>
<!-- End Contentbar -->



<!-- Start Contentbar -->    
<div class="contentbar breadcrumbbar"  style="margin-top: 5%;"   >
    <button type="button" onclick="Submit1();" id="submit1" class="btn btn-primary-rgba btn-lg btn-block" style=" width: 100%; margin-top: 25px; display:inline-block; float: center;" ><i class=" custom feather icon-chevrons-up"></i>Submit All Details</button>
</div>
<!-- End Contentbar -->



</form>





@endsection 
@section('script')

<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-form-editor.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function() {
      document.getElementById("propertyname").focus(); 
    });


    function Submit1() 
    {

         alert( $('.card-block').text() );
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);


         document.getElementById('form').submit();
         
    }


</script>

@endsection 