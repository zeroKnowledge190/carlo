<!DOCTYPE html>
    <html>
        <head>
            <title>CARLO Survey</title>
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
                <h4 style="margin-top: -45px;" class="question-label"><b>Survey Letter</b></h4>
            <div class="q-alert"></div>
        <div class="q-auth"></div>
    </div>
</div>
<div class="row" style="margin-top: -60px;">
    <div class="md-12">
        @if(\Session::has('success'))
            <div class="alert alert-success m-6 alert-dismissible" style="margin-top: 60px;">{{ \Session::get('success') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>        
            </div>
            {{ \Session::forget('success') }}
        @endif
        @if(\Session::has('error'))
            <div class="alert alert-danger m-6 alert-dismissible" style="margin-top: 60px;">{{ \Session::get('error') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            {{ \Session::forget('error') }}
        @endif
                    <form method="post" action="{{ route('surveyMailSend') }}" enctype="multipart/form-data" class="m-5">
                <!-- @csrf -->
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="date_created" class="form-label">Date created</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="date" class="form-control" id="date_created" name="date_created" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="sender_email" class="form-label">Email</label>
                <input type="text" class="form-control" id="sender_email" name="sender_email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="form-label">Entity</label>
                <select name="email" class="form-control">
                    <option></option>
                    @foreach($entities as $entity)
                        <option value="{{ $entity->entity_email }}">{{ $entity->entity_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="purpose" class="form-label">Purpose / Intention</label>
                <input type="text" class="form-control" id="purpose" name="purpose" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Reminder (Answers are subject ot only 3 choices)</p>
            </div>
        </div>
        <br>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>1. Question</b>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst1" class="s-q-first1" type="radio" name="question1" value="Option 1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst2" class="s-q-first2" type="radio" name="question1" value="Option 2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFirst3" class="s-q-first3" type="radio" name="question1" value="Option 3" />
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
                <input style="margin-top: 5px;" id="sQSecond1" class="s-q-second1" type="radio" name="question2" value="Option 1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQSecond2" class="s-q-second3" type="radio" name="question2" value="Option 2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQSecond3" class="s-q-second3" type="radio" name="question2" value="Option 3" />
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
                <input style="margin-top: 5px;" id="sQThird1" class="s-q-third1" type="radio" name="question3" value="Option 1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQThird2" class="s-q-third2" type="radio" name="question3" value="Option 2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQThird3" class="s-q-third3" type="radio" name="question3" value="Option 3" />
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
                <input style="margin-top: 5px;" id="sQFourth1" class="s-q-fourth1" type="radio" name="question4" value="Option 1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFourth2" class="s-q-fourth2" type="radio" name="question4" value="Option 2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFourth3" class="s-q-fourth3" type="radio" name="question4" value="Option 3" />
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
                <input style="margin-top: 5px;" id="sQFifth1" class="s-q-fifth1" type="radio" name="question5" value="Option 1" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 1
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFifth2" class="s-q-fifth2" type="radio" name="question5" value="Option 2" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 2
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <input style="margin-top: 5px;" id="sQFifth3" class="s-q-fifth3" type="radio" name="question5" value="Option 3" />
            </div>
            <div class="col-md-2" style="margin-top: 9px;">
                Option 3
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 15px;"><span id="s-q-fifth-text"></span></p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="attachment" class="form-label">File upload</label>
                <input style="height: 2.7em;" class="form-control" type="file" id="attachment" name="attachment">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="submit" name="Send mail" class="btn btn-primary">
                    </form>
                </div>
            </div>  
        </div>
    </body>
</html>
<style>
    input[type=radio] {
    border: 0px;
    width: 100%;
    height: 2em;
}
</style>