<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel UK - The most exciting coding group in the UK</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="bgimg">
    <div class="middle">
        <h1>LaravelUK Website Comming Soon!</h1>
        <hr>
        <p>Join us at #Larahack - February 3 - 4 2018!</p>
    </div>
    <div class="bottom-center text-center">
        <p>Laravel UK - The most exciting coding group in the UK</p>
    </div>
</div>
<div id="app">

</div>

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
