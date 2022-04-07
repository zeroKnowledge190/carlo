<script type="text/javascript">
    
    function viewListOfUsers(event){
        $.ajax({
            url: '{{ url("/manage-users") }}',
            method: 'GET',
            cache: false,
            success: function(html){
                $('.main-d').html(html);
                $('.docs-body').hide();
                $('.users-spinner').html('<div class="row spinner-red-users"><div class="col-md-12"><img class="displayed" src="/reddrop_back/dist/assets/img/ajax-loader-circle.gif" /></div>');  
                setTimeout(loadUsersDataTable, 1000);
            }
        });   
    }

    function searchUsers(event){
        event.preventDefault();
        loadUsersDataTable();
    }

    function loadUsersDataTable(){        
        $('.spinner-red-users').hide();
        $('.card-body').show();
        $('.table').show();
        $('#users-datatable').DataTable().destroy();
        table = $('#users-datatable').DataTable({
            
            "searching": true,
            "processing": false,
            "serverSide": false,
            "paginate": true,
            "responsive": false,
            "paging": true,
            "pageLength": 10,
            "ajax": {
                'url': "{{ url('/users-datatables') }}",
                "data"  : {
                    "hicType": $(".select-hic").val(),
                    "_token"	: "{{csrf_token()}}"
	    		}
            },
            columnDefs: [
                { width: 220, targets: 1, orderable: true },
                { width: 110, targets: 2, orderable: true },
                { width: 110, targets: 4, orderable: false },
                { className: 'dt-body-center', targets: 4 }
            ],
            columns:[
            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'hic_contact_no',
                name: 'hic_contact_no'
            },
            {
                data: 'hic_user_status',
                name: 'hic_user_status'
            },
            {
                data: 'action',
                name: 'action'
            },
            ]
    
        });
    }

    function editUser(userId, editUserBtn, button){

        $('#editUsersModal').modal('show');
        
        if (editUserBtn !== 'Set'){
            $('#users-l').text('Edit User');
            $('.u-btn').html('<button id="edit-user-btn" type="button" name="Save" class="btn btn-success btn-sm pull-right s-btn">Save</button>')
            $('.f-user').attr('id', 'edit-user-form');

            $('.row-user-name').html('<div class="col-md-3"><div class="form-group"><label>Name</label><h6 id="e-hic-name"></h6><input type="hidden" id="e-hic-id" name="id"><span id="e-hic-name-text"></span></div></div><div class="col-md-3"><div class="form-group"><label>Email</label><h6 id="e-hic-email"></h6></div></div><div class="col-md-3"><div class="form-group"><label>Date Registered</label><h6 id="e-hic-created-at"></h6></div></div>');
            $('.row-user-status-l').html('<div class="col-md-3"><div class="form-group"><label>Status</label></div></div>');
            $('.row-user-status').html('<div class="col-md-8 radio-s"><div class="form-group"><input id="e-radio-new" type="radio" class="radio" value="New Account" name="hic_user_status"> New Account <input id="e-radio-pending" class="radio" type="radio" value="Pending" name="hic_user_status"> Pending <input id="e-radio-verified" class="radio" type="radio" value="Verified" name="hic_user_status"> Verified <span id="e-user-status-text"></span></div></div>');
            
            document.querySelector("#e-hic-name").innerText = button.getAttribute("data-hic-name");
            document.querySelector("#e-hic-email").innerText = button.getAttribute("data-hic-email");
            document.querySelector("#e-hic-created-at").innerText = button.getAttribute("data-hic-created-at");
            document.querySelector("#e-hic-id").innerText = button.getAttribute("data-hic-id");
            $('#e-hic-id').attr('value', button.getAttribute("data-hic-id"));
            const userStatus = button.getAttribute("data-hic-user-status");
            console.log('s: ', userStatus);

            if (userStatus == 'New Account'){
                $('#e-radio-new').prop('checked', true);
            } else if (userStatus == 'Pending'){
                $('#e-radio-pending').prop('checked', true);
            } else if (userStatus == 'Verified') {
                $('#e-radio-verified').prop('checked', true);
            }
            
            const hicId = $('#edit-user-form input[name="id"]');
            const eHicId = hicId.val();
            
            var getUserStatus = $('#e-radio-new:input[name="hic_user_status"]').val();
            var getUserStatus = $('#e-radio-pending:input[name="hic_user_status"]').val();                   
            var getUserStatus = $('#e-radio-verified:input[name="hic_user_status"]').val();
            
            $('#edit-user-btn').on('click', function(){
            
            const eNewAcc = $('#e-radio-new:input:radio').is(':checked');
            const ePending = $('#e-radio-pending:input:radio').is(':checked');
            const eVerified = $('#e-radio-verified:input:radio').is(':checked');
            
            if (eNewAcc == true){
                var getUserStatus = $('#e-radio-new:input[name="hic_user_status"]').val();
            } else if (ePending == true){
                var getUserStatus = $('#e-radio-pending:input[name="hic_user_status"]').val();  
            } else if (eVerified == true){                 
                var getUserStatus = $('#e-radio-verified:input[name="hic_user_status"]').val();
            }

            if (getUserStatus){
                $.ajax({
                    url: '{{ url("/edit-users") }}',
                    method: 'POST',
                    data: { 
                        _token: function() {
                        return "{{csrf_token()}}"
                    },
                    eHicId,
                    getUserStatus,
                    },
                    cache: false,
                    success: function (html){
                        $('.edit-alert-m').html('<div class="row msg-alert"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> User was Updated</div></div></div>');
                        setTimeout(goToListOfUsers, 1000);
                    }
                });
            } else {
                $('.edit-alert-m').html('<div class="row msg-alert"><div class="col-md-12 alert-margin"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> There was an error updating the User</div></div></div>');
                setTimeout(goToListOfUsers, 1000);
            }

            });
        }
    }

var dUserId = '';
function deleteUserModal(button){
   
    $('#deleteUserModal').modal('show');
    // document.querySelector("#d-user-name").innerText = button.getAttribute("data-function");
    // document.querySelector("#d-fullname").innerText = fullName;
    // dUserId = button.getAttribute("data-e-hic-id");

    $('#delete-user-button').on('click', function(){
    const dUserId = button.getAttribute("data-e-hic-id");
    console.log(dUserId);
    console.log('idx: ', dUserId);
    if (dUserId){
        callDeleteUser();
    }
    function callDeleteUser(){
        $.ajax({
            url: '{{ url("/delete-users") }}',
            method: 'POST',
            data: { 
                _token: function() {
                return "{{csrf_token()}}"
            },
            dUserId,
            },
            cache: false,
            success: function (html){
                $('.delete-alert-m').html('<div class="row delete-alert-m"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div>A User was deleted</div></div></div>');
                setTimeout(showListOfUsers, 1000);
            }
        });
       
        }
    });

}

function goToListOfUsers(){
    $('#deleteUserModal').mocal('hide');
    $('#editUsersModal').modal('hide');
    $('.msg-alert').remove();
    $('.delete-alert-m').remove();
        $.ajax({
            url: '{{ url("/manage-users") }}',
            method: 'GET',
            cache: false,
            success: function(html){
                $('.main-d').html(html);
                $('.docs-body').hide();
                $('.users-spinner').html('<div class="row spinner-red-users"><div class="col-md-12"><img class="displayed" src="/reddrop_back/dist/assets/img/ajax-loader-circle.gif" /></div>');  
                setTimeout(loadUsersDataTable, 1000);
        }
    });   
}

function showListOfUsers(){
    $('#deleteUserModal').modal('hide');
    $('#editUsersModal').modal('hide');
    $('.msg-alert').remove();
    $('.delete-alert-m').remove();
        $.ajax({
            url: '{{ url("/manage-users") }}',
            method: 'GET',
            cache: false,
            success: function(html){
                $('.main-d').html(html);
                $('.docs-body').hide();
                $('.users-spinner').html('<div class="row spinner-red-users"><div class="col-md-12"><img class="displayed" src="/reddrop_back/dist/assets/img/ajax-loader-circle.gif" /></div>');  
                setTimeout(loadUsersDataTable, 1000);
        }
    });   
}

</script>