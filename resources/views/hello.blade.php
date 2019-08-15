@extends('layout')

@section('title')
    Hello Page
@endsection

@section('content')
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    @endif

    <div class="content">
    <div class="title m-b-md">
        Olá {{$name}}
        <hr>
        @if($name == 'Teste')
            @include('includes/any')
        @elseif($name == 'Jandelson')
            <h1>{{$name}}</h1>
        @else
            <h1>Sem IF</h1>
        @endif
         <hr>
         @isset($name)
            <h2>Teste</h2>
        @endisset
    </div>
    </div>
@endsection