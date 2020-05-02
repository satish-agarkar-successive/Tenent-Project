@section('title') 
Tenant - API
@endsection 
@extends('layouts.main')
@section('style')

@endsection 


<style type="text/css">
   .custom
   { margin-right: 10px; } 
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
                    <h5 class="card-title">SMS Test</h5>
                </div>

                <div class="card-body" style="margin-bottom: 25px;">


                    <form id="form" method="POST" action="{{url('/')}}/api" >

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <input type="number" class=" phone form-control" name="number" placeholder="Phone Number" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="message" placeholder="Message" >
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit"  id="submit1" class="btn btn-primary-rgba btn-lg btn-block"><i class=" custom feather icon-chevrons-up"></i>Send SMS</button>
                            </div>
                        </div>

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


    function testsms() 
    {
         $(".infobar-settings-sidebar-overlay").css({"background": "rgba(0,0,0,0.4)", "position": "fixed"});
         setInterval(function(){ 
         $(".infobar-settings-sidebar-overlay").css({"background": "transparent", "position": "initial"}); 
         }, 3000);
         document.getElementById('form').submit();
    }


</script>

@endsection 