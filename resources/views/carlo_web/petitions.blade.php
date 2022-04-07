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
                <h4 style="margin-top: -45px;" class="question-label"><b>Petitions (Petisyon)</b></h4>
                <div class="q-alert"></div>
                <div class="p-auth"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label>Date Created (Petsa)</label>
                <input type="date" class="form-control p-date-created" />
                <input type="hidden" class="form-control p-status" value="New" />
                <input type="hidden" class="form-control p-created-by" value="" />
                <input type="hidden" class="token-val" name="_token" value="{{ $token }}" />
                <span id="p-date-created-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Entity which letter is directed to (Para sa anong ahensya)</label>
                <input type="text" class="form-control p-entity" />
                <span id="p-entity-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Subject / Title</label>
                <input type="text" class="form-control p-subject" />
                <span id="p-subject-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Purpose / Intention</label>
                <input type="text" class="form-control p-intention" />
                <span id="p-intention-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Solution / Suggestion</label>
                <input type="text" class="form-control p-solution" />
                <span id="p-solution-text"></span>
            </div>
        </div>
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible" style="width: 58em;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('message') }}
    </div>
@endif
<b>Add supporting document</b>
<form enctype="multipart/form-data" action="/save_upload_petition_files" method="post">
<div class="row">
    <div class="col-md-6">
        <label>Upload Image</label><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input style="height: 2.7em;" type="file" class='form-control' name="hic_documents" required>
    <input type="hidden" value="Petition" class='form-control' name="file_name">
</div>
<div class="col-md-3">
	<input style="margin-top: 40px;" type="submit" value="Attached" class="btn btn-warning pull-left">
		</div>	
	        <div>
        </div>
    </div>
</form>
<br />
        <div class="row">
            <div class="col-md-3">
                <button id="submit-p-btn" type="button" class="btn btn-success btn-sm submitPetitions">Submit</button>
            </div>
        </div>
    </div>
</div>
</section>
<div style="height: 60px;"></div>
</section>
@extends('fil_views.layouts.c_footer')
