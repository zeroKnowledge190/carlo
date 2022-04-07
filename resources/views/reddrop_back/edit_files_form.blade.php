@include('reddrop_back.admin_dashboard.header')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- <div class="sb-sidenav-menu-heading">Dashboard</div> -->
                        <a class="nav-link settings side-links" onclick="returnDashboard(event)">
                            <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div>
                                Dashboard
                        </a>
                        <a id="profile" class="nav-link collapsed side-links" data-toggle="collapse" data-target="#collapse-Profile" aria-expanded="false" aria-controls="collapseLayouts" onclick="viewProfile(event)">
                            <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                                Admin Profile
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapse-Profile" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link side-links edit-profile" onclick="viewProfile(event)"> - View Profile</a>
                                <a class="nav-link side-links edit-profile" onclick="updateProfile(event)"> - Edit Profile</a>
                            </nav>
                        </div>
                        
                                </div>
                            </div>
                        <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: <i class="fa fa-key"></i> </div>
                <i class="fa fa-user-circle"></i> {{ Auth::user()->hic_position }}
            </div>
        </nav>
    </div>
<div id="layoutSidenav_content">
@include('reddrop_back.admin_dashboard.edit_files')
@include('reddrop_back.admin_dashboard.back_footer')











