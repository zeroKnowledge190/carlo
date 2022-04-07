<script type="text/javascript">

$('.submitQuestion').on('click', function(){
    
    const qDateCreated = $('.q-date-created').val();
    const qEntityName = $('.q-entity').val();
    const qQuestion = $('.q-question-body').val();
    const qStatus = $('.q-status').val();
    const qTokenVal = $('.token-val').val();
    
    if (!qDateCreated){
        $('#q-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.q-date-created').bind('click', function(){
        $('#q-date-created-text').text('');
        $('#submit-q-btn').attr('disabled', false);
    });

    if (!qEntityName){
        $('#q-entity-text').text('* Entity name is Required').css('color', '#DC3545');
    }

    $('.q-entity').bind('click', function(){
        $('#q-entity-text').text('');
        $('#submit-q-btn').attr('disabled', false);
    });

    if (!qQuestion){
        $('#q-question-body-text').text('* Question is Required').css('color', '#DC3545');
    }

    $('.q-question-body').bind('click', function(){
        $('#q-question-body-text').text('');
        $('#submit-q-btn').attr('disabled', false);
    });


    if (qDateCreated && qEntityName && qQuestion) {
            saveQuestions();
        }
         
        function saveQuestions(){
           
            $.ajax({
                url: "{{ url('/save-questions') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                qDateCreated,
                qEntityName,
                qQuestion,
                qStatus,
                qTokenVal
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                if (response == 'notAuth'){
                    $('.q-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag Login muna o magregistro</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                    $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Tanong.</div></div></div>'); 
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