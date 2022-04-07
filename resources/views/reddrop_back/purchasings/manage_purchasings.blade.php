<main class="hic-documents">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
    <li class="breadcrumb-item active">RD Purchasing</li>
</ol>

<div class="row charts-docs">
    <div class="col-xl-12 docs-table">
        <div class="card mb-4">         
<div class="card-header docs-h">
    <i class="fa fa-table mr-1"></i>
        List of Items
            </div>
        <div class="row docs-spinner">
    </div> 
<div class="card-body docs-body">
    <form id="search-items-form">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Blood Group</label>
                        <select id="select-item" name="item_name" class="form-control select-item">
                            <option></option>
                            <option value="All">All</option>
                            @foreach ($bloodGroups as $key => $value)
                            <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <span id="blood-group-select-text"></span>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Region</label>
                        <select id="select-region" name="region" class="form-control select-region">
                            <option></option>
                            @foreach ($hicRegions as $region)
                            <option value="{{ $region->region }}">{{ $region->region }}</option>
                            @endforeach
                        </select>
                        <span id="hic-region-select-text"></span>
                    </div>
                </div>
            
            <div class="col-md-3">
        <button id="user-search-btn" type="button" class="btn btn-success btn-sm" onclick="searchItems(event)"><i class="fa fa-search"></i> Search</button>
    </div>
</div>
</form>

<div class="table-responsive">
    <table id="hic-purchasings-datatable" class="table-docs table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Company Name</th>
                <th>Region</th>
                <th>U. Price / Bag</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
        </thead>
    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('reddrop_back.modals.purchasings.add_purchasing')








