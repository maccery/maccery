@extends('maths.master')
@section('content')
<div class="container" id="decimal-search">
    <h2>Decimal search calculator</h2>

    <form class="container form-horizontal" role="form" action="/maths_legacy/decimal_search_calculator.php" method="post"
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
@endsection