<script type="text/javascript">

$('.submitOpinion').on('click', function(){
   
    const oDateCreated = $('.o-date-created').val();
    const oEntityName = $('.o-entity').val();
    const oOpinion = $('.o-opinion-body').val();
    const oStatus = $('.o-status').val();
    const oTokenVal = $('.token-val').val();
    
    if (!oDateCreated){
        $('#o-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.o-date-created').bind('click', function(){
        $('#o-date-created-text').text('');
        $('#submit-o-btn').attr('disabled', false);
    });

    if (!oEntityName){
        $('#o-entity-text').text('* Entity name is Required').css('color', '#DC3545');
    }

    $('.o-entity').bind('click', function(){
        $('#o-entity-text').text('');
        $('#submit-o-btn').attr('disabled', false);
    });

    if (!oOpinion){
        $('#o-opinion-body-text').text('* Opinion is Required').css('color', '#DC3545');
    }

    $('.o-opinion-body').bind('click', function(){
        $('#o-opinion-body-text').text('');
        $('#submit-o-btn').attr('disabled', false);
    });


    if (oDateCreated && oEntityName && oOpinion) {
            saveOpinions();
        }
         
        function saveOpinions(){
            $.ajax({
                url: "{{ url('/save-opinions') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                oDateCreated,
                oEntityName,
                oOpinion,
                oStatus,
                oTokenVal
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                if (response == 'notAuth'){
                    $('.o-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag Login muna o magregistro</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Opinyon.</div></div></div>'); 
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