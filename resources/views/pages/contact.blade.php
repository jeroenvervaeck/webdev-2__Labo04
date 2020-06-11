<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {font-size: 16px;}
        input, textarea {
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 1rem;
            margin: 0.2rem;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <form action="" method="post">
        @csrf

        <input type="text" name="name" id="name" placeholder="naam">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <input type="text" name="subject" id="subject" placeholder="onderwerp">
        <textarea cols="30" rows="10" name="content" id="content" placeholder="bericht.."></textarea>
        <button type="submit">Verzend</button>
    </form>


</body>
</html>
