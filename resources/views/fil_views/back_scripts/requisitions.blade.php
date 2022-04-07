<script type="text/javascript">

$('.submitRequisition').on('click', function(){
     
    const rDateCreated = $('.r-date-created').val();
    const rEntityName = $('.r-entity').val();
    const rFullName = $('.r-fullname').val();
    const rJobTitle = $('.r-job-title').val();
    const rCompanyName = $('.r-company-name').val();
    const rEmailAddress = $('.r-email-address').val();
    const rReqBody = $('.r-requisition-body').val();
    const rLocation= $('.r-location').val();
    
    const checkReq1 = $('#req1:input:radio').is(':checked');
	const checkReq2 = $('#req2:input:radio').is(':checked');
	const checkReq3 = $('#req3:input:radio').is(':checked');
	const checkReq4 = $('#req4:input:radio').is(':checked');
	const checkReq5 = $('#req5:input:radio').is(':checked');

    const rOthers= $('.r-others').val();

    const checkP1 = $('#p1:input:radio').is(':checked');
	const checkP2 = $('#p2:input:radio').is(':checked');
	const checkP3 = $('#p3:input:radio').is(':checked');
	const checkP4 = $('#p4:input:radio').is(':checked');
	const checkP5 = $('#p5:input:radio').is(':checked');
    
    const rTokenVal = $('.token-val').val();
    const rDueDate = $('.r-due-date').val();
    const rDefinition = $('.r-definition').val();
    const rStatus = $('.r-status').val();
    
    if (!rDateCreated){
        $('#r-date-created-text').text('* Date created is Required').css('color', '#DC3545');
    }

    $('.r-date-created').bind('click', function(){
        $('#r-date-created-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rEntityName){
        $('#r-entity-text').text('* Entity name is Required').css('color', '#DC3545');
    }

    $('.r-entity').bind('click', function(){
        $('#r-entity-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rFullName){
        $('#r-fullname-text').text('* Full Name is Required').css('color', '#DC3545');
    }

    $('.r-fullname').bind('click', function(){
        $('#r-fullname-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });


    if (!rJobTitle){
        $('#r-job-title-text').text('* Job Title is Required').css('color', '#DC3545');
    }

    $('.r-job-title').bind('click', function(){
        $('#r-job-title-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rCompanyName){
        $('#r-company-name-text').text('* Company Name is Required').css('color', '#DC3545');
    }

    $('.r-company-name').bind('click', function(){
        $('#r-company-name-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rEmailAddress){
        $('#r-email-address-text').text('* Email Address is Required').css('color', '#DC3545');
    }

    $('.r-email-address').bind('click', function(){
        $('#r-email-address-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rReqBody){
        $('#r-requisition-body-text').text('* Requisition Body is Required').css('color', '#DC3545');
    }

    $('.r-requisition-body').bind('click', function(){
        $('#r-requisition-body-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rLocation){
        $('#r-location-text').text('* Location is Required').css('color', '#DC3545');
    }

    $('.r-location').bind('click', function(){
        $('#r-location-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    var rRequestType = '';
    
    if (checkReq1 == true){
        var inputReqType = $('#req1:input[name="request_type"]');
		rRequestType = inputReqType.val();

    } else if (checkReq2 == true){
		var inputReqType = $('#req2:input[name="request_type"]');
		rRequestType = inputReqType.val();
		
	} else if(checkReq3 == true){
        var inputReqType = $('#req3:input[name="request_type"]');
		rRequestType = inputReqType.val();

    } else if(checkReq4 == true){
        var inputReqType = $('#req4:input[name="request_type"]');
		rRequestType = inputReqType.val();
    
    } else if(checkReq5 == true){
        var inputReqType = $('#req5:input[name="request_type"]');
		rRequestType = inputReqType.val();
    } else {
	    $('#r-request-type-text').text('* Request is required').css('color', '#D24D57');
	}

    $('.r-req1').on('click', function(){
        var inputReqType = $('#req1:input[name="request_type"]');
		rRequestType = inputReqType.val();
        $('#r-request-type-text').text('');
    });

    $('.r-req2').on('click', function(){
        var inputReqType = $('#req2:input[name="request_type"]');
		rRequestType = inputReqType.val();
        $('#r-request-type-text').text('');
    });

    $('.r-req3').on('click', function(){
        var inputReqType = $('#req3:input[name="request_type"]');
		rRequestType = inputReqType.val();
        $('#r-request-type-text').text('');
    });

    $('.r-req4').on('click', function(){
        var inputReqType = $('#req4:input[name="request_type"]');
		rRequestType = inputReqType.val();
        $('#r-request-type-text').text('');
    });

    $('.r-req5').on('click', function(){
        var inputReqType = $('#req5:input[name="request_type"]');
		rRequestType = inputReqType.val();
        $('#r-request-type-text').text('');
    });

    if (!rOthers){
        $('#r-others-text').text('* Others is Required').css('color', '#DC3545');
    }

    $('.r-others').bind('click', function(){
        $('#r-others-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    var rPriorityVal = '';
    
    if (checkP1 == true){
        var inputP = $('#p1:input[name="priority"]');
		rPriorityVal = inputP.val();

    } else if (checkP2 == true){
		var inputP = $('#p2:input[name="priority"]');
		rPriorityVal = inputP.val();
		
	} else if(checkP3 == true){
        var inputP = $('#p3:input[name="priority"]');
		rPriorityVal = inputP.val();

    } else if(checkP4 == true){
        var inputP = $('#p4:input[name="priority"]');
		rPriorityVal = inputP.val();
    
    } else if(checkP5 == true){
        var inputP = $('#p5:input[name="priority"]');
		rPriorityVal = inputP.val();
    } else {
	    $('#r-priority-text').text('* This field is required').css('color', '#D24D57');
	}

    $('.r-p1').on('click', function(){
        var inputPriority = $('#p1:input[name="priority"]');
		rPriorityVal = inputPriority.val();
        $('#r-priority-text').text('');
    });

    $('.r-p2').on('click', function(){
        var inputPriority = $('#req2:input[name="priority"]');
		rPriorityVal = inputPriority.val();
        $('#r-priority-text').text('');
    });

    $('.r-p3').on('click', function(){
        var inputPriority = $('#p3:input[name="priority"]');
		rPriorityVal = inputPriority.val();
        $('#r-priority-text').text('');
    });

    $('.r-p4').on('click', function(){
        var inputPriority = $('#p4:input[name="priority"]');
		rPriorityVal = inputPriority.val();
        $('#r-priority-text').text('');
    });

    $('.r-p5').on('click', function(){
        var inputPriority = $('#p5:input[name="priority"]');
		rPriorityVal = inputPriority.val();
        $('#r-priority-text').text('');
    });

    if (!rDueDate){
        $('#r-due-date-text').text('* Due date is Required').css('color', '#DC3545');
    }

    $('.r-due-date').bind('click', function(){
        $('#r-due-date-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });

    if (!rDefinition){
        $('#r-definition-text').text('* Definition is Required').css('color', '#DC3545');
    }

    $('.r-definition').bind('click', function(){
        $('#r-definition-text').text('');
        $('#submit-r-btn').attr('disabled', false);
    });
    
    if (rDateCreated && rEntityName && rReqBody) {
        saveRequisitions();
    }
         
        function saveRequisitions(){
            $.ajax({
                url: "{{ url('/save-requisitions') }}",
                method: 'POST',
                data: { 
                    _token: function() {
                    return "{{ csrf_token() }}"
                },
                    rDateCreated,
                    rEntityName,
                    rFullName,
                    rJobTitle,
                    rEmailAddress,
                    rCompanyName,
                    rReqBody, 
                    rLocation,
                    rRequestType,
                    rOthers,
                    rPriorityVal,  
                    rDueDate,
                    rDefinition, 
                    rTokenVal,                
                    rStatus
                },
                cache: false,
                dataType: 'JSON',
                success:function(response){
                if (response == 'notAuth'){
                    $('.r-auth').html('<div class="row"><div class="col-md-12"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> Hindi na submit ang inyong form. Maari ay mag registro muna</div></div></div>')
                    setTimeout(goToIndex, 5000);
                } else {
                    $('.q-alert').html('<div class="row"><div class="col-md-12 alert-margin"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Salamat, nasubmit na ang inyong Hinihingi.</div></div></div>'); 
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