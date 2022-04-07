<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        <title>Application From CARLOPH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center m-1">
        <h1 class="lead mt-3">CARLOPH</h1>
            <p class="lead">Please check attachment</p>
            <p class="lead">{{ $date_created }}</p>
            <p class="lead">From: {{ $firstname }} {{ $lastname }} - {{ $sender_email }}</p> 
            <p class="lead">Subject: {{ $subject }}</p> 
            <p class="lead">Dear Sir / Ma'am: {{ $dear }}</p> 
        </div>
   </body>
</html>

