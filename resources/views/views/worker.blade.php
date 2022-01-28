@extends('layouts.main-layout')
@section('content')
<h1>
    <a href="{{route('home')}}">
        Go back
    </a>
</h1>
    <h1>
       {{$worker -> nome}}
    </h1>
    <h1>
        {{$worker -> cognome}}
    </h1>
    <h1>
        {{$worker -> fc}}
    </h1>
    <h1>
        {{$worker -> email()}}
    </h1>
@endsection