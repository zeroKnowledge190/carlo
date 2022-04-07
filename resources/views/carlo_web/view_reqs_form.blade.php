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
                From: <p><b>{{ $viewR->created_by }}</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label><p style="font-size: 20px;"><b>Created (Petsa)</b></p></label><br>
                {{ $viewR->date_created }}
                <input type="hidden" class="form-control r-date-created" />
                <input type="hidden" class="form-control r-status" value="New" />
                <input type="hidden" class="form-control r-created-by" value="" />
                <span id="r-date-created-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Entity which letter is directed to (Para sa anong ahensya)</b></p></label><br>
                {{ $viewR->entity_name }}
                <input type="hidden" class="form-control r-entity" />
                <span id="r-entity-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Full Name (Boung Pangalan)</b></p></label><br>
                {{ $viewR->full_name }}
                <input type="hidden" class="form-control r-fullname" />
                <span id="r-fullname-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Job Title (Titulo o Trabahao)</b></p></label><br>
                {{ $viewR->job_title }}
                <input type="hidden" class="form-control r-job-title" />
                <span id="r-job-title-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Company Name (Kumpanyang Pinagtatrabahuan)</b></p></label><br>
                {{ $viewR->company_name }}
                <input type="hidden" class="form-control r-company-name" />
                <span id="r-company-name-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Email Address (Iyong email address)</b></p></label>
                {{ $viewR->email_address }}
                <input type="hidden" class="form-control r-email-address" />
                <span id="r-email-address-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Body / Requisition (Ang inyong Hinihingi)</b></p></label><br>
                {{ $viewR->body_summary }}
                <span id="r-requisition-body-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Location of Problem (Lokasyon na may problema)</b></p></label><br>
                    {{ $viewR->location }}
                    <input type="hidden" class="form-control r-location" />
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
                <input style="margin-top: 5px;" id="req1" class="r-req1" type="radio" name="request_type" value="Request1" {{ $viewR->request_type == 'Request1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req2" class="r-req2" type="radio" name="request_type" value="Request2" {{ $viewR->request_type == 'Request2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req3" class="r-req3" type="radio" name="request_type" value="Request3" {{ $viewR->request_type == 'Request3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 3
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req4" class="r-req4" type="radio" name="request_type" value="Request4" {{ $viewR->request_type == 'Request4' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Request 4
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="req5" class="r-req4" type="radio" name="request_type" value="Request5" {{ $viewR->request_type == 'Request5' ? 'checked' : '' }} />
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
                <label><b>Others</b></label><br>
                {{ $viewR->others }}
                    <input type="hidden" class="form-control r-others" />
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
                <input style="margin-top: 5px;" id="p1" class="r-p1" type="radio" name="priority" value="1" {{ $viewR->priority == '1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                1
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p2" class="r-p2" type="radio" name="priority" value="2" {{ $viewR->priority == '2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                2
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p3" class="r-p3" type="radio" name="priority" value="3" {{ $viewR->priority == '3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                3
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p4" class="r-p4" type="radio" name="priority" value="4" {{ $viewR->priority == '4' ? 'checked' : '' }} />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                4
            </div>
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="p5" class="r-p5" type="radio" name="priority" value="5" {{ $viewR->priority == '5' ? 'checked' : '' }} />
            </div>
            <div class="col-md-1" style="margin-top: 9px;">
                5 
            </div>
            <span id="r-priority-text"></span>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <label><p style="font-size: 20px;"><b>Due Date</b></p></label><br>
                    {{ $viewR->due_date }}
                    <input type="hidden" class="form-control r-due-date" name="due_date" />
                <span id="r-due-date-text"></span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label><p style="font-size: 20px;"><b>Definition</b></p></label><br>
                    {{ $viewR->definition }}
                    <input type="hidden" class="form-control r-definition" name="definition" />
                <span id="r-definition-text"></span>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-3">
                <button id="submit-r-btn" type="button" class="btn btn-success btn-sm submitRequisition">Submit</button>
                </div>
            </div> -->
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
