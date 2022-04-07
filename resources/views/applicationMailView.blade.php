<!DOCTYPE html>
    <html>
        <head>
            <title>CARLO Application</title>
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
                <h4 style="margin-top: -45px;" class="question-label"><b>Application Letter (Applikasyon)</b></h4>
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
                    <form method="post" action="{{ route('applicationMailSend') }}" enctype="multipart/form-data" class="m-5">
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
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="purpose" class="form-label">Dear Sir / Ma'am</label>
                <input type="text" class="form-control" id="purpose" name="dear" required>
            </div>
        </div>
        <br />
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