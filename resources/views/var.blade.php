<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        blockquote {
            margin: 0;
            background: white;
            border-top: 5px solid #EAF9F9;
            border-bottom: 5px solid #EAF9F9;
            color: #3A3C55;
            padding: 30px 30px 30px 90px;
            position: relative;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
        }
        blockquote:before {
            content: "\201C";
            font-family: serif;
            position: absolute;
            left: 20px;
            top: 20px;
            color: white;
            background: #FB6652;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 50px;
            line-height: 1.35;
            text-align: center;
        }
        blockquote p {
            margin: 0 0 16px;
            font-size: 22px;
            letter-spacing: .05em;
            line-height: 1.4;
        }
        blockquote cite {
            font-style: normal;
        }
    </style>
</head>
<body>
    <h1>Моя любимая строчка книги:</h1>
    <blockquote>
        <p>{{$Text}}</p>
        <footer>- <cite>Геральт из Ривии</cite></footer>
    </blockquote>
</body>
</html>
