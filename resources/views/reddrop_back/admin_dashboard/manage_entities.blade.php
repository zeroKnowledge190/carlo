<main class="hic-documents">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
    <li class="breadcrumb-item active">Hi, {{ Auth::user()->user_firstname }} {{ Auth::user()->user_lastname }}, Manage Entities</li>
</ol>
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible" style="width: 58em;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif
<div class="row">
    <div class="col-md-3">
        <a href="/add_entity"><button class="btn btn-primary btn-xs" type="button"><i class="fa fa-plus"></i> Add Entity</button></a>
    </div>
</div>
<div class="row charts-docs">
    <div class="col-xl-12 docs-table">
        <div class="card mb-4">         
<div class="card-header docs-h">
    <i class="fa fa-file"></i>
        List of Entities
            </div>
        <div class="row docs-spinner">
    </div> 
<div class="card-body docs-body">
    <form id="search-items-form">
        <div class="row">          
    </div>
</form>
<div class="table-responsive">
    <table id="entities-datatable" class="table-docs table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="ads-th">ID No.</th>
                <th class="ads-th">Name</th>
                <th class="ads-th">Email</th>
                <th class="ads-th">Action</th>
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
    .content-th {
        font-size: 13px;
        font-family: "Montserrat", sans-serif;
        background-color: #ECF0F1;
    }
    
    #user-firstname {
        margin-top: -12px;
    }
    
    .n-image {
        background-color: #BDC3C7;    
    }
    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    var eIdNo = '';
    function deleteThisEntity(entIdNo, button){
        eIdNo = entIdNo;        
        $.ajax({
        url: "{{ url('/delete-entities') }}/"+ entIdNo ,
        method:"GET",
        data: {
                _token: function(){
                    return "{{ csrf_token() }}"
                },
            eIdNo
        },
        contentType: false,
        cache: false,
        success:function(html)
        {  
            window.location.href = '/delete-entities/'+ entIdNo;
        }
        });
    }
    
    loadEntitiesDataTable();
    
    function loadEntitiesDataTable(){
    $('#entities-datatable').DataTable().destroy();
        table = $('#entities-datatable').DataTable({
            "searching": true,
            "processing": false,
            "serverSide": false,
            "paginate": true,
            "responsive": false,
            "paging": true,
            "pageLength": 5,
            "ajax": {
                'url': '{{ url("/entities-datatables") }}',
                "data" : {
                    "_token"	: "{{ csrf_token() }}"
	    		}
            },
            columnDefs: [
                { className: 'dt-body-center', targets: 3 },
                { targets: 3, orderable: false },
                { width: 80, targets: 0 },
                { width: 100, targets: 1 },
                { width: 100, targets: 2 },
                { width: 80, targets: 3 },
            ],
            
            columns:[
            {
                data: 'ent_id_no',
                name: 'ent_id_no'
            },
            {
                data: 'entity_name',
                name: 'entity_name'
            },
            {
                data: 'entity_email',
                name: 'entity_email'
            },
            {
                data: 'action',
                name: 'action'
            }
        ]
    });   
}
</script>











