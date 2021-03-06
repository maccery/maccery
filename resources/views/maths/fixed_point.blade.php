@extends('maths.master')
@section('content')
    @include('maths.navigation')
<div class="container" id="fixed-point">
    <h2>Fixed point iteration calculator</h2>

    <form class="container form-horizontal" role="form" action="/maths_legacy/fixed_point_calculator.php" target="#fixed-point-result"
          method="post">
        <div class="form-group">
            <label>x = </label>
            <input type="text" class="form-control" name="function" placeholder="Enter your equation">

            <p class="help-block">Make sure you enclose powers in brackets. For example 3x<sup>2</sup>+3x should be
                written as (3x^2)+3x.
                <br><b>For powers:</b> ^ symbol. Example: 4^2 is 4 squared.<br>
                <b>For square root:</b> sqrt(x)
            </p>
        </div>
        <div class="form-group">
            <label>Accuracy</label>
            <input type="text" class="form-control" name="accuracy" placeholder="Enter the number of decimal places">
        </div>
        <div class="form-group">
            <label>Starting value</label>
            <input type="text" class="form-control" name="start" placeholder="Enter the starting value">
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="working"> Show working
                </label>
            </div>

        </div>
        <div class="form group">
            <button type="submit" class="btn btn-danger">Calculate</button>
        </div>
    </form>
    <hr>
    <div class="result" id="fixed-point-result"></div>
</div>
@endsection