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
                    <h4 style="margin-top: -45px;" class="question-label"><b>Survey Form</b></h4>
                    <div class="q-alert"></div>
                <div class="s-auth"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                From: <p><b>{{ $viewS->created_by }}</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Description</b></p></label><br>
                {{ $viewS->description }}
                <input type="hidden" class="form-control s-description" />
                <span id="s-description-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label><p style="font-size: 20px;"><b>Purpose or Intention</b></p></label><br>
                {{ $viewS->intention }}
                <input type="hidden" class="form-control s-intention" />
                <span id="s-intention-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Reminder (Answers are subject ot only 3 choices)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label><p style="font-size: 20px;"><b>Date Created (Petsa)</b></p></label><br>
                {{ $viewS->date_created }}
                <input type="hidden" class="form-control s-date-created" />
                <input type="hidden" class="form-control s-status" value="New" />
                <input type="hidden" class="form-control s-created-by" value="" />
                <span id="s-date-created-text"></span>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>1. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst1" class="s-q-first1" type="radio" name="question1" value="Option 1" {{ $viewS->question1 == 'Option 1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst2" class="s-q-first2" type="radio" name="question1" value="Option 2" {{ $viewS->question1 == 'Option 2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst3" class="s-q-first3" type="radio" name="question1" value="Option 3" {{ $viewS->question1 == 'Option 3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-first-text"></span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>2. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQSecond1" class="s-q-second1" type="radio" name="question2" value="Option 1" {{ $viewS->question2 == 'Option 1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQSecond2" class="s-q-second3" type="radio" name="question2" value="Option 2" {{ $viewS->question2 == 'Option 2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQSecond3" class="s-q-second3" type="radio" name="question2" value="Option 3" {{ $viewS->question2 == 'Option 3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-second-text"></span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>3. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQThird1" class="s-q-third1" type="radio" name="question3" value="Option 1" {{ $viewS->question3 == 'Option 1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQThird2" class="s-q-third2" type="radio" name="question3" value="Option 2" {{ $viewS->question3 == 'Option 2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQThird3" class="s-q-third3" type="radio" name="question3" value="Option 3" {{ $viewS->question3 == 'Option 3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-third-text"></span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>4. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFourth1" class="s-q-fourth1" type="radio" name="question4" value="Option 1" {{ $viewS->question4 == 'Option 1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFourth2" class="s-q-fourth2" type="radio" name="question4" value="Option 2" {{ $viewS->question4 == 'Option 2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFourth3" class="s-q-fourth3" type="radio" name="question4" value="Option 3" {{ $viewS->question4 == 'Option 3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-fourth-text"></span></p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>5. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFifth1" class="s-q-fifth1" type="radio" name="question5" value="Option 1" {{ $viewS->question5 == 'Option 1' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFifth2" class="s-q-fifth2" type="radio" name="question5" value="Option 2" {{ $viewS->question5 == 'Option 2' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFifth3" class="s-q-fifth3" type="radio" name="question5" value="Option 3" {{ $viewS->question5 == 'Option 3' ? 'checked' : '' }} />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-fifth-text"></span></p>
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
