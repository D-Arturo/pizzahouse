@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1> Order for {{ $pizza->name }}</h1>
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
        @csrf {{--Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user. --}}
        @method('DELETE') {{-- Sobreescribimos la petición Post para ahora sí asociarla a Delete --}}
        <input type="submit" value="Set Completed Order">
    </form>
</div>
<a href="/pizzas" class="back"> Back to all pizzas</a>
@endsection
