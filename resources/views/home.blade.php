<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .center {
            text-align: center;
            font-size: 100px;
            color: blue;
        }
    </style>
</head>
<body>
    <header class="headstyle">
        <a href="/">HOME</a>
        <a href="{{ route('about') }}"> ABOUT</a>
    </header>

    </header>

    <div class="center">
      <h1> {{$title}} </h1>
    </div>
    
</body>
</html>