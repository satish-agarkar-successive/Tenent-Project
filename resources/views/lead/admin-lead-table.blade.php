@section('title')
Tenant - Users
@endsection
@extends('layouts.main')

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

  input:checked+.slider {
    background-color: #2196F3;
  }

  input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked+.slider:before {
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

  /* Pagination style */
  .pagination {
    margin: 20px 0;
    overflow: hidden;
    position: relative;
    font: 300;
  }

  .pagination li {
    float: left;
  }

  .pagination ul {
    float: left;
    left: 50%;
    position: relative;
  }
</style>
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


                <?php $x = 1; ?>
                @foreach($user as $u)

                <tr>
                  <td>{{$u->id}} </td>
                  <td>{{ $u -> name }}<br>{{ $u -> mobile }}<br>{{ $u -> email }} <br> {{$u -> address}}</td>
                  <td>{{ $u -> property_name }} </td>
                  <td>{{ $u -> type_of_room }} </td>
                  <td><i class="fa fa-inr" style="margin: 5px;"></i>{{ $u -> budget }} </td>
                  <td>{{ $u -> date_of_enquiry }} </td>
                  <td>
                    {{ $u -> followup_date}}
                  </td>
                  <td>{{$u -> followup_remark}}</td>
                  <td>
                    <div class="btn-group btn-group-sm" style="float: none;">

                      <button type="button" data-id="{{$u->id}}" href="javascript:void(0)" class=" edit  tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-eye"></span></button>

                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="row pagination" style="align-self: center;">{{ $user->links() }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End row -->
</div>
<!-- End Contentbar -->


<!-- Modal: editmodal -->

<!-- sidebar for view user -->


<div id="infobar-edituser-sidebar" class="infobar-settings-sidebar">
  <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
    <h4>View Leads</h4><a href="javascript:void(0)" id="infobar-edituser-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
  </div>
  <div class="infobar-settings-sidebar-body">
    <div class="custom-mode-setting">


      <form id="edituser_form" method="POST" action="/edituser">

        {{ csrf_field() }}

        <div class="row align-items-center pb-3">

          <input name="user_id" id="edit_user_id" type="text" hidden />

          <input name="username" id="edit_username" type="text" class=" onlyalphaspace form-control" placeholder="User Name" readonly="readonly" />

        </div>

        <div class="row align-items-center pb-3">
          <input name="user_mobile" id="edit_phone" type="number" class=" phone  form-control" placeholder="Mobile" readonly="readonly" />
        </div>

        <div class="row align-items-center pb-3">
          <input name="email" id="edit_email" type="email" class="form-control" placeholder="abc@xyz.com" readonly="readonly" />
        </div>



        <!-- <div class="row align-items-center pb-3">
          <select name="user_gender" id="edit_gender" class=" gender form-control" required>
          </select>
        </div> -->


        <div class="row align-items-center pb-3">
          <textarea name="address" id="edit_address" type="text" placeholder="Address" class=" address form-control" style="height:100px;" readonly="readonly" /></textarea>
        </div>


        <div class="row align-items-center pb-3">
          <input name="property_name" id="property_name" type="text" class=" phone  form-control" placeholder="Property Name" readonly="readonly" />
          </select>
        </div>

        <div class="row align-items-center pb-3">

          <input name="type_of_room" id="type_of_room" type="text" class=" phone  form-control" placeholder="Type of Room" readonly="readonly" />
        </div>


        <div class="row align-items-center pb-3">

          <input name="budget" id="budget" type="number" class=" number form-control" placeholder="Budget"  readonly="readonly" />
        </div>

        <div class=" row align-items-center pb-3">

          <input type="text" name="date_of_enquiry" id="date_of_enquiry" class="form-control" placeholder="Date of Enquiry" readonly="readonly"/>

        </div>

        <div class="row align-items-center pb-3">
          <input name="followup_date" id="followup_date" type="text" class=" dealvalue form-control" placeholder="Followup Date" readonly="readonly" />
        </div>


        <div class="row align-items-center pb-3">
          <input name="followup_remark" id="followup_remark" type="text" class=" dealvalue form-control" placeholder="Followup Remark" readonly="readonly" />
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
  function getdetails(id) {
    $.ajax({
      type: "GET",
      url: '/viewuser',
      data: {
        'id': id
      },
      dataType: "json",
      success: function(result) {

        $(".infobar-settings-sidebar-overlay").css({
          "background": "rgba(0,0,0,0.4)",
          "position": "fixed"
        });
        $("#infobar-edituser-sidebar").addClass("sidebarshow");

        var user = result.data;
        console.log(user);
        $('#edit_user_id').val(user.id);
        $('#edit_username').val(user.name);
        $('#edit_phone').val(user.mobile);
        $('#edit_email').val(user.email);
        $('#edit_gender').val(user.gender);
        $('#edit_address').val(user.address);
        $('#type_of_room').val(user.type_of_room);
        $('#property_name').val(user.property_name);
        $('#budget').val(user.budget);
        //  var date_qnq= date.ToString("MM/dd/yyyy");
        $('#date_of_enquiry').val(user.date_of_enquiry);
        $('#followup_date').val(user.followup_date);
        $('#followup_remark').val(user.followup_remark);
        

      }
    });

  }

</script>

@endsection