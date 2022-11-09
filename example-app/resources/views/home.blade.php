<!DOCTYPE>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>KinosPois</title>
</head>

<body>
     
    <div class="blocks1"> {{ $FilmOne }}<br>
        {{ $descriptionone }}
        </div>
        <div class="blocks2">{{$FilmTwo}}<br>
        {{ $descriptiontwo }}
        </div> 
        <div class="blocks3">{{$FilmThree}}<br>
        {{ $descriptionthree }}
        </div>
        <div class="blocks4">{{$FilmFour}}<br>
        {{ $descriptionfour }}
        </div>    
</body>

</html>