@extends('layouts.main-layout')
@section('content')
    

    <h1>
        Crea un nuovo film
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

    <form action="{{route('store')}}" method="post">
    
        @method("post")
        @csrf
        
        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title"> <br>
        <label for="title">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle"> <br>
        <label for="title">Releade Date:</label>
        <input type="date" name="relase_date" placeholder="Releade Date"> <br>
        <input type="submit" value="CREATE">


    </form>

    <a href="{{  route('home')}}">
        torna alla home
    </a>
@endsection