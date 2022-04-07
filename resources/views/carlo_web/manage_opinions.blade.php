<main class="hic-documents">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
    <li class="breadcrumb-item active">Hi, {{ Auth::user()->user_firstname }} {{ Auth::user()->user_lastname }} , Manage List of Opinions</li>
</ol>
<div class="row charts-docs">
    <div class="col-xl-12 docs-table">
        <div class="card mb-4">         
<div class="card-header docs-h">
    <i class="fa fa-list"></i>
        Opinions
            </div>
        <div class="row docs-spinner">
    </div> 
<div class="card-body docs-body">
    <form id="search-items-form">
        <div class="row">          
    </div>
</form>
<div class="table-responsive">
    <table id="opinions-table" class="table-docs table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="link-th">Date Created</th>
                <th class="link-th">Entity Name</th>
                <th class="link-th">Sender</th>
                <th class="link-th">Status</th>
                <th class="link-th">Action</th>
            </tr>
        </thead>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-group-xs > .btn, .btn-xs {
    padding: .25rem .4rem;
    font-size: .875rem;
    line-height: .5;
    border-radius: .2rem;
    }
    .link-th {
        font-size: 14px;
        font-family: "Montserrat", sans-serif;
    }
</style>
@include('fil_views.modals.add_navlink_modal') 
@include('fil_views.modals.edit_navlink_modal') 
@include('fil_views.modals.delete_navlink_modal') 
@include('fil_views.back_scripts.navbars_table')











