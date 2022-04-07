<script>

function viewListOfApplications(event){
    event.preventDefault();
        $.ajax({
        url: '{{ url("/applications") }}',
        method: 'GET',
        cache: false,
        success: function(html){
            $('.main-d').html(html);
            $('.docs-body').hide();
            $('.docs-spinner').html('<div class="row spinner-red-docs"><div class="col-md-12"><img class="displayed" src="/reddrop_back/dist/assets/img/ajax-loader-circle.gif" /></div>');  
            setTimeout(loadApplicationsDataTable, 1000);
        }
    });
}

function loadApplicationsDataTable(){
    $('.spinner-red-docs').hide();
    $('.docs-body').show();
    $('#applications-table').DataTable().destroy();
        table = $('#applications-table').DataTable({
            "searching": true,
            "processing": false,
            "serverSide": false,
            "paginate": true,
            "responsive": false,
            "paging": true,
            "pageLength": 5,
            "ajax": {
                'url': '{{ url("/applications-datatables") }}',
                "data" : {
                    // "onlineFrom": fromVal,
                    // "onlineTo": toVal,
                    // "_token"	: "{{ csrf_token() }}"
	    		}
            },
            columnDefs: [
                { className: 'dt-body-center', targets: 4 },
                { targets: 4, orderable: false },
                { width: 80, targets: 0 },
                { width: 120, targets: 2 },
                { width: 120, targets: 3 }
            ],
            
            columns:[
            {
                data: 'date_created',
                name: 'date_created'
            },
            {
                data: 'entity_name',
                name: 'entity_name'
            },
            {
                data: 'created_by',
                name: 'created_by'
            },
            {
                data: 'application_status',
                name: 'application_status'
            },
            {
                data: 'action',
                name: 'action'
            }
        ]
    });   
}

</script>