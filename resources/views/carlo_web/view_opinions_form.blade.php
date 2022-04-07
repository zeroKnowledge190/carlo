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
                <h4 style="margin-top: -45px;" class="question-label"><b>Opinions Letter (Opinyon)</b></h4>
                <div class="q-alert"></div>
                <div class="o-auth"></div>
            </div>
        </div>
        <div class="row">       
            <div class="col-md-3">
                <p>From: <b>{{ $viewO->created_by }}</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label><b>Date Created (Petsa)</b></label><br>
                <b>{{ $viewO->date_created }}</b>
                <input type="hidden" class="form-control o-date-created" />
                <input type="hidden" class="form-control o-status" value="New" />
                <input type="hidden" class="form-control o-created-by" value="" />
                <span id="o-date-created-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><b>Entity which letter is directed to (Para sa anong ahensya)</b></label><br>
                {{ $viewO->entity_name }}
                <input type="hidden" class="form-control o-entity" />
                <span id="o-entity-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><b>Body (Ang inyong opinyon)</b></label><br>
                {{ $viewO->opinion_body }}
                <span id="o-opinion-body-text"></span>
            </div>
        </div>
    </div>
</div>
</section>
<div style="height: 60px;"></div>
</section>
@extends('fil_views.layouts.c_footer')
