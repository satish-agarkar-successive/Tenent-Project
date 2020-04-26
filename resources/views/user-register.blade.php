<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tenant - Register</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>



<style type="text/css">

        /* Chrome, Safari, Edge, Opera */
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




<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{url('/')}}/register" id="form">

                                        {{ csrf_field() }}


                                        <div class="form-head">
                                            <a href="{{url('/')}}" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                                        </div> 
                                        <h4 class="text-primary my-4">Sign Up !</h4>
                                        <div class="form-group">
                                            <input type="text" class=" onlyalphaspace form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Enter Username" required> 
                                        </div>
                                        <div class="form-group">

                                            <input type="number" id="phone" class="form-control" value="{{ old('phone') }}"  name="phone" placeholder="Enter Mobile Number" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"  required>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Type Password" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox text-left">
                                                    <input type="checkbox" class="custom-control-input" id="terms" name="term" >
                                                    <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Orbiter</label>
                                                </div>                                
                                            </div>
                                        </div>                      
 

                                        <!-- error messages -->
                                        <div class="alert alert-danger" align="left" id="errors" style = "display: none;"> </div>



                                      <button type="button" id="register" onclick="submitfun();" class="btn btn-success btn-lg btn-block font-18">Register</button>
                                    </form>
                                    <p class="mb-0 mt-3">Already have an account? <a href="{{url('/')}}">Log in</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start JS -->        
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- End js -->
</body>
</html>




<script type="text/javascript">





        $('.onlyalphaspace').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        return false;
        }
      });




    var  noerror = false;

    function submitfun() 
    {
        noerror = false;
        
        $("#errors").empty().hide();
        $("#errors").append("<ul>");


        if( $('#name').val() == "" ) 
            {  $("#errors").append("<li>Enter User Name.</li>").show();  noerror = true; }
        
        else if( $('#name').val().length > 200 ) 
            { $("#errors").append("<li>User Name Should Contain Max 200 Characters Only.</li>").show();  noerror = true; }

        

        if( $('#phone').val() == "" ) 
            {  $("#errors").append("<li>Enter Phone Number And It Should Be Numeric.</li>").show();  noerror = true; }

        else if( $('#phone').val().length < 10 ) 
            { $("#errors").append("<li>Phone Number Should Be 10 Digits Long.</li>").show();  noerror = true; }


        if( $('#password').val() == "" ) {  $("#errors").append("<li>Enter Password.</li>").show();  noerror = true; }
        
        else if( $('#password').val().length < 8 ) 
            {  $("#errors").append("<li>Password Should be 8 Characters Long.</li>").show();  noerror = true; }

        if( $('#password_confirmation').val() == "" ) 
            {  $("#errors").append("<li>Enter Confirmation Password.</li>").show();  noerror = true; }
        
        else if( $('#password_confirmation').val().length < 8 ) 
            {  $("#errors").append("<li>Confirmation Password Should be 8 Characters Long.</li>").show();  noerror = true; }

        if( $('#password').val() != $('#password_confirmation').val()) 
        {  $("#errors").append("<li>Password Confirmation Does Not Match.</li>").show();  noerror = true; }

        if( ! $('#terms').is(':checked') ) {  $("#errors").append("<li>Please Confirm Terms And Conditions.</li>").show();  noerror = true; }
        
        $("#errors").append("</ul>");

        if( noerror == false ) { submitajax(); } ;   

    }

    function submitajax()
    {
          document.getElementById("register").disabled = true;
          $("#register").html("Please Wait....");

          $.ajax({
          type: "POST",
          url: "register",
          data: new FormData($('#form')[0]),
          dataType:"json",
          cache:false,
          processData:false,
          contentType:false,
          success: function(result) { window.location = "/home"; },
          error: function(json) 
          {
             document.getElementById("register").disabled = false;
             $("#register").html("Register");


              if(json.status === 422) 
                {
                    $("#errors").empty();
                    $("#errors").append("<ul>");

                    var errors = json.responseJSON;

                    $.each(errors['errors'], function (key, value) {  $("#errors").append("<li>"+value+"</li>");  });

                    $("#errors").append("</ul>").show();

                } 
                if(json.status === 500)
                { 
                    $("#errors").empty();
                    $("#errors").append("<ul>");
                    $("#errors").append("<li>Server Error Occured.</li>");
                    $("#errors").append("</ul>").show();  
                }
                else { $("#errors").hide();  }

          }
       });

    }

</script>
