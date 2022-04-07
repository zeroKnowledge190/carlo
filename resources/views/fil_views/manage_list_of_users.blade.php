<main class="hic-documents">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
            <li class="breadcrumb-item active">Manage Netizens</li>
    </ol>
<br>
<div class="row">
    <div class="col-md-6" id="trips">
        <!-- <button class="btn btn-success btn-sm" onclick="showRegistrationForm(event)"><i class="fa fa-plus-circle"></i> Add User</button>                          -->
    </div>
</div>
<div class="row charts-docs">
    <div class="col-xl-12 docs-table">
        <div class="card mb-4">         
<div class="card-header docs-h">
    <i class="fa fa-list"></i>
        List of Netizens
            </div>
        <div class="row users-spinner">
    </div> 
<div class="card-body docs-body">
    <form id="search-items-form">
        <div class="row">          
    </div>
</form>
<div class="table-responsive">
    <table id="users-datatable" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="link-th">Name</th>
                <th class="link-th">Email</th>
                <th class="link-th">Contact No.</th>
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
</style>
@include('fil_views.modals.register_user_modal') 
@include('fil_views.modals.edit_user_modal') 
@include('fil_views.modals.delete_user_modal') 
<!-- @include('reddrop_back.modals.edit_user') -->











