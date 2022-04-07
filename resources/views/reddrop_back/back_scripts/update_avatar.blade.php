<script>
    function goToUpdateAvatar(hicIdNo, button){
        $('#avatarModal').modal('show');

        $('#edit-hic-id-no').attr('value', button.getAttribute('data-hic-id-no')); 
        $('#view-profile-avatar').attr('src', button.getAttribute('data-hic-profile-avatar'));

        $('#avatar-edit-form').on('submit', function(event){
        event.preventDefault();
        $('#edit-avatar-btn').attr('disabled', true);

        $('#edit-input-avatar').bind('click', function(){
            $('#edit-avatar-btn').attr('disabled', false);
            $('#edit-input-avatar-text').text('');
        });

        $.ajax({
        url: "{{ url('/rd-edit-avatar') }}",
        method:"POST",
        data:new FormData(this),
        contentType: false,
        cache: false,
        dataType: 'JSON',
        processData: false,
        success:function(data)
        {
            console.log(data.errorStatus);
            if (data.errorStatus == 1){
                $('#edit-input-avatar-text').text('An error was found while uploading the image. Check file type or maybe the file size exceeded.').css('color', '#D24D57');            
            } else {
                $('.avatar-alert-div').html('<div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Profile avatar was changed</div>'); 
                setTimeout(hideAvatarModal, 3000);
            }

        function hideAvatarModal(html){
            $('#avatarModal').modal('hide');
            $.ajax({
            url: "{{ url('/view-profile') }}",
            method: 'GET',
            cache: false,
            success: function(html){
                $('.main-d').html(html);
            }
            });

            }
        }
        });
    });

}
        
</script>
