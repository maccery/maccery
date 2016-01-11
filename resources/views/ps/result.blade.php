@if ($character_count > 4000)
    <div class="alert alert-danger" role="alert">
        <p>You've exceeded the UCAS character count.</p>
    </div>
@endif
@if ($line_count > 47)
    <div class="alert alert-danger" role="alert">
        <p>You've exceeded the UCAS line count.</p>
    </div>
@endif
@if ($character_count <= 4000 AND $line_count <= 47)
<div class="alert alert-success" role="alert">
    <p><b>Excellent!</b> Your personal statement is within UCAS's line and character count limits.</p>
</div>
@endif
<div class="row">
    <div class="col-md-6">

		<h3>Stats</h3>
        <ul class="list list-unstyled">
            @if ($line_count > 47)
                <li><b style="color:red">Lines:</b> {{ $line_count }}</li>
            @else
                <li><b>Lines:</b> {{ $line_count }}</li>
            @endif
            @if ($character_count > 4000)
                <li><b style="color:red">* Character count:</b> {{ $character_count }}</li>
            @else
                <li><b>* Character count:</b> {{ $character_count }}</li>
            @endif
            <li><b>Number of exclamation marks:</b> {{ $number_of_exclamation_marks }}</li>
            <li><b>Number of commas:</b> {{ $number_of_commas }}</li>
            <li><b>Number of semi-colons:</b> {{ $number_of_semi_colons }}</li>
            <li><b>Number of full-stops:</b> {{ $number_of_full_stops }}</li>
            <li><b>Number of questions:</b> {{ $number_of_questions }}</li>
        </ul>
        * Every new line break entered counts as 2 characters as according to UCAS.
	</div>
    <div class="col-md-6">
        <h3>Popular words</h3>
        <div class="popular-words">
            <ul class="list list-unstyled">
            @foreach ($popular_words as $word => $count)
            <li>{{ $word }} ({{ $count }})</li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Your Personal Statement</h2>
@foreach ($split_statement as $i => $line)
    <b>{{ $i }}</b>
    @foreach ($line as $word)
        {{ $word }}
    @endforeach
    <br>
@endforeach
    </div>
</div>