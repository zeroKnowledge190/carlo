<script type="text/javascript">

$('.submitApplications').on('click', function(){
    
    const aDateCreated = $('.a-date-created').val();
    const aEntityName = $('.a-entity').val();
    const aSubject = $('.a-subject').val();
    const aDear = $('.a-dear').val();
    const aStatus = $('.a-status').val();
    const aTokenVal = $('.token-val').val();
   
    if (!aDateCreated){
        $('#a-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.a-date-created').bind('click', function(){
        $('#a-date-created-text').text('');
        $('#submit-a-btn').attr('disabled', false);
    });

    if (!aEntityName){
        $('#a-entity-text').text('* Entity name is Required').css('color', '#DC3545');
    }

    $('.a-entity').bind('click', function(){
        $('#a-entity-text').text('');
        $('#submit-a-btn').attr('disabled', false);
    });

    if (!aSubject){
        $('#a-subject-text').text('* Subject is Required').css('color', '#DC3545');
    }

    $('.a-subject').bind('click', function(){
        $('#a-subject-text').text('');
        $('#submit-a-btn').attr('disabled', false);
    });

    if (!aDear){
        $('#a-dear-text').text('* This field is Required').css('color', '#DC3545');
    }

    $('.a-dear').bind('click', function(){
        $('#a-dear-text').text('');
        $('#submit-a-btn').attr('disabled', false);
    });

    if (aDateCreated && aEntityName && aSubject) {
            saveApplications();
        }
         
        function saveApplications(){
            $.ajax({
                url: "{{ url('/save-applications') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                aDateCreated,
                aEntityName,
                aSubject,
                aDear,
                aTokenVal,
                aStatus
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                    if (response == 'notAuth'){
                    $('.a-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag Login muna o magregistro</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                    $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Aplikasyon.</div></div></div>'); 
                    setTimeout(goToMain, 3000);
                    }
                }
            });
        }

        function goToMain(){
            window.location.href = "/";
        }

        function goToIndex(){
            window.location.href = "/";
        }

});

</script>