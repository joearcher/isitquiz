<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Is It Quiz Day?') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    @include('fb')
    <div id="app">
        @yield('content')
    </div>
    <!-- Button trigger modal -->
    <div class="creds">
        &copy <a href="https://twitter.com/joe_archer">Joe Archer</a>
    </div>
    
    <script src="/js/app.js"></script>
    <script src="/js/selector.js"></script>
    <script>
    var step = 4, // colorChage step, use negative value to change direction
    ms   = 10,  // loop every
    $uni = $('.yes'),
    txt  = $uni.text(),
    len  = txt.length,
    lev  = 360/len,
    newCont = "",
    itv;

    for(var i=0; i<len; i++)newCont += "<span style='color:hsla("+ i*lev +", 100%, 50%, 1)'>"+ txt.charAt(i) +"</span>";

    $uni.html(newCont); // Replace with new content
    var $ch = $uni.find('span'); // character

    function anim(){
        itv = setInterval(function(){
            $ch.each(function(){
            var h = +$(this).attr('style').split(',')[0].split('(')[1]-step % 360;
            $(this).attr({style:"color:hsla("+ h +", 100%, 50%, 1)"});
            });
        }, ms); 
    }
    anim();
    </script>
</body>
</html>
