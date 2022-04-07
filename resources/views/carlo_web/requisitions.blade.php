<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/carlo/carlo.css">
</head>
<body class="rounded-bottom rounded-top border-dark">
<!--navbar-->
<section id="navbar">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-none py-0 mx-auto">
        <div class="container ">
            <div class="collapse navbar-collapse justify-content-center" id="navbar13">
                <ul class="navbar-nav py-1">
                    <li class="nav-item mt-1 pr-1"><a class="nav-link">Connect With Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="https://www.twitter.com/" target="_blank">
                        <i class="fa fa-twitter fa-fw fa-2x text-light"></i></a>
                    </li>
                    <li class="nav-item text-light"><a class="nav-link" href="https://www.facebook.com/" target="_blank">
            	        <i class="fa fa-facebook-square fa-fw fa-2x text-light"></i></a>
                    </li>
                    <li class="nav-item text-light"><a class="nav-link" href="https://www.youtube.com/" target="_blank">
             	        <i class="fa fa-youtube fa-2x text-light"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com" target="_blank">
            	    <i class="fa fa-instagram fa-fw fa-2x text-light mx-auto"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- Navbar Menu -->
<section id="NavbarMenu">
    <nav class="navbar navbar-expand-md border-bottom border-top navbar-light border-info mt-0" style="">
        <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar7">
            <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbar7"> <a class="navbar-brand text-primary d-none d-md-block" href="#">        
            <img src="/carlo/assets/CARLO logo TOP BAR.png" width="120" class="d-inline-block align-top" alt="" height="50"></a>
        </div>
    </div>
</nav>
<section id="Home">
    <div class="border-bottom rounded border-info pt-5 pb-4" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 style="margin-top: -45px;" class="question-label"><b>Requisitions Letter (Opinyon)</b></h4>
                    <div class="q-alert"></div>
                <div class="r-auth"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label><p style="font-size: 20px;">Date Created (Petsa)</p></label>
                <input type="date" class="form-control r-date-created" />
                <input type="hidden" class="form-control r-status" value="New" />
                <input type="hidden" class="form-control r-created-by" value="" />
                <input type="hidden" class="token-val" name="_token" value="{{ $token }}" />
                <span id="r-date-created-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Entity which letter is directed to (Para sa anong ahensya)</p></label>
                <input type="text" class="form-control r-entity" />
                <span id="r-entity-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Full Name (Boung Pangalan)</p></label>
                <input type="text" class="form-control r-fullname" />
                <span id="r-fullname-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Job Title (Titulo o Trabahao)</p></label>
                <input type="text" class="form-control r-job-title" />
                <span id="r-job-title-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Company Name (Kumpanyang Pinagtatrabahuan)</p></label>
                <input type="text" class="form-control r-company-name" />
                <span id="r-company-name-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Email Address (Iyong email address)</p></label>
                <input type="text" class="form-control r-email-address" />
                <span id="r-email-address-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Body / Requisition (Ang inyong Hinihingi)</p></label>
                <textarea rows="4" class="form-control r-requisition-body"></textarea>
                <span id="r-requisition-body-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;">Location of Problem (Lokasyon na may problema)</p></label>
                    <input type="text" class="form-control r-location" />
                <span id="r-location-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
               <p style="font-size: 20px;">Requisitions (Talaan ng Hinihingi)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req1" class="r-req1" type="radio" name="request_type" value="Request1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req2" class="r-req2" type="radio" name="request_type" value="Request2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req3" class="r-req3" type="radio" name="request_type" value="Request3" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 3
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req4" class="r-req4" type="radio" name="request_type" value="Request4" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 4
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req5" class="r-req4" type="radio" name="request_type" value="Request5" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 5
            </div>
        </div>
        
        <div class="row">
            <p style="margin-left: 15px;"><span id="r-request-type-text"></span></p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Others</label>
                    <input type="text" class="form-control r-others" />
                <span id="r-others-text"></span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
               <p style="font-size: 20px;">Priority</p>
               <p>(1 is very high, 5 is very low)<p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <input style="margin-top: 5px;" id="p1" class="r-p1" type="radio" name="priority" value="1" />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                1
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p2" class="r-p2" type="radio" name="priority" value="2" />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                2
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p3" class="r-p3" type="radio" name="priority" value="3" />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                3
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p4" class="r-p4" type="radio" name="priority" value="4" />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                4
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p5" class="r-p5" type="radio" name="priority" value="5" />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                5 
            </div>
            <span id="r-priority-text"></span>
        </div>
        <hr>
<div class="row">
    <div class="col-md-3">
        <label><p style="font-size: 20px;">Due Date</p></label>
            <input type="date" class="form-control r-due-date" name="due_date" />
            <span id="r-due-date-text"></span>
        </div>
    </div>
<hr>
<div class="row">
    <div class="col-md-12">
        <label><p style="font-size: 20px;">Definition</p></label>
            <input type="text" class="form-control r-definition" name="definition" />
        <span id="r-definition-text"></span>
    </div>
</div>
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible" style="width: 58em;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif
<b>Add supporting document</b>
<form enctype="multipart/form-data" action="/save_upload_requisition_files" method="post">
<div class="row">
    <div class="col-md-6">
        <label>Upload Image</label><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input style="height: 2.7em;" type="file" class='form-control' name="hic_documents" required>
    <input type="hidden" value="Requisition" class='form-control' name="file_name">
</div>
<div class="col-md-3">
	<input style="margin-top: 40px;" type="submit" value="Attached" class="btn btn-warning pull-left">
		</div>	
	        <div>
        </div>
    </div>
</form>
<br />
        <hr>
        <div class="row">
            <div class="col-md-3">
                <button id="submit-r-btn" type="button" class="btn btn-success btn-sm submitRequisition">Submit</button>
                </div>
            </div>
        </div>  
    </div>
</section>
<div style="height: 20px;"></div>
</section>
<style>
    input[type=radio] {
    border: 0px;
    width: 100%;
    height: 2em;
}
</style>
@extends('fil_views.layouts.c_footer')
