<script>

function submitUpdatedProfile(event){
    event.preventDefault();
    $('#update-profile-btn').attr('disabled', true);
    
    const uHicIdNo = $('#update-profile-form input[name="hic_id_no"]');
    const u_hic_id_no = uHicIdNo.val();
    const u_user_firstname = $('.u-user-firstname').val();
    const u_user_lastname = $('.u-user-lastname').val();
    const u_user_middlename = $('.u-user-middlename').val();
    const u_user_suffix = $('.u-user-suffix').val();
    const u_civil_status = $('.u-civil-status').val();
    const u_religion = $('.u-religion').val();
    const u_user_age = $('.u-user-age').val();
    const u_birth_month = $('.u-birth-month').val();
    const u_birth_day = $('.u-birth-day').val();
    const u_birth_year = $('.u-birth-year').val();
    const u_birthplace = $('.u-birthplace').val();

    const u_hic_contact_no = $('.u-contact-no').val();
	var contactNoLength = $('#hic-admin-contact-no').val().length;
    
    const u_position_applied = $('.u-position-applied').val();
    const u_job_type = $('.u-job-type').val();
    const u_area_of_specialty = $('.u-area-of-specialty').val();
    const u_years_of_exp = $('.u-years-of-exp').val();

    const u_passport_number = $('.u-passport-number').val();
    const u_passport_exp_month = $('.u-passport-exp-month').val();
    const u_passport_exp_day = $('.u-passport-exp-day').val();
    const u_passport_exp_year = $('.u-passport-exp-year').val();
    
    const u_prc_number = $('.u-prc-number').val();
    const u_prc_exp_month = $('.u-prc-exp-month').val();
    const u_prc_exp_day = $('.u-prc-exp-day').val();
    const u_prc_exp_year = $('.u-prc-exp-year').val();
    
    const u_hic_name = $('.u-hic-name').val();
    const u_region = $('.u-region').val();
    const u_country = $('.u-country').val();
    const uHicStreet = $('#update-profile-form input[name="hic_street"]');
    const u_hic_street = uHicStreet.val();

    const uHicVillage = $('#update-profile-form input[name="hic_village"]');
    const u_hic_village = uHicVillage.val();

    const uHicCity = $('#update-profile-form input[name="hic_city"]');
    const u_hic_city = uHicCity.val();

    const uHicProvince = $('#update-profile-form input[name="hic_province"]');
    const u_hic_province = uHicProvince.val();

    if(!u_user_firstname){
        $('#update-hic-firstname-text').text('Firstname is Required').css('color', '#D24D57');
    }

    $('.u-user-firstname').bind('click', function(){
        $('#update-hic-firstname-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_user_lastname){
        $('#update-hic-lastname-text').text('Lastname is Required').css('color', '#D24D57');
    }

    $('#user-lastname-input').bind('click', function(){
        $('#update-hic-lastname-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_user_age){
        $('#update-user-age-text').text('Age is Required').css('color', '#D24D57');
    }

    $('.u-user-age').bind('click', function(){
        $('#update-user-age-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_civil_status){
        $('#update-civil-status-text').text('Civil Status Required').css('color', '#D24D57');
    }

    $('.u-civil-status').bind('click', function(){
        $('#update-civil-status-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_religion){
        $('#update-user-religion-text').text('Religion Required').css('color', '#D24D57');
    }

    $('.u-religion').bind('click', function(){
        $('#update-user-religion-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_birth_month){
        $('#update-user-birthmonth-text').text('Month Required').css('color', '#D24D57');
    }

    $('.u-birth-month').bind('click', function(){
        $('#update-user-birthmonth-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_birth_day){
        $('#update-user-birthday-text').text('Day Required').css('color', '#D24D57');
    }

    $('.u-birth-day').bind('click', function(){
        $('#update-user-birthday-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_birth_year){
        $('#update-user-birthyear-text').text('Year Required').css('color', '#D24D57');
    }

    $('.u-birth-year').bind('click', function(){
        $('#update-user-birthyear-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_birthplace){
        $('#update-user-birthplace-text').text('Place of Birth Required').css('color', '#D24D57');
    }

    $('.u-birthplace').bind('click', function(){
        $('#update-user-birthplace-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    const checkMale = $('#male:input:radio').is(':checked');
	const checkFemale = $('#female:input:radio').is(':checked');
    
    var gender = '';
    if (checkMale == true){
        var inputGender = $('#male:input[name="user_gender"]');
		gender = inputGender.val();

    } else if (checkFemale == true){
		var inputGender = $('#female:input[name="user_gender"]');
		gender = inputGender.val();
		
	} else {
	    $('#genderText').text('This field is required').css('color', '#D24D57');
	}

    $('.c-male').on('click', function(){
        var inputGender = $('#male:input[name="user_gender"]');
		gender = inputGender.val();
        $('#genderText').text('');
    });

    $('.c-female').on('click', function(){
        var inputGender = $('#female:input[name="user_gender"]');
		gender = inputGender.val();
        $('#genderText').text('');
    });

    if(!u_hic_contact_no){
        $('#update-contact-no-text').text('Contact No. is Required').css('color', '#D24D57');
    }

    $('.u-contact-no').bind('click', function(){
        $('#update-contact-no-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_contact_no){
		$('#update-hic-contact-no-text').text('Mobile number is Required').css('color', '#D24D57');
	} else if (isMobile(u_hic_contact_no) == false){
        $('#update-contact-no-text').text('Mobile Number is Invalid').css('color', '#D24D57');  
		return false;
	} else if (contactNoLength > 11){
        $('#update-contact-no-text').text('Mobile Number should not exceed 11 digits').css('color', '#D24D57');  
		return false;     
	} else {
		var u_get_hic_contact_no = u_hic_contact_no;
	}

    if(!u_position_applied){
        $('#update-position-applied-text').text('Position Applied is Required').css('color', '#D24D57');
    }

    $('.u-position-applied').bind('click', function(){
        $('#update-position-applied-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_job_type){
        $('#update-job-type-text').text('Job Category is Required').css('color', '#D24D57');
    }

    $('.u-job-type').bind('click', function(){
        $('#update-job-type-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_job_type){
        $('#update-job-type-text').text('Job Category is Required').css('color', '#D24D57');
    }

    $('.u-job-type').bind('click', function(){
        $('#update-job-type-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_area_of_specialty){
        $('#update-area-of-specialty-text').text('Area of Specialty is Required').css('color', '#D24D57');
    }

    $('.u-area-of-specialty').bind('click', function(){
        $('#update-area-of-specialty-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_years_of_exp){
        $('#update-years-of-exp-text').text('Years of Experience is Required').css('color', '#D24D57');
    }

    $('.u-years-of-exp').bind('click', function(){
        $('#update-years-of-exp-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_name){
        $('#update-hic-name-text').text('Name of Company is Required').css('color', '#D24D57');
    }

    $('.u-hic-name').bind('click', function(){
        $('#update-hic-name-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_region){
        $('#update-region-text').text('Region is Required').css('color', '#D24D57');
    }

    $('.u-region').bind('click', function(){
        $('#update-region-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_country){
        $('#update-country-text').text('Country is Required').css('color', '#D24D57');
    }

    $('.u-country').bind('click', function(){
        $('#update-region-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_street){
        $('#update-hic-street-text').text('Street is Required').css('color', '#D24D57');
    }

    $('#hic-street-input').bind('click', function(){
        $('#update-hic-street-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_village){
        $('#update-hic-village-text').text('Village is Required').css('color', '#D24D57');
    }

    $('#hic-village-input').bind('click', function(){
        $('#update-hic-village-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_city){
        $('#update-hic-city-text').text('City is Required').css('color', '#D24D57');
    }

    $('#hic-city-input').bind('click', function(){
        $('#update-hic-city-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });

    if(!u_hic_province){
        $('#update-hic-province-text').text('Province is Required').css('color', '#D24D57');
    }

    $('#hic-province-input').bind('click', function(){
        $('#update-hic-province-text').text('');
        $('#update-profile-btn').attr('disabled', false);
    });
    
    if(u_hic_name && u_user_firstname && u_user_lastname && u_get_hic_contact_no && u_hic_street && u_hic_village && u_hic_city && u_hic_province && u_position_applied && u_job_type && u_years_of_exp){
        saveUpdatedProfile();
    }   
    
    function saveUpdatedProfile() {
        $.ajax({
            url: "{{ url('/save-updated-profile') }}",
            method:"POST",
            data: { 
		        _token: function() {
                    return "{{ csrf_token() }}"
                },
            u_hic_id_no,
            u_hic_name,
            u_user_firstname,
            u_user_middlename,
            u_user_lastname,
            u_user_suffix,
            gender,
            u_civil_status,
            u_religion,
            u_user_age,
            u_birth_month,
            u_birth_day,
            u_birth_year,
            u_birthplace,
            u_get_hic_contact_no,
            u_hic_street,
            u_hic_village,
            u_hic_city,
            u_hic_province,
            u_position_applied,
            u_job_type,
            u_area_of_specialty,
            u_years_of_exp,
            u_passport_number,
            u_passport_exp_month,
            u_passport_exp_day,
            u_passport_exp_year,
            u_prc_number,
            u_prc_exp_month,
            u_prc_exp_day,
            u_prc_exp_year,
            u_region,
            u_country
	        },
            cache: false,
            dataType: 'JSON',
            success:function(response)
            {
                if (response.errorStatus == 1){
                    $('.profile-img').html('<div class="row update-alert"><div class="col-md-12 alert-margin"><div class="alert alert-danger"><div class="fa fa-spinner fa-spin"></div> An error was found upon updating your profile.</div></div>'); 
                } else {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(".main-profile").offset().top
                    }, 1000);
                    $('#update-profile-btn').attr('disabled', false);

                    $('.alert-space').html('<div class="row"><div class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Your Profile was updated.</div></div>'); 
                    setTimeout(viewProfile, 3000);
                }
            }
        });
    }

    function viewProfile(){
        $('.update-alert').hide();
        $.ajax({
            url: "{{ url('/view-profile') }}",
            method: 'GET',
            cache: false,
            success: function(html){
                $('.main-profile').html(html);
            }
        });
    }
}

function isMobile(u_hic_contact_no){
	var phone_pattern = /^([0-9]{11})|(\([0-9]{0}\))/;
	 
    if(phone_pattern.test(u_hic_contact_no)){
		return true;
	} else {
		    return false;
	    }
}

function saveUpdatedUsernameAndPassword(event){
	event.preventDefault();
	$('#update-button').attr('disabled', true);
    $('input').bind('click', function(){
        $('.inputError').text('');
		$('#update-button').attr('disabled', false);
	});

	const inputEmail = $('#update-form input[name="email"]');
	const email = inputEmail.val();
    
	if (!email){
		$('#email').after('<span id="forError" class="inputError" style="color: red;">This Field is required</span>');
	} else if (IsEmail(email) == false){
		$('#email').after('<span class="inputError" style="color: red;">Invalid Email</span>'); 
	    $('.inputError').css('color', 'red');
        return false;
    } else {
		$('#email').after('<input id="getEmail" class="inputHidden" value="ok" type="hidden">');
	}

	const inputPassword = $('#update-form input[name="password"]');
    const passWord = inputPassword.val();
	var passwordL = $('#password').val().length;
	if (!passWord){
		$('#password').after('<span class="inputError" style="color: red;">This field is required</span>');
	} else {
		$('#password').after('<input id="getPassword" class="inputHidden" value="ok" type="hidden">');
	}

	const inputPasswordCon = $('#update-form input[name="passwordCon"]');
	const passwordConfirm = inputPasswordCon.val();
	
	if(!passwordConfirm){
        $('#passwordCon').after('<span style="color: red;" class="inputError" style="color: red;">This field is required</span>');
	} else if(passwordConfirm != passWord){
        $('#passwordCon').after('<span id="passConText" style="color: red;" class="getPasswordConfirm">Password confirmation did not match</span>');
	} else {
		'';
	}
    
	if(passWord){
        if (passwordL < 6){
		    $('#password').after('<span class="inputError" style="color: red;">Password is too short</span>');
		} else {	
  	        if (email && passWord && passwordConfirm){
	            // checkEmail();	   
                callSaveUpdateUsernamePassword();
	        }
	    }
	}

	function checkEmail(){
		$.ajax({
			url: '{{ url("/check-email") }}',
			method: 'POST',
			data: {
				_token: function() {
            return "{{csrf_token()}}"
        }, 
		email
			},
			dataType: "json",
			success: function(response){
                if (response.error != null){
		            $('#email').after('<span class="inputError" style="color: red;">This email already exists</span>');             
				} else if (response.success == 'ok') {
	                setTimeout(callSaveUpdateUsernamePassword, 3000);
			   }
			}
		});
	}

	function callSaveUpdateUsernamePassword(){
	$.ajax({
    url: '{{ url("/save-updated-username-and-password") }}',
    data: { 
		_token: function() {
            return "{{csrf_token()}}"
        },
		email,
		passWord
	},
        method: 'POST',
	    cache: false,
	    success: function (html){
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".section-header").offset().top
            }, 1000);
            $('.up-alert-div').html('<div class="alert alert-success uname-pass-alert"><div class="fa fa-spinner fa-spin"></div> Username and Password was Updated'); 
                setTimeout(removeUpAlert, 3000);
	        }
	    });
    }
}

function removeUpAlert(){
    $('.uname-pass-alert').hide();
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
        return false;
    } else{
        return true;
    }
}

</script>