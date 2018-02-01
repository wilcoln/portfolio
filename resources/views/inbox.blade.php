<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inbox</title>
    <!-- Icons  -->
    <link rel="stylesheet" href="css/linea-icons.css">
    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
</head>
<body style=" background:url('../img/back.jpg');
    background-size:cover;
    background-position:center;
    background-blend-mode: color;
    font-size: 1.4rem;">
    <div class="container p-5">
        <div class="row mb-5 align-items-center">
            <div class="col-3">
                <h1 class="text-light">Wilcoln's inbox</h1>
            </div>
            <div class="col-3 ml-auto mr-3">
                <a href="/" class="d-flex align-items-center justify-content-center btn btn-block btn-outline-success" role="button"> <span class="display-4 mb-1">&larr;</span>&nbsp; &nbsp;  Back to home</a>
            </div>
        </div>
        <div class="list-group">
            @foreach($messages as $message)
                <div class="list-group-item">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-5"><strong>{{$message->name}}</strong> - {{$message->email}}</div>
                                <div class="col-3 ml-auto">{{$message->created_at}}</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>{{$message->message}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>