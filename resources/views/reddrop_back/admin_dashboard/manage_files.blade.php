<main class="hic-documents">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
    <li class="breadcrumb-item active">Hi, {{ Auth::user()->user_firstname }} {{ Auth::user()->user_lastname }} , Manage CARLO Attachments</li>
</ol>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible" style="width: 58em;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('message') }}
        </div>
    @endif
<b>Manage Attachments</b>
<div class="row charts-docs">
    <div class="col-xl-12 docs-table">
        <div class="card mb-4">         
<div class="card-header docs-h">
    <i class="fa fa-file"></i>
        List of Files
            </div>
        <div class="row docs-spinner">
    </div> 
<div class="card-body docs-body">
    <form id="search-items-form">
        <div class="row">          
    </div>
</form>
<div class="table-responsive">
    <table id="files-datatable" class="table-docs table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="ads-th">Name</th>
                <th class="ads-th">File</th>
                <th class="ads-th">Status</th>
                <th class="ads-th">Sender</th>
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
    var fIdNo = '';
    function deleteThisAdd(fileIdNo, button){
        fIdNo = fileIdNo;
        console.log('id: ', fileIdNo);
        
        $.ajax({
        url: "{{ url('/delete-carlo-files') }}/"+ fileIdNo ,
        method:"GET",
        data: {
                _token: function(){
                    return "{{ csrf_token() }}"
                },
            imgIdNo
        },
        contentType: false,
        cache: false,
        success:function(html)
        {  
            window.location.href = '/delete-carlo-files/'+ imageIdNo;
        }
        });
    }
    
    loadFilesDataTable();
    
    function loadFilesDataTable(){
    // $('.spinner-red-docs').hide();
    // $('.docs-body').show();
    $('#files-datatable').DataTable().destroy();
        table = $('#files-datatable').DataTable({
            "searching": true,
            "processing": false,
            "serverSide": false,
            "paginate": true,
            "responsive": false,
            "paging": true,
            "pageLength": 5,
            "ajax": {
                'url': '{{ url("/files-datatables") }}',
                "data" : {
                    // "onlineFrom": fromVal,
                    // "onlineTo": toVal,
                    // "_token"	: "{{ csrf_token() }}"
	    		}
            },
            columnDefs: [
                { className: 'dt-body-center', targets: 4 },
                { targets: 4, orderable: false },
                { width: 100, targets: 0 },
                { width: 100, targets: 1 },
                { width: 100, targets: 2 },
                { width: 40, targets: 3 },
                { width: 80, targets: 4 }
            ],
            
            columns:[
            {
                data: 'file_name',
                name: 'file_name'
            },
            {
                data: 'hic_documents',
                name: 'hic_documents'
            },
            {
                data: 'file_status',
                name: 'file_status'
            },
            {
                data: 'created_by',
                name: 'created_by'
            },
            {
                data: 'action',
                name: 'action'
            }
        ]
    });   
}
</script>
<!-- @include('fil_views.modals.add_navlink_modal') 
@include('fil_views.modals.edit_navlink_modal') 
@include('fil_views.modals.delete_navlink_modal') 
@include('fil_views.back_scripts.navbars_table') -->
@include('reddrop_back.modals.add_documents')
@include('reddrop_back.modals.edit_documents')
@include('reddrop_back.modals.view_documents')
@include('fil_views.back_scripts.manage_contents_scripts')










