<script type="text/javascript">

$('.submitPetitions').on('click', function(){
     
    const pDateCreated = $('.p-date-created').val();
    const pEntityName = $('.p-entity').val();
    const pSubject = $('.p-subject').val();
    const pIntention = $('.p-intention').val();
    const pSolution = $('.p-solution').val();
    const pStatus = $('.p-status').val();
    const pTokenVal = $('.token-val').val();

    if (!pDateCreated){
        $('#p-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.p-date-created').bind('click', function(){
        $('#p-date-created-text').text('');
        $('#submit-p-btn').attr('disabled', false);
    });

    if (!pEntityName){
        $('#p-entity-text').text('* Entity name is Required').css('color', '#DC3545');
    }

    $('.p-entity').bind('click', function(){
        $('#p-entity-text').text('');
        $('#submit-p-btn').attr('disabled', false);
    });

    if (!pSubject){
        $('#p-subject-text').text('* Subject is Required').css('color', '#DC3545');
    }

    $('.p-subject').bind('click', function(){
        $('#p-subject-text').text('');
        $('#submit-p-btn').attr('disabled', false);
    });

    if (!pIntention){
        $('#p-intention-text').text('* Purpose or Intention is Required').css('color', '#DC3545');
    }

    $('.p-intention').bind('click', function(){
        $('#p-intention-text').text('');
        $('#submit-p-btn').attr('disabled', false);
    });

    if (!pSolution){
        $('#p-solution-text').text('* Solution is Required').css('color', '#DC3545');
    }

    $('.p-solution').bind('click', function(){
        $('#p-solution-text').text('');
        $('#submit-p-btn').attr('disabled', false);
    });


    if (pDateCreated && pEntityName && pSubject && pIntention) {
            savePetitions();
        }
         
        function savePetitions(){
            $.ajax({
                url: "{{ url('/save-petitions') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                pDateCreated,
                pEntityName,
                pSubject,
                pIntention,
                pSolution,
                pTokenVal,
                pStatus,
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                if (response == 'notAuth'){
                    $('.p-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag Login muna o magregistro</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                    $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Petisyon.</div></div></div>'); 
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