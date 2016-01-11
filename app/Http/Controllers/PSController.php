<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PSController extends Controller
{

    function result(Request $request)
    {
        $statement = $request->input('statement');

        $lines = explode(PHP_EOL, $statement);

        $split_statement = array();
        $line_number = $line_character_count = $character_count = 0;
        foreach ($lines as $line)
        {
            if ($line_number != 0)
            {
                $character_count++;
            }

            $line_character_count = 0;
            $line_number++;

            $words = explode(' ', $line);
            $word_count = 0;
            foreach ($words as $word)
            {
                // If this word, plus the number of previous words is a new line OR it's a new line character, increment it
                if ((strlen($word) + $line_character_count > 94))
                {
                    $line_number++;
                    // reset the line character count
                    $line_character_count = 0;
                }

                // add this word to our multidimensional array
                $split_statement[$line_number][] = $word;

                $line_character_count += strlen($word); // we have to add one for the space bar
                $character_count += strlen($word);

                // If it's not the last word, add one
                if ($word_count < count($words)-1)
                {
                    $line_character_count++;
                    $character_count++;
                }

                $word_count++;
            }
        }

        $data = array(
            'line_count' => $line_number,
            'number_of_exclamation_marks' => substr_count($statement, '!'),
            'number_of_commas' => substr_count($statement, ','),
            'number_of_semi_colons' => substr_count($statement, '!'),
            'number_of_full_stops' => substr_count($statement, '.'),
            'number_of_questions' => substr_count($statement, '?'),
            'split_statement' => $split_statement,
            'character_count' => $character_count,
        );

        return view('ps/result', $data);


    }

}