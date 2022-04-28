<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .border {
            list-style: none;
            padding: 0;
        }
        .border li {
            font-family: "Trebuchet MS", "Lucida Sans";
            padding: 7px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            border-left: 10px solid #f05d22;
            box-shadow: 2px -2px 5px 0 rgba(0,0,0,.1),
            -2px -2px 5px 0 rgba(0,0,0,.1),
            2px 2px 5px 0 rgba(0,0,0,.1),
            -2px 2px 5px 0 rgba(0,0,0,.1);
            font-size: 20px;
            letter-spacing: 2px;
            transition: 0.3s all linear;
        }
        .border li:nth-child(2){border-color: #8bc63e;}
        .border li:nth-child(3){border-color: #fcba30;}
        .border li:nth-child(4){border-color: #1ccfc9;}
        .border li:nth-child(5){border-color: #493224;}
        .border li:hover {border-left: 10px solid transparent;}
        .border li:nth-child(1):hover {border-right: 10px solid #f05d22;}
        .border li:nth-child(2):hover {border-right: 10px solid #8bc63e;}
        .border li:nth-child(3):hover {border-right: 10px solid #fcba30;}
        .border li:nth-child(4):hover {border-right: 10px solid #1ccfc9;}
        .border li:nth-child(5):hover {border-right: 10px solid #493224;}

    </style>
</head>
<body>
    <h1>Список товаров:</h1>
    <ol class="border">
        @foreach($arrList as $value)
            <li>{{$value}}</li>
        @endforeach
    </ol>
</body>
</html>
