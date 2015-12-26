
<html>
<head><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-768.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
    <script src="https://use.typekit.net/ghh5jln.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{ asset('typed.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://yatter.chat/css/app.css">
    <title>yatter.chat | chat locally</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://yatter.chat/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="chat locally, local chat, chat rooms, college chat rooms, localised chat, meet people nearby, nearby friends, iphone app, app,
    university, university chat rooms, meet people at university, nearby facebook friends" />
    <meta name="copyright" content="Copyright Yatter - 2015">
    <meta name="author" content="Yatter.chat">
    <meta name="email" content="hello@yatter.chat">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://yatter.chat/img/og-image.png" />
    <meta property="og:title" content="Yatter">
    <meta property="og:description" content="Yatter lets you chat with the people around you. Whether you're in a lecture, in halls, or the university library.
     Simply login and chat.">
    <meta name="description" content="Yatter lets you chat with the people around you. Whether you're in a lecture, in halls, or the university library.
     Simply login and chat." />
    <meta property="fb:app_id" content="980307545366015" />
    <script>document.documentElement.className += ' wf-loading';</script>
</head>
<body>
<div id="splash-header-wrapper" class="splash-header"  style="background-image:url('https://scontent-lhr3-1.xx.fbcdn.net/hphotos-xat1/t31.0-8/11143462_10154004762598356_1120482107771136028_o.jpg');">
    <div id="splash-header" class="splash-header"></div>
</div>
<script>
    $(function(){
        $(".element").typed({
            strings: ['<a href="http://angel.co/maccery">angel.co</a>', "linkedin", "facebook"],
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
        <p class="lead" style="font-family: 'brandon-grotesque'; font-size: 95px;">hey, i'm tom.</p>
        <p class="lead" style="font-family: 'brandon-grotesque'; font-size: 55px;">I do startups + websites</p>
    </div>
</header>
<div class="content-row">
    <div class="container jumbotron">
        <div class="row text-center">
            <p class="lead" style="font-family: 'brandon-grotesque'; font-size: 35px;">stalk me on <span class="element"></span></p>
        </div>
    </div>
</div>
</html>