@extends('maths.master')
@section('content')
<div class="content-row-grey">
    <div class="container">
        <a href="{{ route('spearmans-rank') }}">
        <div class="col-sm-6">
            <h2>Spearman's Rank Calculator</h2>
            <p>This calculates standard deviation, spearman's rank, IRQ and more.</p>
        </div>
        </a>
        <a href="{{ route('newton-raphson') }}">
        <div class="col-sm-6">
            <h2>Newton-Raphson calculator</h2>
            <p>Uses Newton-Raphson method and shows workings for you.</p>
        </div>
        </a>
        <a href="{{ route('decimal-search') }}">
        <div class="col-sm-6">
            <h2>Decimal Search Calculator</h2>
            <p>Uses the Decimal Search method and shows workings for you.</p>
        </div>
        </a>
        <a href="{{ route('fixed-point') }}">
        <div class="col-sm-6">
            <h2>Fixed Point Iteration Calculator</h2>
            <p>Uses the Fixed Point Iteration method and shows workings for you.</p>
        </div>
        </a>
    </div>
</div>
@endsection