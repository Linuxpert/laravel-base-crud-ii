@extends('layouts.main-layout')
@section('content')
    <a href="{{  route('create')}}">
        Aggiungi un film
    </a>

    <h1>List:</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <b>
                    <a href="{{  route('show', $movie -> id)}}">
                        {{$movie -> title}}
                    </a>

                     - {{$movie -> relase_date}}
                     - <a href="{{  route('edit', $movie -> id)}}">EDIT</a>
                     - <a href="{{  route('delete', $movie -> id)}}">DELETE</a>
                </b>
            </li>
        @endforeach
    </ul>
@endsection