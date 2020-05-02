@section('title')
Tenant - Leads
@endsection
@extends('layouts.main')




@section('rightbar-content')


<!-- Start Contentbar -->
<div class="contentbar breadcrumbbar">
  <!-- Start row -->
  <div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-body">

          <div style="margin-bottom: 25px;">

            <h5 class="card-title" style="display:inline-block; float: left">Leads Details</h5>
            <br>

          </div>

          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="edit-btn">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username , Mobile , Email,Address</th>
                  <th>Property Name</th>
                  <th>Type of Room</th>
                  <th>[Rupees] Budget</th>
                  <th>Date Of Enquiry</th>
                  <th>Followup Date</th>
                  <th>Followup Remark</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>


@foreach($lead as $l)

<tr>

<td>{{$l->id}} </td>
<td>{{ $l->name }}<br> <a href="tel:{{ $l->mobile }}">{{$l->mobile}}</a> <br>  <a href="mailto:{{$l->email}}?Subject=Tenant Management" target="_top">{{$l->email}}</a><br> {{$l->address}}</td>
<td>{{ $l->property_name }} </td>
<td>{{ $l->type_of_room }} </td>
<td><i class="fa fa-inr" style="margin: 5px;"></i>{{ $l->budget }}</td>
<td>{{ $l->date_of_enquiry }} </td>
<td>{{ $l->followup_date}}</td>
<td>{{$l->followup_remark}}</td>
<td>
  <div class="btn-group btn-group-sm" style="float: none;">
    <button type="button" data-id="{{$l->id}}" onclick="getdetails( {{$l->id}} )" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></button>
  </div>
</td>

</tr>
@endforeach
                             
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="align-self: center;" > {{  $lead->links() }} </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->




<!-- Modal: editmodal -->

<!-- sidebar for view user -->


<div id="infobar-viewlead-sidebar" class="infobar-settings-sidebar">
  <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
    <h4>View Leads</h4><a href="javascript:void(0)" id="infobar-viewlead-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
  </div>
  <div class="infobar-settings-sidebar-body">
    <div class="custom-mode-setting">


      <form>

        <div class="row align-items-center pb-3">
          <input id="username" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class="row align-items-center pb-3">
          <input id="phone" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class="row align-items-center pb-3">
          <input id="email" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class="row align-items-center pb-3">
          <textarea id="address" placeholder="Address" class="form-control" style="height:100px; background-color: #fff;" readonly /></textarea>
        </div>

        <div class="row align-items-center pb-3">
          <input id="property_name" class="form-control" style="background-color: #fff;" readonly />
          </select>
        </div>

        <div class="row align-items-center pb-3">
          <input id="type_of_room" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class="row align-items-center pb-3">
          <input id="budget" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class=" row align-items-center pb-3">
          <input type="text" id="date_of_enquiry" class="form-control" style="background-color: #fff;" readonly/>
        </div>

        <div class="row align-items-center pb-3">
          <input id="followup_date" class="form-control" style="background-color: #fff;" readonly />
        </div>

        <div class="row align-items-center pb-3">
          <input id="followup_remark" class="form-control" style="background-color: #fff;" readonly />
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


  $("#infobar-viewlead-close").on("click", function(e) {
        $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"});
        $("#infobar-viewlead-sidebar").removeClass("sidebarshow");
    });  


  //this call is happening in core.js for edit[class]  button click listener 
  function getdetails(id) {


    $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});


    $.ajax({
      type: "GET",
      url: '/viewlead',
      async:'false',
      data: {
        'id': id
      },
      dataType: "json",
      success: function(result) {

        $("#infobar-viewlead-sidebar").addClass("sidebarshow");

        var user = result.data;
        console.log(user);

        $('#username').val(user.name);
        $('#phone').val(user.mobile);
        $('#email').val(user.email);
        $('#address').val(user.address);
        $('#type_of_room').val(user.room_type_id);
        $('#property_name').val(user.property_id);
        $('#budget').val(user.budget);
        $('#date_of_enquiry').val(user.enquiry_date);
        $('#followup_date').val(user.followup_date);
        $('#followup_remark').val(user.followup_remark);
        

      }
    });

  }

</script>

@endsection