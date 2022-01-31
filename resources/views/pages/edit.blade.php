@extends('layouts.main-layout')
@section('content')
    

    <h1>
        Modifica film
    </h1>

    @if ($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif

    <form action="{{route('update', $movie -> id)}}" method="post">
    
        @method("post")
        @csrf
        
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{$movie -> title}}"> <br>
        <label for="title">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle" value="{{$movie -> subtitle}}"> <br>
        <label for="title">Releade Date:</label>
        <input type="date" name="relase_date" placeholder="Releade Date" value="{{$movie -> relase_date}}"> <br>
        <input type="submit" value="UPDATE">


    </form>

    <a href="{{  route('home')}}">
        torna alla home
    </a>
@endsection