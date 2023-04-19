<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
        .container{
            background-color: #F3F7F0;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 2px;
            margin-top: 30px;
            text-align: center;
        }

        h1{
            color: #2f288ab5;
        }

        button{
            border-radius: 3px;
            border-color: #2f288ab5;
            padding: 10px;
            background-color: #2f288ab5;
        }

        button:hover{
            background-color: #ff7926;
        }

        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>{{__('ui.ciao')}}</h1>
        <h1>{{__('ui.work')}}</h1>
        <div class="row">

            <h2>{{$user->name}}</h2>
            <h4>{{$user->email}}</h4>
            <p>{{__('ui.candidate')}}</p>

        </div>
        <div>
            <img src="https://www.theglobeandmail.com/resizer/4Ziam-6Ai76P0sFq6ppJE4Z1PbU=/600x0/filters:quality(80):format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/tgam/6MJP3O4LZBHNLPV6DG4O2V7KM4.jpg" alt="">
        </div>
        <div>
            <button><a href="{{route('make.revisor',compact('user'))}}">{{__('ui.revisor')}}</a></button>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
