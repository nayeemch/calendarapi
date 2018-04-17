<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CalendarAPI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container text-center button-container">
        @foreach($showData as $showData)
        <a href="{{route('showdata',$showData->id)}}">
            <button type="button" class="btn btn-primary btn-custom">{{$showData->calendar_type}}</button>
        </a>
        @endforeach
    </div>
    <!-- container -->
    <div class="container text-center">
        <a href="{{route('api')}}">
            <button type="button" class="btn btn-danger btn-custom">GET API</button>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script type="text/javascript">
    $.material.init()
    </script>
</body>

</html>