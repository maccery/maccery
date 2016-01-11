<!DOCTYPE html>
<html>
<head>
    <script src="https://use.typekit.net/ghh5jln.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
    <meta name="copyright" content="Copyright Maccery.com 2016">
    <meta name="email" content="support@yourtaximeter.com">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW"/>
    <meta property="og:image" content="{{ asset('ps/fblogo.png') }}" />
    <meta property="og:title" content="Maccery's Personal Statement Helper | UCAS line simulator, word count and more!" />
    <meta property="og:url" content="http://maccery.com/ps/" />
    <meta property="og:description" content="Analyse your personal statement, simulate UCAS's strange line counting and much more - all in real time. "/>
    <meta property="description" content="Analyse your personal statement, simulate UCAS's strange line counting and much more - all in real time. "/>
    <meta name="keywords" content="personal statement, ucas, ucas line count, university, university applications, word cloud, word occurences, personal statement help, ucas application" />
    <meta name="author" content="Maccery">
    <meta name="Rating" content="General">
    <link rel="stylesheet" href="{{ asset('css/ps.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;">
    <title>Personal Statement Helper | UCAS line simulator, word count and more! | Maccery.com</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/ps/favicon.ico') }}">
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-20685634-3']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#header">Home</a></li>
            <li><a href="#statistics">Spearman's Rank, Statistics Calculator</a></li>
            <li><a href="#decimal-search">Decimal Search</a></li>
            <li><a href="#newton-raphson">Newton's Method</a></li>
            <li><a href="#fixed-point">Fixed Point Iteration</a></li>
        </ul>
    </div>
</div>

<div class="content-row" id="header">
    <div class="container">
        <h1><a href="/">maccery</a>/maths</h1>
        <h3>helping gcse/a-level students</h3>
    </div>
</div>
@yield('content')
<hr>
<div id="copyright" class="container">
    <h4>Like this? <a href="{{ route('home') }}">Get in touch.</a></h4>
    <p>Copyright &copy; 2013-16 <a href="http://maccery.com" target="_blank">Maccery</a>. <b>Submitted personal statements are not stored.</b></p>
</div>

<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="{{ asset('js/global.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/framework.js') }}" type="text/javascript"></script>
</body>
</html>