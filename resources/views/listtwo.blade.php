<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .dbl-border {
            list-style: none;
            margin: 0;
        }
        .dbl-border div {
            margin: 10px 0;
            position: relative;
        }
        .dbl-border a {
            width: 100%;
            color: #808285;
            text-decoration: none;
            border-left: 6px solid #ABC7EA;
            display: block;
            padding-left: 25px;
            height: 44px;
            line-height: 44px;
            font-size: 20px;
            position: relative;
            transition: 0.3s linear;
        }
        .dbl-border a:before {
            content: "";
            width: 6px;
            height: 70%;
            background: #EE997C;
            position: absolute;
            top: 15%;
            left: -12px;
        }
        .dbl-border div:before {
            content: "";
            width: 6px;
            height: 40%;
            background: #EFDD89;
            position: absolute;
            top: 30%;
            left: -12px;
        }
        .dbl-border a:hover {background: #D4D8D9;}
    </style>
</head>
<body>
    <div class="dbl-border">
        <h1>Список телефонов:</h1>
        @foreach($arrCar as $value)
            <div {{$loop->iteration}}><a>{{$value}}</a></div>
        @endforeach
    </div>
</body>
</html>
