<div class="modal" id="userRegisterModal" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content pull-right">
    <div class="modal-header-new"><b><p id="register-label"><i class="fa fa-pencil-square"></i> Register</p></b></div>
<form id="rd-register-form">    
{{ csrf_field() }}
<section id="login">
    <div class="row s-space">
</div>    
<div class="container register-con reg-pad">
    <div class="row">
        <div class="col-md-6">
    </div>
</div>
<div class="row first-row" style="margin-top: 15px;">
	<div class="col-md-3">
        <div class="form-group">        
		    <label>Name of Companies</label>
            <input id="hic-name" type="text" class="form-control rd-inputs" name="hic_name">
	        <input id="hic-position" type="hidden" class="form-control rd-inputs" value="Admnistrator" name="hic_position">
	        <input id="hic-user-status" type="hidden" class="form-control rd-inputs" value="New Account" name="hic_user_status">
	        <input id="hic-user-level" type="hidden" class="form-control rd-inputs" value="Client" name="hic_user_level">            
        <span id="hic-name-text"></span>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Type of Company</label>                          
            <select id="hic-type" class="form-control rd-inputs" name="hic_type">
                <option></option>
                <option value="Social Media News">Social Media News</option>
                <option value="Mainstream Media">Mainstream Media</option>
                <option value="News Network">News Network</option>
            </select>
        <span id="hic-type-text"></span>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Network</label>
            <input id="hic-network" class="form-control" type="text" name="hic_network" />                          
        <span id="hic-network-text"></span>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Region</label>
            <select id="select-region" class="form-control select-region" name="region">
            <option></option>
            <option value="NCR">NCR</option>
            <option value="CAR">CAR</option>
            <option value="Ilocos Region">Ilocos Region</option>
            <option value="Cagayan Valley">Cagayan Valley</option>
            <option value="Central Luzon">Cetral Luzon</option>
            <option value="Calabarzon">Calabarzon</option>
            <option value="MIMAROPA">MIMAROPA</option>
            <option value="Bicol Region">Bicol Region</option>
            <option value="Western Visayas">Western Visayas</option>
            <option value="Central Visayas">Central Visayas</option>
            <option value="Eastern Visayas">Eastern Visayas</option>
            <option value="Zamboanga Peninsula">Zamboanga Peninsula</option>
            <option value="Northern Mindanao">Northern Mindanao</option>
            <option value="Davao Region">Davao Region</option>
            <option value="Socsksargen">Socsksargen</option>
            <option value="Caraga">Caraga</option>
            <option value="Bangsamoro">Bangsamoro</option>
            </select>                     
            <span id="hic-region-text"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <label><b>Information System Administrator</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Firstname</label>                          
            <input id="hic-firstname" type="text" class="form-control rd-inputs" name="user_firstname">
        <span id="hic-firstname-text"></span>
    </div>    
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Lastname</label>                          
            <input id="hic-lastname" type="text" class="form-control rd-inputs" name="user_lastname">
        <span id="hic-lastname-text"></span>
    </div>    
</div>
<div class="col-md-3">
    <div class="form-group">
	    <label>Admin Contact Number</label>
	        <input id="hic-admin-contact-no" type="text" class="form-control rd-inputs" name="hic_contact_no">
            <span id="hic-admin-contact-no-text"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label><b>Login Details</b></label>
    </div>
</div>
<div class="row second-row">
    <div class="col-md-3">
        <div class="form-group">
            <label>Email</label>                          
                <input id="hic-email" type="text" class="form-control rd-inputs" name="email">
            <span id="hic-email-text"></span>
        <span id="hic-email-valid-text"></span>
    </div>    
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Password</label>                          
            <input id="hic-password" type="password" class="form-control rd-inputs" name="password">
        <span id="hic-password-text"></span>
    </div>    
</div>
<div class="col-md-3">
    <div class="form-group">
        <label>Confirm Password</label>                          
            <input id="hic-password-con" type="password" name="passwordCon" class="form-control rd-inputs">    
                <span id="hic-password-con-text"></span>
            </div>    
        </div>
    </div>
</section>
<div class="modal-footer">
    <button id="reg-btn" type="button" value="Save" class="btn btn-success btn-sm pull-right" onclick="submitRegisterUser(event)">Save</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>