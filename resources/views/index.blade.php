@extends('layout.app')
{{-- @extends('layout.sidebar') --}}
@section('content')
    my content section
@endsection











{{-- Welcome {{$name}}{{$surname}} ({{$info['age']}} / {{$info['job']}})
<br>
<a href="#">Home Page<br></a> --}}

{{-- {{$count = 10}} --}}
{{-- @for ($i = 0; $i < 10; $i++)
 {{$i}}<br>   
@endfor --}}

{{-- @foreach (['abc','cde'] as $key=>$item)
    {{$key}} => {{$item}} <br>
@endforeach --}}

{{-- @if ($age == 10)
    u a 10
    @elseif($age == 15) 
    u a 15
    @else 
    err
@endif --}}


{{-- @if (isset($age2))
have age
@else 
havent

@endif --}}

{{-- pure php  --}}
{{-- @php
    $x = 10;
@endphp

{{$x}} --}}
