<?php
	include('evalmath.class.php');

	if (!($_POST[accuracy]) OR !($_POST['function']))
	{
		die("Please complete all fields.");
	}

	function wordconvert($src)
	{
		$src = str_replace("‘", "'", $src);
		$src = str_replace("’", "'", $src);
		$src = str_replace("”", '"', $src);
		$src = str_replace("“", '"', $src);
		$src = str_replace("–", "-", $src);
		$src = str_replace("…", "...", $src);

		return $src;

	}

	if (strpos($_POST[start], '-'))
	{
		$x = str_replace('-', '', $_POST[start]);
		$x = $x - $x - $x;
	}
	else
	{
		$x = $_POST[start];
	}

	$n = "1";
	$dc = $_POST[accuracy];

	echo '<table class="table table-condensed table-hover">';

	while ($t != 'stop')
	{
		$functionn = wordconvert($_POST['function']);
		$diff = wordconvert($_POST[dydx]);
		$m = new EvalMath;
		$m->suppress_errors = TRUE;

		if ($m->evaluate('y(x) = ' . $functionn))
		{
			$y = $m->e("y($x)");
		}
		else
		{
			print "\t<p>Could not evaluate function: " . $m->last_error . "</p>\n";
		}

		if ($m->evaluate('y(x) = ' . $diff))
		{
			$dydx = $m->e("y($x)");
		}
		else
		{
			print "\t<p>Could not evaluate function: " . $m->last_error . "</p>\n";
		}

		$answeri = "$x-($y/$dydx)";
		$answerr = str_replace("$x", "<i style='color: red;'>$x</i>", $answeri);
		$answerr = str_replace("$y", "<i style='color: green;'>$y</i>", $answerr);
		$answerr = str_replace("$dydx", "<i style='color: blue;'>$dydx</i>", $answerr);

		$answer = "$x-($y/$dydx)";
		@eval("\$answer = $answer;");
		$xworkingout = str_replace('x', "<font style='color: red;'>x</font>", $_POST['function']);
		$dydxworkingout = str_replace('x', "<font style='color: red;'>x</font>", $_POST[dydx]);
		$nn = $n + 1;

		if ($_POST[working] && ($n > '0'))
		{
			echo "
    <tr>
        <td valign='top'><b>x<sub>$n</sub></b></td>
        <td><font style=\"color:green;\"><b>f(x) = $y</b> = $xworkingout<br></font><font style=\"color:blue;\"><b>f'(x) = $dydx</b> = $dydxworkingout</font><br><b>x<sub>$n</sub> = $answerr = $answer</b></td>
    </tr>";

		}
		else
		{
			echo "
    <tr>
        <td valign='top'><b>x<sub>$n</sub></b></td>
        <td>$answer</td>
    </tr>";
		}

		if ($round == round($answer, $dc))
		{
			$t = "stop";
		}
		if ($n >= "40")
		{
			$t = "stop";
		}

		$x = $answer;
		$n = $n + 1;

		$round = round($answer, $dc);
	}
	echo "</table>";

	if ($n >= "40")
	{
		echo "<p>Your equation doesn't give a root.</p>";
	}
	else
	{
		echo "<p><strong>Answer:</strong> $round";
	}