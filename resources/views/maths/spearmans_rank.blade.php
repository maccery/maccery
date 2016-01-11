@extends('maths.master')
@section('content')
@include('maths.navigation')
<div class="container" id="statistics">
    <h2>Statistics calculator</h2>

    <p>
        This will calculate <b>spearman's rank</b>, (root) mean square deviation, standard deviation, variance, mean,
        mode, median, upper quartile, lower quartile, IQR, range, value totals.
    </p>

    <form class="container form-horizontal" role="form" action="/maths_legacy/statistics.php" method="post"
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
@endsection