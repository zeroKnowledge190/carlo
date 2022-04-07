<script type="text/javascript">

function submitRdLogin(event){
    event.preventDefault();

    $('#email').bind('click', function(){
        $('#email-text').text('');
        $('#cred-match-text').text('');
        $('#login-btn').attr('disabled', false);
    });
    
    $('#password').bind('click', function(){
        $('#password-text').text('');
        $('#cred-match-text').text('');
        $('#login-btn').attr('disabled', false);
    });

    const email = $('.login-email').val();
    const password = $('.login-password').val();

    if (!email){
        $('#email-text').text('Please enter an email').css('color', '#D24D57');
        $('#login-btn').attr('disabled', true);
    } else if (IsEmail(email) == false){
		$('#email-text').text('Email is Invalid').css('color', '#D24D57'); 
        $('#login-btn').attr('disabled', true);
        return false;
    }

    if (!password){
        $('#password-text').text('Please enter a Password').css('color', '#D24D57');
        $('#login-btn').attr('disabled', true);
    }
    
    if (email && password){
        loginToDashBoard();
    }

function loginToDashBoard(){
    $.ajax({
        url: '{{ url("/login") }}',
            method: 'POST',
            data: { 
		        _token: function() {
                return "{{csrf_token()}}"
            },
		    email,
		    password 
	    },
        dataType: "json",
	    success: function (response){
        console.log('response to ', response);
        if(response.errors != null){
            $('#cred-match-text').text('Credentials you have entered did not match').css('color', '#D24D57');
            $('#login-button').attr('disabled', true);
        } else if (response.checked != null){
            // window.location.href = "/landing-face";
            window.location.href = "/";

            }
	    }
        })
    }
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

