<div id="updateProfile" class="container">
	<header class="section-header">
        <h2 style="text-align: center; font-size: 22px; margin-top: 12px;">{{ $userData->user_firstname .' '. $userData->user_lastname }}<br>
        <br>
    <img src="/uploads/avatars/{{ $userData->avatar }}" style="width:145px; height:138px; image-align:center; border-radius:50%"></h2>
</header>
<div class="row up-alert-div"></div>
<h5>Change Username and Password</h5>
<hr>
<form id="update-form">
<div class="row">
	<div class="col-md-3">
		<label for="email">E-Mail Address</label>
		    <input id="email" type="email" class="form-control" name="email" value="{{ $userData->email }}">
	        <input id="firstname" type="hidden" class="form-control" name="spock_id_no" value="{{ $userData->spock_id_no }}">
	    <input id="firstname" type="hidden" class="form-control" name="user_id_no" value="{{ $userData->user_id_no }}">   
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<label for="password">Type New Password</label>
		<input id="password" type="password" class="form-control" name="password">
    </div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="form-group">
			<label for="password-confirm">Confirm New Password</label>
		    <input id="passwordCon" type="password" name="passwordCon" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary pull-right" id="update-button" onclick="saveUpdatedUsernameAndPassword(event)">Save</button>                      
	    </div>
    </div>
</form>
@include('reddrop_back.back_scripts.update_profile') 




