@extends('layout.app')


@section('content')

    <h3>this is contact </h3>  

    @if(count($people))
    @foreach($people as $person)

        <li>{{ $person }}</li>

    @endforeach

    @endif  

@stop