<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Events page for show the <br>database's datas</h1>
    <hr>
    <h2>From mysql workbench</h2>
    @foreach ($events as $events)
    <p><span>Name -</span> {{$events->name}} <b>&</b> <span>Description -</span> {{$events->description}} <b>&</b> <span>Age</span> {{$events->age}}</p>

    @endforeach
</body>
</html>
