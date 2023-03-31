@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{$pizza->name}}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="type">Base - {{ $pizza->base }}</p>
  <p class='toppings'>Extra toppings:</p>
  <ul>
    @foreach($pizza->toppings as $topping )
    <li>{{ $topping }}</li>
    @endforeach
  </ul>

<!-- <form action="/pizzas/{{$pizza->id}}" method="post"> this or down both ok -->
  <form action="{{route('pizzas.destroy' , $pizza->id )}}" method="post">
    @csrf
    @method('DELETE')
    <button>Delete order</button>
  </form>
</div>

<a href="/pizzas" class="back">Back to all pizzas</a>
@endsection
