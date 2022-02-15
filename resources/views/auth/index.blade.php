@extends('auth.layouts.master')

@section('title', 'Домашняя страница')

@section('content')

  <div class="starter-template">
    <h1>Мои объявления</h1>      
    <div class="row">
      @foreach($products as $product)
        @php
        $user_id = Auth::id();
        @endphp
        @if($product->user_id === $user_id )
        @include('auth.card', compact('products', 'contacts'))
        @endif
      @endforeach
    </div>
 </div>
@endsection
