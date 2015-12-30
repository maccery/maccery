<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
    <meta name="copyright" content="Copyright Maccery.com 2013">
    <meta name="email" content="tom@yourtaximeter.com">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW"/>
    <title>Spearman's Rank Calculator, Newton's Method Calculator, Fixed Point Iteration Calculator, Decimal Search Calculator | Maccery.com/maths</title>
    <meta name="keywords" content="newton-raphson, newton's method calculator, newton raphson, fixed point, fixed point iteration, rearrangement, decimal search, calculator, spearmans, srcc, rank, standard deviation, iqr, quartiles, upper quartile, lower quartile, range, root mean square deviation, median, mean, calculator, generator, spearman's rank calculator, spearmans rank calculator, calculate spearmans rank">
    <meta name="author" content="Maccery">
    <meta name="Rating" content="General">
    <link rel="stylesheet" href="../css/framework.css" type="text/css"/>
    <link rel="stylesheet" href="../css/global.css" type="text/css"/>
    <link rel="stylesheet" href="../css/maths.css" type="text/css"/>
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;">
	<meta property="description" content="Calculate Spearman's Rank, Newton-Raphson, Fixed Point Iteration, Decimal Search and more. All with workings. "/>

	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-20685634-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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

    <div class="jumbotron" id="header">
        <h1><a href="/">maccery</a>/maths</h1>

        <h2><i>perfect</i> for gcse/a-level students</h2>
    </div>
    <div class="container" id="statistics">
        <h2>Statistics calculator</h2>

        <p>
            This will calculate <b>spearman's rank</b>, (root) mean square deviation, standard deviation, variance, mean,
            mode, median, upper quartile, lower quartile, IQR, range, value totals.
        </p>

        <form class="container form-horizontal" role="form" action="/maths/statistics.php" method="post"
              target="#statistics-result">
            <div class="form-group">
                <textarea name="list1" class="form-control" placeholder="Data 1. Separate by new lines."
                          rows="5"></textarea>
            </div>
            <div class="form-group">
                <textarea name="list2" class="form-control"
                          placeholder="Data 2. Separate by new lines. Only enter data here if you want to calculate information about two sets of data or if you want to calculate Spearman's Rank."
                          rows="5"></textarea>
            </div>
            <div class="form group">
                <button type="submit" class="btn btn-danger">Calculate</button>
            </div>
        </form>

        <div class="result" id="statistics-result"></div>
    </div>

    <hr>
    <div class="container" id="decimal-search">
        <h2>Decimal search calculator</h2>

        <form class="container form-horizontal" role="form" action="/maths/decimal_search_calculator.php" method="post"
              target="#decimal-search-result">
            <div class="form-group">
                <label>y = </label>
                <input type="text" class="form-control" name="function" placeholder="Enter your equation ">

                <p class="help-block">Make sure you enclose powers in brackets. For example 3x<sup>2</sup>+3x should be
                    written as (3x^2)+3x.
                    <br><b>For powers:</b> ^ symbol. Example: 4^2 is 4 squared.<br>
                    <b>For square root:</b> sqrt(x)</p>
            </div>
            <div class="form-group">
                <label>Accuracy</labeL>
                <input type="text" class="form-control" name="accuracy" placeholder="Enter number of decimal places">
            </div>
            <div class="form-group">
                <label>Minimum value</label>
                <input type="text" class="form-control" name="min" placeholder="Minimum value, e.g 0">
            </div>
            <div class="form-group">
                <label>Maximum value</label>
                <input type="text" class="form-control" name="max" placeholder="Maximum value, e.g 1">
            </div>

            <div class="form group">
                <button type="submit" class="btn btn-danger">Calculate</button>
            </div>
        </form>
        <div class="result" id="decimal-search-result"></div>
    </div>

    <hr>
    <div class="container" id="newton-raphson">
        <h2>Newton's method calculator</h2>

        <form class="container form-horizontal" role="form" action="/maths/newton_raphson_calculator.php" method="post"
              target="#newton-raphson-result">
            <div class="form-group">
                <label>f(x) = </label>
                <input type="text" class="form-control" name="function" placeholder="Enter your equation">
            </div>
            <div class="form-group">
                <label>(dy/dx) f'(x) =</label>
                <input type="text" class="form-control" name="dydx" placeholder="Enter your equation">

                <p class="help-block">Make sure you enclose powers in brackets. For example 3x<sup>2</sup>+3x should be
                    written as (3x^2)+3x.
                    <br><b>For powers:</b> ^ symbol. Example: 4^2 is 4 squared.<br>
                    <b>For square root:</b> sqrt(x)
                </p>
            </div>
            <div class="form-group">
                <label>Accuracy</label>
                <input type="text" class="form-control" name="accuracy" placeholder="Enter the number of decimal places">
            </div>
            <div class="form-group">
                <label>Starting value</label>
                <input type="text" class="form-control" name="start" placeholder="Enter the starting value">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="working"> Show working
                    </label>
                </div>

            </div>
            <div class="form group">
                <button type="submit" class="btn btn-danger">Calculate</button>
            </div>
        </form>
        <div class="result" id="newton-raphson-result"></div>
    </div>
    <hr>
    <div class="container" id="fixed-point">
        <h2>Fixed point iteration calculator</h2>

        <form class="container form-horizontal" role="form" action="/maths/fixed_point_calculator.php" target="#fixed-point-result"
              method="post">
            <div class="form-group">
                <label>x = </label>
                <input type="text" class="form-control" name="function" placeholder="Enter your equation">

                <p class="help-block">Make sure you enclose powers in brackets. For example 3x<sup>2</sup>+3x should be
                    written as (3x^2)+3x.
                    <br><b>For powers:</b> ^ symbol. Example: 4^2 is 4 squared.<br>
                    <b>For square root:</b> sqrt(x)
                </p>
            </div>
            <div class="form-group">
                <label>Accuracy</label>
                <input type="text" class="form-control" name="accuracy" placeholder="Enter the number of decimal places">
            </div>
            <div class="form-group">
                <label>Starting value</label>
                <input type="text" class="form-control" name="start" placeholder="Enter the starting value">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="working"> Show working
                    </label>
                </div>

            </div>
            <div class="form group">
                <button type="submit" class="btn btn-danger">Calculate</button>
            </div>
        </form>
        <div class="result" id="fixed-point-result"></div>
    </div>
    <hr>
    <div id="copyright" class="container">
        <p>Copyright &copy; <?php date_default_timezone_set('Europe/London'); echo date('Y'); ?> <a href="http://maccery.com" target="_blank">Maccery</a>. Design and
            coded by <a href="http://maccery.com" target="_blank">Maccery</a>.</p>
    </div>

    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="../js/global.js" type="text/javascript"></script>
    <script src="../js/framework.js" type="text/javascript"></script>
</body>
</html>