@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Hai selezionato: {{$pizza->nome}}</h2>
        <h3>ID: {{$pizza->id}}</h3>
        <p>Questa pizza ha i seguenti ingredienti >>>>>:
            @foreach($pizza->ingredients as $ingredient){{$ingredient->name}} @endforeach
            <br>
            Il suo costo è di {{$pizza->prezzo}}&euro; <br>
            @if ($pizza->vegetariana)
                Questa pizza è <strong>vegetariana</strong>
            @else
             Questa pizza <strong>non</strong> è vegetariana
            @endif
        </p>
        <a class="btn btn-primary" href="{{route('admin.pizzas.index')}}"><- Go back</a>
    </div> 



    
@endsection
