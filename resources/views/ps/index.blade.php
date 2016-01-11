<!DOCTYPE html>
<html>
<head>
    <script src="https://use.typekit.net/ghh5jln.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
    <meta name="copyright" content="Copyright Maccery.com 2013">
    <meta name="email" content="tom@yourtaximeter.com">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW"/>
    <meta property="og:image" content="http://maccery.com/ps/fblogo.png" />
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
<div class="content-row" id="header">
    <div class="container">
        <h1><a href="/">maccery</a>/ps</h1>
        <h3>the original personal statement helper</h3>
    </div>
</div>
<div class="container">
    <ul class="list list-unstyled">
        <li>No need to login to UCAS</li>
        <li>It uses UCAS's method of counting lines (94 characters max per line)</li>
        <li>It uses UCAS's method of counting characters</li>
        <li>See how small changes affect your line and character count instantly, unlike on UCAS's clunky online form</li>
        <li>Optimised for smartphones for you on-the-go people</li>
        <li><b>Update (January 2016)</b>: This has been completely re-written, new features to come soon!</li>
    </ul>
</div>
<hr>
<div class="content-row">
    <div class="container">
        <form class="container form-horizontal" role="form" action="{{ route('ps') }}" method="post" target="#ps-result">
            <div class="form-group">
                <textarea name="statement" class="form-control" placeholder="Paste your personal statement here" rows="10"></textarea>
            </div>
            <div class="form group">
                <button type="submit" class="btn btn-danger">Analyse</button>
            </div>
        </form>
    </div>
</div>
<hr>
<div class="container" id="ps-result">
</div>
<hr>
<div id="copyright" class="container">
    <p>Copyright &copy; 2013-16 <a href="http://maccery.com" target="_blank">Maccery</a>. <b>Submitted personal statements are not stored.</b></p>
</div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="{{ asset('js/global.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/framework.js') }}" type="text/javascript"></script>
</body>
</html>