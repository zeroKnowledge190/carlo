<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.min.js"></script>

<script>
    function showRegisterForm(event){
        
        $('#registerModal').modal('show');   
        $('.reg-pad').hide();
        $('#reg-btn').attr('disabled', true); 
        $('.s-space').html('<div class="row spinner-red-login"><div class="col-md-12"><img class="displayed" src="/dira/images/ajax-loader-circle.gif" /></div>');  
        setTimeout(hideSpinner, 1000);  
    }    

    function hideSpinner(){
        $('.spinner-red-login').hide();
        $('.reg-pad').show();
        $('#reg-btn').attr('disabled', false);
    }  

    $('#jobType').on('change', function(){
		getJobSelectValue(this.value);
	});

    function getJobSelectValue(industryValue){
        $.ajax({
            url: '/skill_filters',
            method: 'post',
            dataType: 'json',
            data: { 
		        _token: function() {
                    return "{{ csrf_token() }}"
                },
            industryValue
            },
            success: function (response){
                // $('#skillFilter').attr('disabled', false);
                const skills = response;
                var roles = {
                    skills
                }
                console.log(roles);
                var dropDownField = roles;
                var html = '<option value=""></option>';
                if (typeof(dropDownField) === "object" && Object.keys(dropDownField).length) {
                    $.each(dropDownField.skills, function(key, data) {
                        html += `<option value="${data.position_name}">${data.position_name}</option>`;
                    });
                }
                $('#skillTrans').html(html); 
            }
        });
    }

    function submitCarloRegister(event){
        
        $('#reg-btn').attr('disabled', true);
        
        var cFullName = $('.c-full-name').val();
        var cGender = $('.c-gender').val();
        var cDateOfBirth = $('.c-date-of-birth').val();
        var cContactNo = $('.c-mobile-number').val();
        var cLandLineNo = $('.c-land-line').val();
        var cCityProvince = $('.c-city-province').val();
        var cVillage = $('.c-village').val();
        var cFullAddress = $('.c-full-address').val();
        var cCivilStatus = $('.c-civil-status').val();
        const mobileNumber = $('.c-mobile-number').val();

	    var mobileLength = $(".c-mobile-number").val().length;
        const email = $('.c-email').val();

        const hicPassWord = $('.c-password').val();
	    var hicPassWordL = hicPassWord.length;
        const hicPassWordCon = $('.c-password-confirm').val(); 
        
        if (!cFullName){
            $('#c-full-name-text').text('* Full Name is Required').css('color', '#DC3545');
        }

        $('.c-full-name').bind('click', function(){
            $('#c-full-name-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cGender){
            $('#c-gender-text').text('* Gender is Required').css('color', '#DC3545');
        }

        $('.c-gender').bind('click', function(){
            $('#c-gender-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cDateOfBirth){
            $('#c-date-of-birth-text').text('* Date of Birth is Required').css('color', '#DC3545');
        }

        $('.c-date-of-birth').bind('click', function(){
            $('#c-date-of-birth-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!mobileNumber){
            $('#c-mobile-number-text').text('* Mobile Number is Required').css('color', '#DC3545');
        }

        $('.c-mobile-number').bind('click', function(){
            $('#c-mobile-number-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cLandLineNo){
            $('#c-land-line-text').text('* Land Line Number is Required').css('color', '#DC3545');
        }

        $('.c-land-line').bind('click', function(){
            $('#c-land-line-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cCityProvince){
            $('#c-city-province-text').text('* City and Province is Required').css('color', '#DC3545');
        }

        $('.c-city-province').bind('click', function(){
            $('#c-city-province-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cVillage){
            $('#c-village-text').text('* Barangay is Required').css('color', '#DC3545');
        }

        $('.c-village').bind('click', function(){
            $('#c-village-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cFullAddress){
            $('#c-full-address-text').text('* Full Address is Required').css('color', '#DC3545');
        }

        $('.c-full-address').bind('click', function(){
            $('#c-full-address-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!cCivilStatus){
            $('#c-civil-status-text').text('* Estadong Pangkabuhayan is Required').css('color', '#DC3545');
        }

        $('.c-civil-status').bind('click', function(){
            $('#c-civil-status-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!email){
            $('#c-email-text').text('* Email is Required').css('color', '#DC3545');
        } else if (IsEmail(email) == false) {
            $('#c-email-valid-text').text('* This is not a valid email').css('color', '#D24D57');
            return false;
        } else {
            var hic_email = email;
        }

        $('.c-email').bind('click', function(){
            $('#c-email-text').text('');
        });

        $('#hic-email').bind('click', function(){
            $('#c-email-text').text('');
            $('#hic-email-text').text('');
            $('#hic-email-valid-text').text('');
            $('#email-exist').text('');
            $('#reg-btn').attr('disabled', false);
        });

    
        if (!hicPassWord){
            $('#c-password-text').text('* Password is Required').css('color', '#DC3545');
        } else if (hicPassWordL < 6) {
            $('#c-password-text').text('Password is too weak').css('color', '#DC3545');
        } else {
            var hic_password = hicPassWord;
        }

        $('#hic-password').bind('click', function(){
            $('#c-password-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

        if (!hicPassWordCon){
            $('#c-password-confirm-text').text('* Password Confirm is Required').css('color', '#DC3545');
        } else if (hicPassWordCon !== hicPassWord){
            $('#c-password-confirm-text').text('* Password Confirm did not match').css('color', '#DC3545');              
        } else {
            var hic_password_con = hicPassWordCon;
        }

        $('#hic-password-con').bind('click', function(){
            $('#c-password-confirm-text').text('');
            $('#reg-btn').attr('disabled', false);
        });

    if (email){
		checkEmail();
	} 
    
    function validateEntry() {
        if (cFullName && hic_email && hic_password && hic_password_con){
            callCarloRegisterHic();
        }
    }

    function checkEmail(){
        $.ajax({
            url: "{{ url('/check-email') }}",
            method: 'POST',
            data: {
                _token: function(){
                    return "{{ csrf_token() }}"
                },
            email
            },
            dataType: 'JSON',
                success: function(response){
                if (response.error != null){
		            $('#c-email-text').html('<span id="email-exist" class="input-email" style="color: #D24D57;">This email already exists</span>');             
				} else {
                    validateEntry();
                }
            }
        });  
    }


function callCarloRegisterHic(){
   
	$.ajax({
    url: "{{ url('/register-carlo-user') }}",
    method: 'POST',
    data: { 
		_token: function() {
            return "{{csrf_token()}}"
        },
		cFullName,
        cGender,
        cCivilStatus,
        cDateOfBirth,
        cLandLineNo,
        cCityProvince,
        cVillage,
        cFullAddress,
        cContactNo,
		hic_email,
        hic_password
	},
	    cache: false,
	        success: function (html){
		    $('.carlo-reg').after('<div class="col-md-12 rd-alert-margin"><div id="alert-text" class="alert alert-success"><div class="fa fa-spinner fa-spin"></div> Thank you for joining</div></div>');
		    setTimeout(removeRegisterModal, 3000);
	        }
	    });
    }

    function removeRegisterModal(){
        $('#alert-text').hide();
        // $('#registerModal').modal('hide');
        setTimeout(redirectToDashboard, 1000);
    }

    function redirectToDashboard(){
        window.location.href = "{{ url('/') }}";
    }

    function isMobile(mobileNumber){
	    var phone_pattern = /^([0-9]{11})|(\([0-9]{0}\))/;
	 
        if(phone_pattern.test(mobileNumber)){
		    return true;
	    } else {
		    return false;
	    }
    }

    function IsEmail(email) {
    
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(!regex.test(email)) {
                return false;
            } else {
            return true;
        }
    }
}

</script>