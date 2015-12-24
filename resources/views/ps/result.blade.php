
<div class="row">
    <div class="col-md-3">
		<h3>Stats</h3>
        <div style="color:'{{ $color }}\'"><b>Lines:</b> {{ $lines }} / 47<br>
        <b>* Characters:</b> {{ $characters }} / 4000<br>
        <b>Number of exclamation marks:</b> {{ $exclam }} <br>
        <b>Number of commas:</b> {{ $commas }} <br>
        <b>Number of semi-colons:</b> {{ $semi }} <br>
        <b>Number of full-stops:</b> {{ $full_stops }} <br>
        <b>Number of questions:</b> {{ $questions }} <br>
        <b>Number of sentences</b> {{ $sentences }} <br>

        <b>Largest word:</b> $maxwordlength characters ($largestword)</div><P>

* Every new line entered (purposefully), counts as 2 characters as according to UCAS.
	</div>
	<div class=\"col-md-3\">
<h3>Word Occurences</h3>
		<div style="height: 250px; overflow: auto;">
<ul class="list-unstyled">
    {{ $word_occurences }}
</ul>
    </div>
</div>
</div>
<div class='row'>
    <div class=\"col-md-12\">

        <h2>Your Personal Statement</h2>
        <I>Hover over highlighted words for more information</i><p>

            {{ $statement }}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <h3>Word Cloud</h3>
        {{ $word_cloud }}
    </div>
</div>