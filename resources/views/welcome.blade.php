
<html>
<head>
    <script src="//use.typekit.net/ghh5jln.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
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
            strings: ['<a href="https://github.com/maccery" target="_blank">github</a>', '<a href="https://angel.co/tom-macmichael" target="_blank">angel.co</a>', '<a href="https://uk.linkedin.com/in/tommacmichael" target="_blank">linkedin</a>', '<a href="http://medium.com/@maccery" target="_blank">medium</a>', '<a href="http://twitter.com/maccery" target="_blank">twitter</a>', '<a href="http://instagram.com/maccery" target="_blank">instagram</a>'],
            typeSpeed: 50,
            backSpeed: 50,
            backDelay: 1200,
            contentType: 'html',
            loop: true,
        });
    });
</script>
<div class="intro">
    <header class="splash-header">
        <div class="text-vertical-center center">
            <h1>hey, i'm tom.</h1>
            <h2>I like making stuff</h2>
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
</div>
<div class="content-row-grey text-center">
    <div class="container padding">
        <div class="row">
            <a href="http://yatter.chat">
                <div class="col-sm-6">
                    <h2>Yatter</h2>
                    <p>Connecting university students with nearby friends. I cofounded and continue to develop this
                        while at university.</p>
                </div>
            </a>
            <a href="http://yourtaximeter.com">
                <div class="col-sm-6">
                    <h2>YourTaximeter</h2>
                    <p>A startup aimed at taxi fare estimates. I founded and codeveloped this site, currently 70k a
                        month using it.</p>
                </div>
            </a>
        </div>
        <div class="row">
            <a href="{{ route('maths') }}">
                <div class="col-sm-6">
                    <h2>Maths Tools</h2>
                    <p>10,000 people a month use my simple maths tools that I made when I was 16.</p>
                </div>
            </a>
            <a href="{{ route('ps') }}">
                <div class="col-sm-6">
                    <h2>Personal Statement Tools</h2>
                    <p>Hundreds of thousands have used my personal statement analyser for university applications.</p>
                </div>
            </a>
        </div>
        <div class="row">
            <a href="http://isitbusy.in">
                <div class="col-sm-6">
                    <h2>isitbusy.in</h2>
                    <p>A small project that I plan to open-source, which uses public data from universities to estimate
                        how busy
                        buildings will be at certain times of day.</p>
                </div>
            </a>
            <a href="http://edinburghcharityfashionshow.co.uk">
                <div class="col-sm-6">
                    <h2>ECFS 2017</h2>
                    <p>The largest student-led charity fashion show in Europe. Edinburgh Charity Fashion Show's 2017 website.</p>
                </div>
            </a>
        </div>
    </div>
</div>
</html>