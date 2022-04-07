<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        <title>Survey From CARLOPH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center m-1">
        <h1 class="lead mt-3">CARLOPH</h1>
            <p class="lead">Please check attachment</p>
            <p class="lead">{{ $date_created }}</p>
            <p class="lead">From: {{ $firstname }} {{ $lastname }} - {{ $sender_email }}</p> 
            <p class="lead">Description: {{ $description }}</p> 
            <p class="lead">Purpose: {{ $purpose }}</p> 
            <p class="lead">Question 1: {{ $question1 }}</p>
            <p class="lead">Question 2: {{ $question2 }}</p> 
            <p class="lead">Question 3: {{ $question3 }}</p> 
            <p class="lead">Question 4: {{ $question4 }}</p> 
            <p class="lead">Question 5: {{ $question5 }}</p> 
        </div>
   </body>
</html>

