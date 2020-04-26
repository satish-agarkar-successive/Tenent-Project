 <!-- Start Navigationbar -->
 <div class="navigationbar">
        <div class="container-fluid">
            <nav class="horizontal-nav mobile-navbar fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="horizontal-menu">
                     <li class="scroll dropdown">
                        <a href="{{ url('/') }}/home" ><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span></a>
                    </li>
                    
                    <li class="scroll dropdown">
                        <a href="{{ url('/') }}/adminuser" ><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="layouts"><span>Users</span></a>
                    </li> 

                    <li class="scroll dropdown">
                        <a href="{{ url('/') }}/adminbusiness" ><img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Business</span></a>
                    </li> 

                    <li class="scroll dropdown">
                        <a href="{{ url('/') }}/adminproperty" ><img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="layouts"><span>Properties</span></a>
                    </li>

                    <li class="scroll dropdown">
                        <a href="{{ url('/') }}/adminlead" ><img src="assets/images/svg-icon/collapse.svg" class="img-fluid" alt="layouts"><span>Leads</span></a>
                    </li>

                    <li class="scroll dropdown">
                        <a href="{{ url('/') }}/adminguest" ><i class="feather icon-briefcase"></i><span>Guest</span></a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End NavigationBar -->