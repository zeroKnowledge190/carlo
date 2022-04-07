<main class="main-profile">
    <div class="container-fluid">
        <ol class="breadcrumb mb-4 dash-active">
    <li class="breadcrumb-item active">Update Profile</li>
</ol>
<div class="row profile-img">
    <div class="col-md-12">
        <img id="rd-profile-pic" src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:125px; height:120px; image-align:center; border-radius:50%"></h2>                    
    </div> 
</div>
<div class="row">  
    <div class="col-md-6">
        <label><b><i class="fa fa-info-circle"></i> Here, you can complete your personal information</b></label>
    </div>
</div>
<div class="alert-space"></div>
<form id="update-profile-form"> 
@if(Auth::user()->user_account_type == 'Administrator')
<div class="row">
    <div class="col-md-3">
        <label><b>Firstname</b></label>
            <input id="user-firstname-input" type="text" class="form-control u-user-firstname" value="{{ Auth::user()->user_firstname }}" name="user_firstname">
        <input id="user-id-no-input" type="hidden" class="form-control" value="{{ Auth::user()->hic_id_no }}" name="hic_id_no">            
    <span id="update-hic-firstname-text"></span>
</div>
<div class="col-md-3">
    <label><b>Middlename</b></label>
        <input id="user-middlename-input" type="text" class="form-control u-user-middlename" value="{{ Auth::user()->user_middlename }}" name="user_middlename">
</div>
<div class="col-md-3">
    <label><b>Lastname</b></label>
        <input id="user-lastname-input" type="text" class="form-control u-user-lastname" value="{{ Auth::user()->user_lastname }}" name="user_lastname">
    <span id="update-hic-lastname-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Suffix</b></label>
        <input id="user-suffix-input" type="text" class="form-control u-user-suffix" value="{{ Auth::user()->user_suffix }}" name="user_lastname">
    </div>
</div>    
@endif
@if(Auth::user()->user_account_type == 'Applicant')
<div class="row">
    <div class="col-md-3">
        <label><b>Firstname</b></label>
            <input id="user-firstname-input" type="text" class="form-control u-user-firstname" value="{{ Auth::user()->user_firstname }}" name="user_firstname">
        <input id="user-id-no-input" type="hidden" class="form-control" value="{{ Auth::user()->hic_id_no }}" name="hic_id_no">            
    <span id="update-hic-firstname-text"></span>
</div>
<div class="col-md-3">
    <label><b>Middlename</b></label>
        <input id="user-middlename-input" type="text" class="form-control u-user-middlename" value="{{ Auth::user()->user_middlename }}" name="user_middlename">
</div>
<div class="col-md-3">
    <label><b>Lastname</b></label>
        <input id="user-lastname-input" type="text" class="form-control u-user-lastname" value="{{ Auth::user()->user_lastname }}" name="user_lastname">
    <span id="update-hic-lastname-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Suffix</b></label>
        <input id="user-suffix-input" type="text" class="form-control u-user-suffix" value="{{ Auth::user()->user_suffix }}" name="user_lastname">
    </div>
</div>
<div id="divGender" class="col-md-3">
	<label for="gender"><b>Gender</b></label><br>
		<input class="radio c-male" id="male" type="radio" value="Male" name="user_gender" {{ Auth::user()->user_gender == 'Male' ? 'checked' : '' }}> Male
	        <input class="radio c-female" id="female" type="radio" value="Female" name="user_gender" {{ Auth::user()->user_gender == 'Female' ? 'checked' : '' }}> Female
		<br>
	<span id="genderText"></span>
</div>
<div class="col-md-3">
    <label><b>Civil Status</b></label>
        <select class="form-control u-civil-status">
            <option value="{{ Auth::user()->user_civil_status }}">{{ Auth::user()->user_civil_status }}</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Separated">Separated</option>
            <option value="Widowed">Widowed</option>
        </select>
    <span id="update-civil-status-text"></span>
</div>
<div class="col-md-3">
    <label><b>Religion</b></label>
        <select class="form-control u-religion">
            <option value="{{ Auth::user()->user_religion }}">{{ Auth::user()->user_religion }}</option>
            <option value="Islam">Islam</option>
            <option value="Roman Catholic">Roman Catholic</option>
            <option value="Iglesia ni Kristo">Iglesia ni Kristo</option>
            <option value="Jehovas Witness">Jehovas Witness</option>
            <option value="Christian Variants">Christian Variants</option>
            <option value="Hinduism">Hinduism</option>
        </select>
    <span id="update-user-religion-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Age</b></label>
            <input id="user-age-input" type="number" class="form-control u-user-age" value="{{ Auth::user()->user_age }}" name="user_age">
            <span id="update-user-age-text"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label><b>Date of Birth</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label>Month</label>
            <select id="hic-user-birth-day" class="form-control u-birth-month" name="user_birth_month">
            <option value="{{ Auth::user()->user_birth_month }}">{{ Auth::user()->user_birth_month }}</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
    <span id="update-user-birthmonth-text"></span>
</div>
<div class="col-md-3">
    <label><b>Day</b></label>
        <input id="hic-user-birth-day-input" type="number" class="form-control u-birth-day" value="{{ Auth::user()->user_birth_day }}" name="user_birth_day">
    <span id="update-user-birthday-text"></span>
</div>
<div class="col-md-3">
    <label><b>Year</b></label>
        <input id="hic-user-birth-year-input" type="number" class="form-control u-birth-year" value="{{ Auth::user()->user_birth_year }}" name="user_birth_year">
    <span id="update-user-birthyear-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Place of Birth</b> (Province)</label>
            <input id="hic-user-birthplace-input" type="text" class="form-control u-birthplace" value="{{ Auth::user()->user_place_of_birth }}" name="user_place_of_birth">
        <span id="update-user-birthplace-text"></span>
    </div>
</div>
<div class="col-md-3">
    <div class="form-group">
	    <label><b>Contact Number</b></label>
	        <input id="hic-admin-contact-no" type="number" class="form-control rd-inputs u-contact-no" value="{{ Auth::user()->hic_contact_no }}" name="hic_contact_no">
            <span id="update-contact-no-text"></span>
        </div>
    </div>
</div>
<div class="row hci-address">  
    <div class="col-md-6">
        <label><b><i class="fa fa-map"></i> Address</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label><b>Street</b></label>
        <input id="hic-street-input" type="text" class="form-control" value="{{ Auth::user()->hic_street }}" name="hic_street">
    <span id="update-hic-street-text"></span>
</div>
<div class="col-md-3">
    <label><b>Brgy. / Village</b></label>
        <input id="hic-village-input" type="text" class="form-control" value="{{ Auth::user()->hic_village }}" name="hic_village">
    <span id="update-hic-village-text"></span>
</div>
<div class="col-md-3">
    <label><b>City / Municipality</b></label>
        <input id="hic-city-input" type="text" class="form-control" value="{{ Auth::user()->hic_city }}" name="hic_city">
    <span id="update-hic-city-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Province / State</b></label>
            <input id="hic-province-input" type="text" class="form-control" value="{{ Auth::user()->hic_province }}" name="hic_province">
            <span id="update-hic-province-text"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label><b><i class="fa fa-gears"></i> Your job application details</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label><b>Position Applied</b></label>
        <input id="hic-position-input" type="text" class="form-control u-position-applied" value="{{ Auth::user()->position_applied }}" name="position_applied">
    <span id="update-position-applied-text"></span>
</div>
<div class="col-md-3">
    <label><b>Job Type</b></label>
        <input id="hic-job-type-input" type="text" class="form-control u-job-type" value="{{ Auth::user()->job_type }}" name="job_type">
    <span id="update-job-type-text"></span>
</div>
<div class="col-md-3">
    <label><b>Area of Specialty</b></label>
        <input id="hic-area-of-specialty-input" type="text" class="form-control u-area-of-specialty" value="{{ Auth::user()->area_of_specialty }}" name="area_of_specialty">
    <span id="update-area-of-specialty-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Years of Experience</b></label>
            <select class="form-control u-years-of-exp">
                <option value="{{ Auth::user()->years_of_exp }}">{{ Auth::user()->years_of_exp }}</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        <span id="update-years-of-exp-text"></span>
    </div>
</div>
<div class="col-md-3">
    <label><b>Company</b></label>
        <input id="u-hic-name-input" type="text" class="form-control u-hic-name" value="{{ Auth::user()->hic_name }}" name="hic_name">
    <span id="update-hic-name-text"></span>
</div>
<div class="col-md-3">
    <label><b>Region</b></label>
        <input id="hic-region-input" type="text" class="form-control u-region" value="{{ Auth::user()->region }}" name="area_of_specialty">
    <span id="update-region-text"></span>
</div>
<div class="col-md-3">
    <div class="form-group">
        <label><b>Country</b></label>
            <input id="hic-country-input" type="text" class="form-control u-country" value="{{ Auth::user()->country }}" name="country">
            <span id="update-country-text"></span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <label><i class="fa fa-address-card-o"></i><b> Passport Number and Date of Expiry</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label><b>Passport Number</b></label>
            <input id="hic-pasport-number-input" type="text" class="form-control u-passport-number" value="{{ Auth::user()->passport_number }}" name="country">
        <span id="update-passport-number-text"></span>
    </div>
</div>
<div class="col-md-3">
    <label><b>Month</b></label>
        <select id="hic-passport-exp-month" class="form-control u-passport-exp-month" name="passport_exp_month">
            <option value="{{ Auth::user()->passport_exp_month }}">{{ Auth::user()->passport_exp_month }}</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
            <option value="December">December</option>
        </select>
    <span id="update-passport-exp-month-text"></span>
</div>
<div class="col-md-3">
    <label><b>Day</b></label>
        <input id="hic-passport-exp-day-input" type="number" class="form-control u-passport-exp-day" value="{{ Auth::user()->passport_exp_day }}" name="passport_exp_day">
    <span id="update-passport-exp-day-text"></span>
</div>
<div class="col-md-3">
    <label><b>Year</b></label>
        <input id="hic-passport-exp-year-input" type="number" class="form-control u-passport-exp-year" value="{{ Auth::user()->passport_exp_year }}" name="passport_exp_year">
        <span id="update-passport-exp-year-text"></span>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <label><i class="fa fa-id-card-o"></i><b> PRC Number and Date of Expiry</b></label>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label><b>PRC Number</b></label>
            <input id="hic-pasport-number-input" type="text" class="form-control u-prc-number" value="{{ Auth::user()->prc_number }}" name="prc_number">
        <span id="update-prc-number-text"></span>
    </div>
</div>
<div class="col-md-3">
    <label><b>Month</b></label>
        <select id="hic-prc-exp-month" class="form-control u-prc-exp-month" name="prc_exp_month">
            <option value="{{ Auth::user()->prc_exp_month }}">{{ Auth::user()->prc_exp_month }}</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
            <option value="December">December</option>
        </select>
    <span id="update-prc-exp-month-text"></span>
</div>
<div class="col-md-3">
    <label><b>Day</b></label>
        <input id="hic-prc-exp-day-input" type="number" class="form-control u-prc-exp-day" value="{{ Auth::user()->prc_exp_day }}" name="prc_exp_day">
    <span id="update-prc-exp-day-text"></span>
</div>
<div class="col-md-3">
    <label><b>Year</b></label>
        <input id="hic-prc-exp-year-input" type="number" class="form-control u-prc-exp-year" value="{{ Auth::user()->prc_exp_year }}" name="prc_exp_year">
        <span id="update-prc-exp-year-text"></span>
    </div>
</div>
@endif
<div class="row">  
    <div class="col-md-12">
        <button id="update-profile-btn" type="button" name="update" class="btn btn-success btn-sm pull-right" onclick="submitUpdatedProfile(event)">Update</button>
            </div>
        </div>
    </form>
</main>
<br />
@include('reddrop_back.back_scripts.update_profile') 




