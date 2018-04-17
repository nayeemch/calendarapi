<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CalendarAPI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
</head>

<body>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="main-menu-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">Calendar<span style="font-weight: normal">API</span></a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{ route('create' ,$id )}}">Add New</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if($errors->any()) @foreach($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Oh snap!</strong> {{$error}}
        </div>
        @endforeach @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Add New Holiday</h3>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('store',$id)}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="holiday_name" class="col-md-2 control-label">Holiday Name</label>
                            <div class="col-md-10">
                                <input class="form-control" id="holiday_name" name="holiday_name" placeholder="holiday_name Here" type="text" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="holiday_details" class="col-md-2 control-label">Holiday Details</label>
                            <div class="col-md-10">
                                <input class="form-control" id="holiday_details" name="holiday_details" placeholder="holiday_details" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="holiday_img_url" class="col-md-2 control-label">Holiday Image URL</label>
                            <div class="col-md-10">
                                <input class="form-control" id="holiday_img_url" name="holiday_img_url" placeholder="Holiday Image URL here" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="holiday_date" class="col-md-2 control-label">Holiday Date</label>
                            <div class="col-md-10">
                                <input class="form-control" id="holiday_date" name="holiday_date" placeholder="Holiday Date here" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="holiday_year" class="col-md-2 control-label">Holiday Year</label>
                            <div class="col-md-10">
                                <input class="form-control" id="holiday_year" name="holiday_year" placeholder="Holiday Year here" type="text" required>
                            </div>
                        </div>
                        <input type="hidden" name="calendar_type_id" value="{{$id}}">
                        <div class="form-group">
                            <label for="months_name" class="col-md-2 control-label">Holiday Months Name</label>
                            <div class="col-md-10">
                                <select class="form-control" id="months_id" name="id">
                                    @foreach($months_array as $month)
                                    <option value="{{$month->id}}">{{$month->months_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--
                        <input type="text" value="{{$holiday->}}"> --}}
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <!-- <button type="button" class="btn btn-default">Cancel</button> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- panel-body -->
            </div>
            <!-- panel-heading -->
        </div>
        <!-- panel panel-default -->
    </div>
    <!-- container -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script type="text/javascript">
    $.material.init()
    </script>
</body>

</html>