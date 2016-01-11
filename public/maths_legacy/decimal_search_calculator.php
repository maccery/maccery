<table class="table table-condensed table-hover">
<?php
	include('evalmath.class.php');

	if (!($_POST[max]) OR !($_POST[min]) OR !($_POST[accuracy]) OR !($_POST['function']))
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

	function newtable($min, $max, $function, $originalaccuracy, $accuracy, $lasttable = '')
	{
		$accuracy = $accuracy + 1;
		$m = new EvalMath;
		$m->suppress_errors = TRUE;

		if ($m->evaluate('y(x) = ' . $function))
		{
			echo '

    <tr>
        <th>x</th>
        <th>f(x)</th>
    </tr>';
			$mine = $accuracy - 1;

			$newaccuracy = '0.' . str_repeat('0', ($mine)) . '1';
			for ($x = $min; $x <= $max; $x += $newaccuracy)
			{
				$change = '';
				$x = number_format($x, $accuracy);

				$y = $m->e("y($x)");
				if ($y > "0")
				{

					if ($positive === FALSE)
					{
						$mine = $accuracy - 1;
						$newaccuracy = '0.' . str_repeat('0', ($mine)) . '1';
						$newmin = $x - $newaccuracy;
						$newmax = $x;
						$change = 'yeah';
						$change = 'yeah';
					}
					$positive = TRUE;
				}
				else
				{
					if ($positive === TRUE)
					{
						$mine = $accuracy - 1;
						$newaccuracy = '0.' . str_repeat('0', ($mine)) . '1';

						$newmin = $x - $newaccuracy;
						$newmax = $x;
						$change = 'yeah';

					}
					$positive = FALSE;
				}

				echo "
    <tr>
        <td>$x</td>
        <td>" . $y . "</td>
    </tr>";

				if ($change == 'yeah')
				{
					$x = $max + 1;
				}

			}
			if ($newmax != '')
			{
				if ($accuracy >= $originalaccuracy)
				{
					$beforegreater = 'yes';
				}

				if ($lasttable == 'true')
				{
					$endloop = 'true';

				}

				if (($accuracy <= $originalaccuracy) && ($beforegreater == 'yes'))
				{
					$accuracy = $originalaccuracy;
					$lasttable = 'true';
					$endloop = 'true';

				}

				if ($endloop != 'true')
				{

					newtable($newmin, $newmax, $function, $originalaccuracy, $accuracy, $lasttable);
				}
				else
				{
					$mine = $accuracy;
					$newaccuracy = '0.' . str_repeat('0', ($mine)) . '5';
					if (eregi('-', $newmin) && eregi('-', $newmax))
					{
						$sign = '&le;';
						$ans = $newmax;
					}
					else
					{
						$sign = '&le;';
						$ans = $newmin;
					}


					echo "";
				}

			}

		}
		else
		{
			print "\t<p>Could not evaluate function: " . $m->last_error . "</p>\n";
		}
	}


	$acc = '0';

	$functionn = wordconvert($_POST['function']);
	newtable($_POST[min], $_POST[max], $functionn, $_POST[accuracy], $acc);
	echo "</table>";