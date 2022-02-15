@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')

<div class="starter-template">
  <h1>Все объявления</h1>
    <br>
  <div>
    @include('paginac', compact('product'))
  </div>
</div>
@endsection
