@extends('layouts.main-layout')
@section('content')
    <div>
        <h1>
            titolo film: {{$movie -> title}}
        </h1>
        <h3>
            sottotitolo: {{$movie -> subtitle}}
        </h3>

        <p>
            data uscita: {{$movie -> relase_date}}
        </p>
    </div>

    <a href="{{  route('home')}}">
        torna alla home
    </a>
@endsection