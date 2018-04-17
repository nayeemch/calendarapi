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
                        <li><a href="{{route('create',$id)}}">Add New</a></li>
                        <li><a href="{{route('api')}}">GET JSON API</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(session('successMsg'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Well done!</strong> {{ session('successMsg')}}
        </div>
        @endif
    </div>
    <div class="container">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Holiday Name</th>
                    <th class="text-center">Holiday Details</th>
                    <th class="text-center">Holiday Image Url</th>
                    <th class="text-center">Holiday Date</th>
                    <th class="text-center">Holiday Month</th>
                    <th class="text-center">Holiday Year</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showData as $holiday)
                <tr>
                    <td class="text-center">{{ $holiday->holiday_name }}</td>
                    <td class="text-center">{{ $holiday->holiday_details }}</td>
                    <td class="text-center"><img src="{{ $holiday->holiday_img_url }}" alt="" height="50" width="100" style="object-fit: cover"></td>
                    <td class="text-center">{{ $holiday->holiday_date }}</td>
                    <td class="text-center">{{ $holiday->months_name }}</td>
                    <td class="text-center">{{ $holiday->holiday_year }}</td>
                    <td class="text-center">
                        <a href="{{route('edit',$holiday->id)}}" class="btn btn-raised btn-sm btn-primary">Edit</a> |
                        <form method="POST" style="display: none;" id="delete-form-{{$holiday->id}}" action="{{route('delete',$holiday->id)}}">
                            {{csrf_field()}} {{method_field('delete')}}
                            <input type="text" name="calendar_type_id" value="{{$holiday->calendar_type_id}}">
                        </form>
                        <a onclick="if(confirm('Are you sure?')){
                event.preventDefault(); 
                document.getElementById('delete-form-{{$holiday->id}}').submit();
            } else{event.preventDefault();}" class="btn btn-raised btn-sm btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {{-- {{ $showData->links() }} --}}
        </div>
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