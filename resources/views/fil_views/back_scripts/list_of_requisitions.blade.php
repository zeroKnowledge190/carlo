<script>

function viewListOfRequisitions(event){
    event.preventDefault();
        $.ajax({
        url: '{{ url("/requisitions") }}',
        method: 'GET',
        cache: false,
        success: function(html){
            $('.main-d').html(html);
            $('.docs-body').hide();
            $('.docs-spinner').html('<div class="row spinner-red-docs"><div class="col-md-12"><img class="displayed" src="/reddrop_back/dist/assets/img/ajax-loader-circle.gif" /></div>');  
            setTimeout(loadRequisitionsDataTable, 1000);
        }
    });
}

function loadRequisitionsDataTable(){
    $('.spinner-red-docs').hide();
    $('.docs-body').show();
    $('#requisitions-table').DataTable().destroy();
        table = $('#requisitions-table').DataTable({
            "searching": true,
            "processing": false,
            "serverSide": false,
            "paginate": true,
            "responsive": false,
            "paging": true,
            "pageLength": 5,
            "ajax": {
                'url': '{{ url("/requisitions-datatables") }}',
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
                data: 'req_status',
                name: 'req_status'
            },
            {
                data: 'action',
                name: 'action'
            }
        ]
    });   
}

</script>