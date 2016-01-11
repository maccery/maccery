<?php
	include('evalmath.class.php');

	if (!($_POST[start]) OR !($_POST[accuracy]) OR !($_POST['function']))
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
		$m = new EvalMath;
		$m->suppress_errors = TRUE;

		if ($m->evaluate('y(x) = ' . $functionn))
		{
			$y = $m->e("y($x)");

			echo "
		<tr>
			<td><b>x<sub>$n</sub></b> = </td>
			<td>$y</td>
		</tr>";

			if ($_POST[working] && ($n > 1))
			{
				echo "
		<tr>
			<td></td>
			<td><font size='1'>" . str_replace('x', "<i style='color: red;'>x</i>", $_POST['function']) . "<br>" . str_replace('x', "<i style='color: red;'>$x</i>", $_POST['function']) . "</font></td>
	   </tr>";
			}

			if ($round == round($y, $dc))
			{
				$t = "stop";
			}

			if ($n >= "40")
			{
				$t = "stop";
			}

			$x = $y;
			$n = $n + 1;
			$round = round($y, $dc);
		}
		else
		{
			die("\t<p>Could not evaluate function: " . $m->last_error . "</p>");
		}
	}
	echo "</table><P>";

	if ($n >= "40")
	{
		echo "<p>Your equation doesn't give a root.</p>";
	}
	else
	{
		echo "<p><strong>Answer:</strong> $round</p>";
	}
