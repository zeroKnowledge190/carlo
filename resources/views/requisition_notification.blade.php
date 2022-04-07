<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
        <title>Requisition From CARLOPH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center m-1">
        <h1 class="lead mt-3">CARLOPH</h1>
            <p class="lead">Please check attachment</p>
            <p class="lead">{{ $date_created }}</p>
            <p class="lead">From: {{ $fullname }} - {{ $sender_email }}</p> 
            <p class="lead">Job Title: {{ $job_title }}</p>
            <p class="lead">Company: {{ $company }}</p>
            <p class="lead">Requisition: {{ $requisition_body }}</p>
            <p class="lead">Location: {{ $location }}</p>
            <p class="lead">Request: {{ $request_type }}</p>
            <p class="lead">Others: {{ $others }}</p> 
            <p class="lead">Priority: {{ $priority }}</p>
            <p class="lead">Due date: {{ $due_date }}</p> 
            <p class="lead">Definition: {{ $definition }}</p> 
        </div>
    </body>
</html>