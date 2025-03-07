@php
    $n = 121;
@endphp

@if($n % 2 == 0)
    <p>{{ $n }} is an even number</p>
@else
    <p>{{ $n }} is an odd number</p>
@endif
