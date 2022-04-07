<main class="main-d" onLoad="mainD">
    <div class="container-fluid">        
        <ol class="breadcrumb mb-4 dash-active">
            <li class="breadcrumb-item active">Hi, {{ Auth::user()->user_firstname }} {{ Auth::user()->user_lastname }} Welcome to your Dashboard</li>
                </ol>
                @if(Auth::user()->user_account_type == 'Administrator')
                <div class="row cards">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><i class="fa fa-users"></i> Manage Netizens</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" style="cursor: pointer;" onclick="viewListOfUsers(event)">View Details</a>
                                <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>                   
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><i class="fa fa-building"></i> <a href="/list-of-entities" class="small text-white stretched-link" style="cursor: pointer; font-size: 16px;"> Manage Entities</a></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="/list-of-entities" class="small text-white stretched-link" style="cursor: pointer;">View Details</a>
                            <div class="small text-white"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>                   
                </div>
            </div>
        @endif
    </div>
</main> 
@include('fil_views.back_scripts.navbars_table')
@include('reddrop_back.back_scripts.manage_users')	
@include('reddrop_back.back_scripts.add_documents')





