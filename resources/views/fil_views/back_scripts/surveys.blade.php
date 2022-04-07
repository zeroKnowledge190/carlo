<script type="text/javascript">

$('.submitSurveys').on('click', function(){

    const sDateCreated = $('.s-date-created').val();
    const sDescription = $('.s-description').val();
    const sIntention = $('.s-intention').val();
    const sTokenVal = $('.token-val').val();

    const checkQFirst1 = $('#sQFirst1:input:radio').is(':checked');
	const checkQFirst2 = $('#sQFirst2:input:radio').is(':checked');
	const checkQFirst3 = $('#sQFirst3:input:radio').is(':checked');

    const checkQSecond1 = $('#sQSecond1:input:radio').is(':checked');
	const checkQSecond2 = $('#sQSecond2:input:radio').is(':checked');
	const checkQSecond3 = $('#sQSecond3:input:radio').is(':checked');

    const checkQThird1 = $('#sQThird1:input:radio').is(':checked');
	const checkQThird2 = $('#sQThird2:input:radio').is(':checked');
	const checkQThird3 = $('#sQThird3:input:radio').is(':checked');
    
    const checkQFourth1 = $('#sQFourth1:input:radio').is(':checked');
	const checkQFourth2 = $('#sQFourth2:input:radio').is(':checked');
	const checkQFourth3 = $('#sQFourth3:input:radio').is(':checked');
    
    const checkQFifth1 = $('#sQFifth1:input:radio').is(':checked');
	const checkQFifth2 = $('#sQFifth2:input:radio').is(':checked');
	const checkQFifth3 = $('#sQFifth3:input:radio').is(':checked');

    const sStatus = $('.s-status').val();
    
    if (!sDateCreated){
        $('#s-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.s-date-created').bind('click', function(){
        $('#s-date-created-text').text('');
        $('#submit-s-btn').attr('disabled', false);
    });

    if (!sDescription){
        $('#s-description-text').text('* Description is Required').css('color', '#DC3545');
    }

    $('.s-description').bind('click', function(){
        $('#s-description-text').text('');
        $('#submit-s-btn').attr('disabled', false);
    });

    if (!sIntention){
        $('#s-intention-text').text('* Purpose or Intention is Required').css('color', '#DC3545');
    }

    $('.s-intention').bind('click', function(){
        $('#s-intention-text').text('');
        $('#submit-s-btn').attr('disabled', false);
    });

    var sQuestionFirst = '';
    
    if (checkQFirst1 == true){
        var inputQFirst1 = $('#sQFirst1:input[name="question1"]');
		sQuestionFirst = inputQFirst1.val();
        console.log('first1: ', sQuestionFirst)

    } else if (checkQFirst2 == true){
		var inputQFirst2 = $('#sQFirst2:input[name="question1"]');
		sQuestionFirst = inputQFirst2.val();
        console.log('first2: ', sQuestionFirst)
		
	} else if(checkQFirst3 == true){
        var inputQFirst3 = $('#sQFirst3:input[name="question1"]');
		sQuestionFirst = inputQFirst3.val();
        console.log('first3: ', sQuestionFirst)

    } else {
	    $('#s-q-first-text').text('* This field is required').css('color', '#D24D57');
	}

    $('.s-q-first1').on('click', function(){
        var inputQFirst1 = $('#sQFirst1:input[name="question1"]');
		sQuestionFirst = inputQFirst1.val();
        console.log('first: ', sQuestionFirst)
        $('#s-q-first-text').text('');
    });

    $('.s-q-first2').on('click', function(){
        var inputQFirst2 = $('#sQFirst2:input[name="question1"]');
		sQuestionFirst = inputQFirst2.val();
        $('#s-q-first-text').text('');
    });

    $('.s-q-first3').on('click', function(){
        var inputQFirst2 = $('#sQFirst3:input[name="question1"]');
		sQuestionFirst = inputQFirst2.val();
        $('#s-q-first-text').text('');
    });

    var sQuestionSecond = '';
    
    if (checkQSecond1 == true){
        var inputQSecond1 = $('#sQSecond1:input[name="question2"]');
		sQuestionSecond = inputQSecond1.val();
        console.log('first1: ', sQuestionSecond)

    } else if (checkQSecond2 == true){
		var inputQSecond2 = $('#sQSecond2:input[name="question2"]');
		sQuestionSecond = inputQSecond2.val();
        console.log('first2: ', sQuestionSecond)
		
	} else if(checkQSecond3 == true){
        var inputQSecond3 = $('#sQSecond3:input[name="question2"]');
		sQuestionSecond = inputQSecond3.val();
        console.log('first3: ', sQuestionSecond)

    } else {
	    $('#s-q-second-text').text('* This Field is required').css('color', '#D24D57');
	}

    $('.s-q-second1').on('click', function(){
        var inputQSecond1 = $('#sQSecond1:input[name="question2"]');
		sQuestionSecond = inputQSecond1.val();
        console.log('sec: ', sQuestionSecond)
        $('#s-q-second-text').text('');
    });

    $('.s-q-second2').on('click', function(){
        var inputQFirst2 = $('#sQSecond2:input[name="question2"]');
		sQuestionFirst = inputQSecond2.val();
        $('#s-q-second-text').text('');
    });

    $('.s-q-second3').on('click', function(){
        var inputQSecond2 = $('#sQSecond3:input[name="question2"]');
		sQuestionSecond = inputQSecond2.val();
        $('#s-q-second-text').text('');
    });

    var sQuestionThird = '';
    
    if (checkQThird1 == true){
        var inputQThird1 = $('#sQThird1:input[name="question3"]');
		sQuestionThird = inputQThird1.val();
        console.log('first1: ', sQuestionThird)

    } else if (checkQThird2 == true){
		var inputQThird2 = $('#sQThird2:input[name="question3"]');
		sQuestionThird = inputQThird2.val();
        console.log('first2: ', sQuestionThird)
		
	} else if(checkQThird3 == true){
        var inputQThird3 = $('#sQThird3:input[name="question3"]');
		sQuestionThird = inputQThird3.val();
        console.log('first3: ', sQuestionThird)

    } else {
	    $('#s-q-third-text').text('* This Field is required').css('color', '#D24D57');
	}

    $('.s-q-third1').on('click', function(){
        var inputQThird1 = $('#sQThird1:input[name="question3"]');
		sQuestionThird = inputQThird1.val();
        console.log('sec: ', sQuestionThird)
        $('#s-q-third-text').text('');
    });

    $('.s-q-third2').on('click', function(){
        var inputQThird2 = $('#sQThird2:input[name="question3"]');
		sQuestionThird = inputQThird2.val();
        $('#s-q-third-text').text('');
    });

    $('.s-q-third3').on('click', function(){
        var inputQThird2 = $('#sQThird3:input[name="question3"]');
		sQuestionThird = inputQThird2.val();
        $('#s-q-third-text').text('');
    });

    var sQuestionFourth = '';
    
    if (checkQFourth1 == true){
        var inputQFourth1 = $('#sQFourth1:input[name="question4"]');
		sQuestionFourth = inputQFourth1.val();
        console.log('first1: ', sQuestionFourth)

    } else if (checkQFourth2 == true){
		var inputQFourth2 = $('#sQFourth2:input[name="question4"]');
		sQuestionFourth = inputQFourth2.val();
        console.log('first2: ', sQuestionFourth)
		
	} else if(checkQFourth3 == true){
        var inputQFourth3 = $('#sQFourth3:input[name="question4"]');
		sQuestionFourth = inputQFourth3.val();
        console.log('first3: ', sQuestionFourth)

    } else {
	    $('#s-q-fourth-text').text('* This Field is required').css('color', '#D24D57');
	}

    $('.s-q-fourth1').on('click', function(){
        var inputQFourth1 = $('#sQFourth1:input[name="question4"]');
		sQuestionFourth = inputQFourth1.val();
        console.log('sec: ', sQuestionFourth)
        $('#s-q-fourth-text').text('');
    });

    $('.s-q-fourth2').on('click', function(){
        var inputQFourth2 = $('#sQFourth2:input[name="question4"]');
		sQuestionFourth = inputQFourth2.val();
        $('#s-q-fourth-text').text('');
    });

    $('.s-q-fourth3').on('click', function(){
        var inputQFourth2 = $('#sQFourth3:input[name="question4"]');
		sQuestionFourth = inputQFourth2.val();
        $('#s-q-fourth-text').text('');
    });

    var sQuestionFifth = '';
    
    if (checkQFifth1 == true){
        var inputQFifth1 = $('#sQFifth1:input[name="question5"]');
		sQuestionFifth = inputQFifth1.val();
        console.log('first1: ', sQuestionFifth)

    } else if (checkQFifth2 == true){
		var inputQFifth2 = $('#sQFifth2:input[name="question5"]');
		sQuestionFifth = inputQFifth2.val();
        console.log('1first2: ', sQuestionFifth)
		
	} else if(checkQFifth3 == true){
        var inputQFifth3 = $('#sQFifth3:input[name="question5"]');
		sQuestionFifth = inputQFifth3.val();
        console.log('first3: ', sQuestionFifth)

    } else {
	    $('#s-q-fifth-text').text('* This field is required').css('color', '#D24D57');
	}

    $('.s-q-fifth1').on('click', function(){
        var inputQFifth1 = $('#sQFifth1:input[name="question1"]');
		sQuestionFifth = inputQFifth1.val();
        console.log('first: ', sQuestionFifth)
        $('#s-q-fifth-text').text('');
    });

    $('.s-q-fifth2').on('click', function(){
        var inputQFifth2 = $('#sQFifth2:input[name="question5"]');
		sQuestionFifth = inputQFifth2.val();
        $('#s-q-fifth-text').text('');
    });

    $('.s-q-fifth3').on('click', function(){
        var inputQFifth2 = $('#sQFifth3:input[name="question5"]');
		sQuestionFifth = inputQFifth2.val();
        $('#s-q-fifth-text').text('');
    });

    if (sDateCreated && sDescription && sIntention) {
        saveSurveys();
    }
         
        function saveSurveys(){
            $.ajax({
                url: "{{ url('/save-surveys') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                    sDateCreated,
                    sDescription,
                    sIntention,
                    sQuestionFirst,
                    sQuestionSecond,
                    sQuestionThird,
                    sQuestionFourth, 
                    sQuestionFifth,  
                    sTokenVal,             
                    sStatus
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                    if (response == 'notAuth'){
                    $('.s-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag Login muna o magregistro</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Survey Form.</div></div></div>'); 
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