
<html>
<head>
    <script src="https://use.typekit.net/ghh5jln.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
    <meta name="keywords" content="developer, tom macmichael, student, edinburgh, php, html, maths"/>
    <meta name="copyright" content="Copyright Maccery.com 2013">
    <meta name="author" content="Maccery">
    <meta name="email" content="tom@yatter.chat">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW"/>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;">
    <meta property="description" content="Freelance web developer from The University of Edinburgh."/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <title>Maccery - Web Development</title>
</head>
<body>
<div id="splash-header-wrapper" class="splash-header">
    <div id="splash-header" class="splash-header"></div>
</div>
<script>
    $(function(){
        $(".typing").typed({
            strings: ['<a href="https://angel.co/tom-macmichael" target="_blank">angel.co</a>', '<a href="https://uk.linkedin.com/in/tommacmichael" target="_blank">linkedin</a>', '<a href="http://medium.com/@maccery" target="_blank">medium</a>', '<a href="http://twitter.com/maccery" target="_blank">twitter</a>', '<a href="http://instagram.com/maccery" target="_blank">instagram</a>'],
            typeSpeed: 50,
            backSpeed: 50,
            backDelay: 1200,
            contentType: 'html',
            loop: true,
        });
    });
</script>
<header class="splash-header">
    <div class="text-vertical-center center">
        <h1>hey, i'm tom.</h1>
        <h2>I do startups + websites</h2>
    </div>
</header>
<div class="content-row">
    <div class="container jumbotron">
        <div class="row text-center">
            <p id="head"><small>want to know more?</small><br>
                stalk me on <span class="typing"></span>
            </p>
        </div>
    </div>
</div>
</html>