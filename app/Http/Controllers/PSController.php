<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PSController extends Controller
{

    function result(Request $request)
    {
        $words = array();
        $new = '';

        $ps = $request->input('ps');

        if ($ps != '')
        {

            $original = urldecode($this->wordconvert($ps));
            $ps = strip_tags(urldecode(stripslashes(str_replace('%u2019', "'", $original))));
            $ps = str_replace('“', '"', $ps);
            $pss = strip_tags(urldecode(stripslashes(str_replace('
', ' NEW77LINE ', $original))));
            $pss = str_replace('%u2019', "'", $pss);
            $pss = str_replace('%u2018', "'", $pss);
            $pss = str_replace('%u2021', '"', $pss);
            $ps = str_replace('%u2018', "'", $pss);
            $pss = str_replace('%u2021', '"', $pss);
            $ps = str_replace('%u201C', '"', $pss);
            $pss = str_replace('%u201C', '"', $pss);
            $ex = explode(' ', $pss);
            $wordcount = count($ex) - 1;
            $lines = 1;
            $line = 0;
            $culm = 0;
            $statement = "";

            if ($pss != '' && $request->input('linenumbers'))
            {
                $statement = '<b>1</b> ';
            }
            foreach ($ex as $word)
            {
                if ($word != 'NEW77LINE')
                {
                    $wordi = $this->lastletter($word);
                    $maxwordlength = 0;
                    if (strlen($wordi) >= $maxwordlength)
                    {
                        $largestword = $wordi;
                        $maxwordlength = strlen($wordi);
                    }


                }


                if (($request->input('generic')) || ($this->check($word)))
                {
                    $wordi = $this->lastletter($word);
                    $wordi = strtolower($wordi);
                    $words[$wordi] = @$words[$wordi] + 1;
                }

                if (($culm + strlen($word)) > '94')
                {


                    if ($word == 'NEW77LINE')
                    {
                        $lines++;
                        if ($request->input('linenumbers'))
                        {
                            $line = $lines;
                        }
                        $culm = '0';
                        $statement = $statement . "<br>$line ";

                    } else
                    {

                        $lines = $lines + 1;

                        if ($request->input('linenumbers'))
                        {
                            $line = "<b>$lines</b>";
                        }
                        $wordi = $this->highlight($word, $request->input('highlight'));
                        $statement = $statement . "<br>$line $wordi";
                        $culm = strlen($word) + 1;
                    }


                } else
                {
                    $culm += strlen($word) + 1;

                    if ($word == 'NEW77LINE')
                    {
                        $culm = '0';
                        $lines++;

                        if ($request->input('linenumbers'))
                        {
                            $line = "<b>$lines</b>";
                        }
                        $statement = $statement . "<br>$line";
                    } else
                    {


                        $wordi = $this->highlight($word, $request->input('highlight'));
                        $statement = $statement . " $wordi";
                    }
                }
            }

            $characters = strlen(urldecode(stripslashes(str_replace('NEW77LINE', '
', $original)))) + 1;


            $color = "";
            if ($lines > '47')
            {
                $color = 'red';
            } elseif ($characters > '4000')
            {
                $color = 'red';
            } else
            {

            }

            $exclam = count(explode('!', $ps)) - 1;

            $commas = count(explode(',', $ps)) - 1;
            $semi = count(explode(';', $ps)) - 1;
            $fullstops = count(explode('.', $ps)) - 1;
            $questions = count(explode('?', $ps)) - 1;
            $sentences = $questions + $fullstops + $exclam;
            $word_occurences = "";
            $maxwordlength = 0;
            $new = array();

            if ($characters >= '2' && $maxwordlength >= '2')
            {

                foreach ($words as $key => $value)
                {
                    $new[] = array($value, $key);
                }
                arsort($new);

                $n = '0';
                foreach ($new as $array)
                {
                    if ($n == '0')
                    {
                        $top = $array[0];
                    }

                    $word_occurences .= "<li><B>$array[1]:</b> $array[0]</li>";
                    $n++;
                }
            }

            shuffle($new);

            $list = "";
            $word_cloud = "";
            if ($characters >= '2' && $maxwordlength >= '2')
            {
                foreach ($new as $array)
                {
                    $list .= "$array[0]:$array[1]";
                    $size = $this->size($array[0], $top);
                    $word_cloud .= "<span style=\"font-size:$size\">$array[1]</span> ";
                }
            }
            echo "";

            $data = array(
                'color' => $color,
                'characters' => $characters,
                'lines' => $lines,
                'exclam' => $exclam,
                'commas' => $commas,
                'full_stops' => $fullstops,
                'semi' => $semi,
                'questions' => $questions,
                'sentences' => $sentences,
                'maxwordlength' => $maxwordlength,
                'largestword' => $largestword,
                'word_occurences' => $word_occurences,
                'statement' => $statement,
                'word_cloud' => $word_cloud
            );

            return view('ps/result', $data);
        }
    }


    private function wordconvert($src)
    {
        $src = str_replace('$', 'USD ', $src);
        $src = str_replace("‘", "'", $src);
        $src = str_replace("’", "'", $src);
        $src = str_replace("”", '"', $src);
        $src = str_replace("“", '"', $src);
        $src = str_replace("–", "-", $src);
        $src = str_replace("…", "...", $src);
        return $src;
    }

    private function size($word, $mostf)
    {
        $ninety = round((0.9 * $mostf), 1);
        $eighty = round((0.8 * $mostf), 1);
        $seventy = round((0.7 * $mostf), 1);
        $sixty = round((0.6 * $mostf), 1);
        $forty = round((0.4 * $mostf), 1);
        $twenty = round((0.2 * $mostf), 1);
        $ten = round((0.15 * $mostf), 1);
        if ($word == $mostf)
        {
            return '35px; font-weight: bold;';
        } elseif ($word >= ($ninety))
        {
            return '30px; font-weight: bold;';
        } elseif ($word >= ($eighty))
        {
            return '28px; font-weight: bold;';
        } elseif ($word >= ($seventy))
        {
            return '27px; font-weight: bold;';
        } elseif ($word >= ($sixty))
        {
            return '27px';
        } elseif ($word >= ($forty))
        {
            return '23px';
        } elseif ($word >= ($twenty))
        {
            return '16px';
        } elseif ($word == '1')
        {
            $rand = rand(0, 1);
            if ($rand == '1')
            {
                return '; display:none;';
            } else
            {
                return '9px';
            }
        } else
        {
            return '9px';
        }
    }

    function highlight($word, $highlight)
    {

        $original = $word;
        $word = strtolower(str_replace('.', '', $word));
        $word = strtolower(str_replace('!', '', $word));
        $word = strtolower(str_replace('?', '', $word));
        $word = strtolower(str_replace(';', '', $word));
        $word = strtolower(str_replace(',', '', $word));

        $highlight_these = explode(",", $highlight);

        if ((is_numeric($word)) && $word <= 100)
        {
            $word = "<FONT
alt=\"You may want to write this as a word, rather than a number\" title=\"You may want to write this as a word, rather than a number\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == 'e.g')
        {
            $alt = "Write 'for example', or something similar, instead.";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif (in_array($word, $highlight_these))
        {
            $alt = "You asked for this to be highlighted";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: lightgreen\">$original</FONT>";
        } elseif ($word == "don't" || $word == "i'm")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "won't")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "shan't")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "i've")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "i'd")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "i'll")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "they've")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "they're")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "they'll")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "it's")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "it'll")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";

        } elseif ($word == "there's")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "we've")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";

        } elseif ($word == "we'd")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";

        } elseif ($word == "we'll")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "we're")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";


        } elseif ($word == "you'll")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "you're")
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";
        } elseif ($word == "you'd" || $word == 'xmas')
        {
            $alt = "Avoid using the abbreviated form of words";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";

        } elseif ($word == "lol" || $word == 'lmao' || $word == 'wtf' || $word == 'lmao')
        {
            $alt = "Are you kidding?!";
            $word = "<FONT
alt=\"$alt\" title=\"$alt\" style=\"BACKGROUND-COLOR: yellow\">$original</FONT>";


        } else
        {
            $word = $original;

        }
        return $word;
    }


    private function check($word)
    {

        $word = strtolower($word);
        $list = '.i.have.if.had.and.my.to.the.a.is.in.new77line.of.was.at.an.this.that.which.had.did.with.has.be.for.of.do.am.';
        if (@eregi(".$word.", $list))
        {
            return FALSE;
        } else
        {
            return TRUE;
        }

    }


    function lastletter($word)
    {
        $lastletter = substr($word, -1);
        if ($lastletter == '.' || $lastletter == '!' || $lastletter == ';' || $lastletter == ',' || $lastletter == ":" || $lastletter == '?' || $lastletter == ")" || $lastletter == "(" || $lastletter == '"')
        {
            return substr($word, 0, -1);
        } else
        {
            return $word;
        }
    }
}