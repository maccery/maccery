<?php
	$_POST[list1] = str_replace(",", "\n", $_POST[list1]);
	$_POST[list2] = str_replace(",", "\n", $_POST[list2]);
	$_POST[list1] = preg_replace('/\r\n|\r/', "\n", $_POST[list1]);
	$_POST[list2] = preg_replace('/\r\n|\r/', "\n", $_POST[list2]);

	$explode[1][number] = explode("\n", $_POST[list1]);
	$explode[2][number] = explode("\n", $_POST[list2]);

	$listone = str_replace(".", "", $_POST[list1]);
	$listtwo = str_replace(".", "", $_POST[list2]);

	function countif($arry, $numy)
	{
		$total = 0;
		$arr = $arry;
		$g = 0;
		$list = "";
		foreach ($arr as $name => $value)
		{
			$list = ",$value,$list,";
		}
		$list = $list;
		return substr_count($list, ",$numy,");
	}

	function rank($arr, $num)
	{
		$zz = $arr;
		$total = 0;
		$kl = number_format($num, 3, '', '');

		foreach ($zz as $name => $value)
		{
			$nl = number_format($value, 3, '', '');
			if ($nl < $kl)
			{
				$total = $total + 1;
			}
		}
		return ($total + 1) + ((countif($arr, $num) - 1) / 2);
	}

	if (count($explode[1][number]) == 1)
	{
		die("Please enter more than one number");
	}
	if (count($explode[2][number]) === 1)
	{
		$two_datas = FALSE;
	}
	else
	{
		$two_datas = TRUE;
	}
	if ($two_datas === TRUE)
	{
		if (count($explode[1][number]) != count($explode[2][number]))
		{
			die("The number of items in each box must be the same or the second box must be empty.");
		}

		foreach ($explode[1][number] as $g => $f)
		{
			$explode[1][rank][$g] = rank($explode[1][number], $f);
		}
		foreach ($explode[2][number] as $g => $f)
		{
			$explode[2][rank][$g] = rank($explode[2][number], $f);
		}

		echo "
<h3>Spearman's rank</h3>
<table class=\"table table-condensed table-hover\">
    <tr>
        <td><b>Data1</b></td>
        <td><b>Rank</b></td>
        <td><b>Data2</b></td>
        <td><b>Rank</b></td>
        <td><b>Difference (d)</b></td>
        <td><b>d<sup>2</sup></b></td>
    </tr>";

		foreach ($explode[1][number] as $num => $value)
		{
			$sum = $explode[1][rank][$num] - $explode[2][rank][$num];
			echo "
    <tr>
        <td>" . $explode[1][number][$num] . "</td>
        <td>" . $explode[1][rank][$num] . "</td>
        <td>" . $explode[2][number][$num] . "</td>
        <td>" . $explode[2][rank][$num] . "</td>
        <td>$sum</td>
        <td>" . $sum * $sum . "</td>
    </tr>";
			$dsquared = ($sum * $sum) + $dsquared;

		}
		$e = count($explode[1][number]);

		$final = @(1 - ((6 * $dsquared) / (($e * $e * $e) - $e)));
		echo "
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>&#8721;d<sup>2</sup></b></td>
        <td>" . $dsquared . "</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>6&#8721;d<sup>2</sup></b></td>
        <td>" . 6 * $dsquared . "</td>
    </tr>
</table>

<p><b>SRCC</b>: 1 - ((6 x {$dsquared})/($e<sup>3</sup>-$e)) = <b>$final</b>.

From the SRRC <b>({$final})</b>, we can say that it shows that the two sets of data show ";

		if ($final <= 1 && $final >= 0.7)
		{
			echo "<b>strong</b>, <b>positive</b> correlation.";
		}
		elseif ($final < 0.7 && $final >= 0.5)
		{
			echo "<b>moderate</b>, <b>positive</b> correlation.";
		}
		elseif ($final < 0.5 && $final >= 0)
		{
			echo "<b>weak</b>, <b>positive</b> correlation.";
		}
		elseif ($final >= -1 && $final <= -0.7)
		{
			echo "<b>strong</b>, <b>negative</b> correlation.";
		}
		elseif ($final > -1.7 && $final <= -1.5)
		{
			echo "<b>moderate</b>, <b>negative</b> correlation.";
		}
		elseif ($final > -1.5 && $final <= 0)
		{
			echo "<b>weak</b>, <b>negative</b> correlation.";
		}
		echo "</p>";
	}
	$quantity = count($explode[1][number]);
    foreach ($explode[1][number] as $num => $value)
    {
        $valuetotals[1] += $explode[1][number][$num];
        $valuetotals[2] += $explode[2][number][$num];
    }
	$mean[1] = $valuetotals[1] / $quantity;
	$mean[2] = $valuetotals[2] / $quantity;

	foreach ($explode[1][number] as $key => $value)
	{
		$xminusxbarsquared = (($value - $mean[1]) * ($value - $mean[1])) + $xminusxbarsquared;
	}


	$sd[1] = sqrt((($xminusxbarsquared) / ($quantity)));
	$sdtwo[1] = sqrt((($xminusxbarsquared) / ($quantity - 1)));
	$xminusxbarsquared = 0;

	foreach ($explode[2][number] as $key => $value)
	{
		$xminusxbarsquared = (($value - $mean[2]) * ($value - $mean[2])) + $xminusxbarsquared;
	}


	$sd[2] = sqrt((($xminusxbarsquared) / ($quantity)));

	$sdtwo[2] = sqrt((($xminusxbarsquared) / ($quantity - 1)));

	function stats($type, $data, $quantity)
	{
		if ($type == "lower")
		{
			$media = ($quantity + 1) / 4;
		}
		elseif ($type == "upper")
		{
			$media = ((3 * $quantity) + 3) / 4;
		}
		elseif ($type == "median")
		{
			$media = ($quantity + 1) / 2;
		}
		$media = $media - 1;
		$array = $data;
		sort($array, SORT_NUMERIC);
		if (is_int($media))
		{
			$median = $array[$media];
		}
		else
		{
			$ex = explode(".", $media);
			$lower = $ex[0];
			$upper = ($ex[0]) + 1;
			$lower = $array[$lower];
			$upper = $array[$upper];
			$median = ($lower + $upper) / 2;
		}
		return $median;
	}

	$array = $explode[1][number];
	sort($array, SORT_NUMERIC);
	$max = count($array) - 1;
	$range[1] = $array[$max] - $array[0];
	$lowest[1] = $array[0];
	$highest[1] = $array[$max];

	$arrayr = $explode[2][number];
	sort($arrayr, SORT_NUMERIC);
	$max = count($arrayr) - 1;
	$range[2] = $arrayr[$max] - $arrayr[0];
	$lowest[2] = $arrayr[0];
	$highest[2] = $arrayr[$max];


	echo "
<h3>Data information</h3>

<table class=\"table table-condensed table-hover\">
     <tr>
        <td></td>
        <td><b>Data1</b></td>
        <td><b>Data2</b></td>
     </tr>
     <tr>
        <td><b>Value totals</b></td>
        <td>$valuetotals[1]</td>
        <td>$valuetotals[2]</td>
     </tr>
     <tr>
        <td><b>Range</b></td>
        <td>$range[1]</td>
        <td>$range[2]</td>
     </tr>
     <tr>
        <td><b>Highest</b></td>
        <td>$highest[1]</td>
        <td>$highest[2]</td>
     </tr>
     <tr>
        <td><b>Lowest</b></td>
        <td>$lowest[1]</td>
        <td>$lowest[2]</td>
    </tr>
    <tr>
        <td><b>Mean</b></td>
        <td>$mean[1]</td>
        <td>$mean[2]</td>
    </tr>
    <tr>
        <td><b>Median</b></td>
        <td>" . stats("median", $explode[1][number], $quantity) . "</td>
        <td>" . stats("median", $explode[2][number], $quantity) . "</td>
    </tr>
    <tr>
        <td><b>Upper Quartile</b>*</td>
        <td>" . stats("upper", $explode[1][number], $quantity) . "</td>
        <td>" . stats("upper", $explode[2][number], $quantity) . "</td>
    </tr>
    <tr>
        <td><b>Lower Quartile</b>*</td>
        <td>" . stats("lower", $explode[1][number], $quantity) . "</td>
        <td>" . stats("lower", $explode[2][number], $quantity) . "</td>
    </tr>
    <tr>
        <td><b>IQR</b>*</td>
        <td>";
	echo stats("upper", $explode[1][number], $quantity) - stats("lower", $explode[1][number], $quantity);
	echo "</td>
        <td>";
	echo stats("upper", $explode[2][number], $quantity) - stats("lower", $explode[2][number], $quantity);
	echo "</td>
    </tr>
    <tr>
        <td><b>Population Standard Deviation</b></td>
        <td>$sd[1]</td>
        <td>$sd[2]</td>
    </tr>
    <tr>
        <td><b>Variance</b> (Population Standard Deviation squared)</td>
        <td>$sd[1]<sup>2</sup> = " . $sd[1] * $sd[1] . "</td>
        <td>$sd[2]<sup>2</sup> = " . $sd[2] * $sd[2] . "</td>
    </tr>
    <tr>
        <td><b>Sample Standard Deviation</b></td>
        <td>$sdtwo[1]</td>
        <td>$sdtwo[2]</td>
    </tr>
    <tr>
        <td><b>Variance</b> (Sample Standard Deviation squared)</td>
        <td>$sdtwo[1]<sup>2</sup> = " . $sdtwo[1] * $sdtwo[1] . "</td>
        <td>$sdtwo[2]<sup>2</sup> = " . $sdtwo[2] * $sdtwo[2] . "</td>
    </tr>
    ";


	echo "</table><P>
* The upper quartile and lower quartile are worked out using your data only, and will give you a slightly different answer than if you were to use a cumulative frequency chart. <p>
";


	$one = 0;
	$two = 0;
	$three = 0;
	foreach ($explode[1][number] as $key => $value)
	{
		if ($value <= ($mean[1] + $sdtwo[1]) && $value >= ($mean[1] - $sdtwo[1]))
		{
			$one = $one + 1;

		}
		if ($value <= ($mean[1] + (2 * $sdtwo[1])) && $value >= ($mean[1] - (2 * $sdtwo[1])))
		{

			$two = $two + 1;
		}
		if ($value <= ($mean[1] + (3 * $sdtwo[1])) && $value >= ($mean[1] - (3 * $sdtwo[1])))
		{
			$three = $three + 1;
		}
	}

	$disa[1] = round((($one / $quantity) * 100), 1);
	$disb[1] = round((($two / $quantity) * 100), 1);
	$disc[1] = round((($three / $quantity) * 100), 1);

	$one = 0;
	$two = 0;
	$three = 0;
	foreach ($explode[2][number] as $key => $value)
	{

		if ($value <= ($mean[2] + $sdtwo[2]) && $value >= ($mean[2] - $sdtwo[2]))
		{
			$one = $one + 1;
		}
		if ($value <= ($mean[2] + (2 * $sdtwo[2])) && $value >= ($mean[2] - (2 * $sdtwo[2])))
		{
			$two = $two + 1;
		}
		if ($value <= ($mean[2] + (3 * $sdtwo[2])) && $value >= ($mean[2] - (3 * $sdtwo[2])))
		{
			$three = $three + 1;
		}
	}

	$disa[2] = round((($one / $quantity) * 100), 1);
	$disb[2] = round((($two / $quantity) * 100), 1);
	$disc[2] = round((($three / $quantity) * 100), 1);


	echo "
<h3>Distribution</h3>
<table class=\"table table-condensed table-hover\">
   <tr>
       <td>
{$disa[1]}% of the values lie within 1 standard deviation of the mean.<br>
 {$disb[1]}% of the values lie within 2 standard deviations of the mean.<br>
 {$disc[1]}% of the values lie within 3 standard deviations of the mean.<P>";
	$a = round($disa[1]);
	$b = round($disb[1]);
	$c = $disc[1];
	if ($a == "68" && $b == "95" && $c == "99.7")
	{
		echo "This means the data has <b>normal</b> distribution.";
	}
	echo "
       </td>";
	if ($two_datas === TRUE)
	{
		echo "
       <td>
{$disa[2]}% of the values lie within 1 standard deviation of the mean.<br>
 {$disb[2]}% of the values lie within 2 standard deviations of the mean.<br>
 {$disc[2]}% of the values lie within 3 standard deviations of the mean.<P>";
		$a = round($disa[2]);
		$b = round($disb[2]);
		$c = $disc[1];
		if ($a == "68" && $b == "95" && $c == "99.7")
		{
			echo "This means the data has <b>normal</b> distribution.";
		}
		echo "
      </td>";
	}
	echo "
   </tr>
</table>
</div>
<h3>Standard Deviation</h3>
<table class=\"table table-condensed table-hover\">
    <tr>
        <td>
            <table>
                <tr>
                    <td><b>x</b></td>
                    <td><b>x - mean</b></td>
                    <td><b>(x - mean)<sup>2</sup></b></td>
                </tr>";
	$xminusxbarsquared = 0;

	foreach ($explode[1][number] as $key => $value)
	{
		$br = ($value - $mean[1]) * ($value - $mean[1]);
		$xminusxbarsquared = $br + $xminusxbarsquared;
		$valuemean = $value - $mean[1];
		echo "
                <tr>
                    <td>{$value}</td>
                    <td>{$valuemean}</td>
                    <td>{$br}</td>
                </tr>";
	}
	echo "
                <tr>
                    <td></td>
                    <td></td>
                    <td>$xminusxbarsquared</td>
                </tr>
            </table><P>
<img src=\"/maths/images/n.png\" border=\"1\"><br><b>Population Standard Deviation:</b><big>&#8730;</big> ({$xminusxbarsquared} &#247; {$quantity}) = <b>{$sd[1]}</b><p>
<img border=\"1\"   src=\"/maths/images/nminus1.png\"><br> <b>Sample Standard Deviation:</b> <big>&#8730;</big> ({$xminusxbarsquared} &#247; ({$quantity}-1)) = <b>{$sdtwo[1]}</b></span>";
	echo "
        </td>";

	if ($two_datas === TRUE)
	{
		echo "
        <td >
            <table>
                <tr>
                    <td><b>x</b></td>
                    <td><b>x - mean</b></td>
                    <td><b>(x - mean)<sup>2</sup></b></td>
                </tr>";
		$xminusxbarsquared = 0;

		foreach ($explode[2][number] as $key => $value)
		{
			$br = ($value - $mean[2]) * ($value - $mean[2]);
			$xminusxbarsquared = $br + $xminusxbarsquared;
			$valuemean = $value - $mean[2];
			echo "
                <tr>
                    <td>{$value}</td>
                    <td>{$valuemean}</td>
                    <td>{$br}</td>
                </tr>";
		}
		echo "
                <tr>
                    <td></td>
                    <td></td>
                    <td>$xminusxbarsquared</td>
                </tr>
            </table><P>
<span class=\"results\"><img src=\"/maths/images/n.png\" border=\"1\"><br><b>Population Standard Deviation:</b> <big>&#8730;</big> ({$xminusxbarsquared} &#247; {$quantity}) = <b>{$sd[2]}</b><p>
<img border=\"1\" src=\"/maths/images/nminus1.png\"><br> <b>Sample Standard Deviation:</b> <big>&#8730;</big> ({$xminusxbarsquared} &#247; ({$quantity}-1)) = <b>{$sdtwo[2]}</b><br>
</span>
        </td>";

		echo "
    </tr>
</table>
</div>
";

	}