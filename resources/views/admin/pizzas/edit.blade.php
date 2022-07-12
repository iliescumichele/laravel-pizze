@extends('layouts.admin')

@section('content')


<div class="container">
    <form action="{{route('admin.pizzas.update', $pizza)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label  class="form-label">New name</label>
          <input type="text" name="nome" value="{{old($pizza->nome)}}" class="form-control" id="nome"
          >


        </div>

        <label for="quantity">Scegli un nuovo prezzo (between 1 and 100):</label>
        <input type="number" id="prezzo" value="{{old($pizza->prezzo)}}" name="prezzo" min="1" max="100" step="0.1">

        {{-- <div class="mb-3">
            <label  class="form-label">New price</label>
            <input type="text" name="nome" value="{{old($pizza->prezzo)}}" class="form-control" id="nome" >
          </div> --}}


          <div class="mb-3">
              <label  class="form-label">Vegetarian?</label>
            @if ($pizza->vegetariana)


              <div class="form-check">
                <input class="form-check-input" type="radio" value="1"  name="vegetariana" id="vegetariana" checked>
                <label class="form-check-label" for="flexRadioDefault1" >
                  Vegetariana
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="0" name="vegetariana" id="no-vegetariana" >
                <label class="form-check-label" for="flexRadioDefault2" >
                  Non vegetariana
                </label>
              </div>
              @else
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="vegetariana" value="1" id="vegetariana" >
                <label class="form-check-label" for="flexRadioDefault1" >
                  Vegetariana
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="no-vegetariana" name="vegetariana" value="0" id="flexRadioDefault2"checked >
                <label class="form-check-label" for="flexRadioDefault2" >
                  Non vegetariana
                </label>
              </div>
               @endif

              {{-- <input type="text" name="nome" class="form-control" id="nome" > --}}
            </div>

            {{-- <div class="mb-3">
              <label  class="form-label">New ingredients</label>



              <textarea name="ingredienti" id="ingredienti" cols="90" rows="5" value="{{old($pizza->ingredienti)}}">

              </textarea>
            </div> --}}

            <label  class="form-label">New ingredients</label>
            @foreach ($ingredients as $ingredient)
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{$ingredient->id}}"
                        id="ingredient{{$loop->iteration}}"
                        name="ingredients[]"
                        @if(in_array($ingredient->id, old("ingredients", []))) checked @endif>
                    <label class="form-check-label mr-3" for="ingredient{{$loop->iteration}}">
                        {{$ingredient->name}}
                    </label>
                </div>
            @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{route('admin.pizzas.index')}}"><- Go back</a>
      </form>
</div>



@endsection
