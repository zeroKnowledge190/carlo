<!DOCTYPE html>
    <html>
        <head>
            <title>CARLO Requisition</title>
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
                <h4 style="margin-top: -45px;" class="question-label"><b>Requisition Letter (Requisisyon)</b></h4>
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
                    <form method="post" action="{{ route('requisitionMailSend') }}" enctype="multipart/form-data" class="m-5">
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
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="job_title" class="form-label">Job Title (Titulo o Trabaho)</label>
                <input type="text" class="form-control" id="job_title" name="job_title" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="company" class="form-label">Company (Kompanyang Pinagtrabahuan)</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="sender_email" class="form-label">Email</label>
                <input type="text" class="form-control" id="sender_email" name="sender_email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Body (Ang inyong requisition)</label>
                    <textarea rows="4" class="form-control q-question-body" name="requisition_body" required></textarea>
                <span id="q-opinion-body-text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
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
            <p style="margin-left: 15px;"><span id="r-request-type-text"></span></p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Others</label>
                    <input type="text" class="form-control r-others" name="others" />
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
<style>
    input[type=radio] {
    border: 0px;
    width: 100%;
    height: 2em;
}
</style>