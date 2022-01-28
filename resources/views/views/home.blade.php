@extends('layouts.main-layout')
@section('content')
    @foreach ($emp as $item)
        <li>
            <a href="{{ route('worker', $item -> id ) }}">
                nome: {{$item -> nome}}
            </a>
        </li>
    @endforeach
@endsection