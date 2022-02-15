@extends('auth.layouts.master')

@section('title-block')
  Все комментарии
@endsection

@section('content')

<div class="starter-template">
  <h1>Все комментарии</h1>
    <div class="row">
      @foreach($contacts as $contact)
        <div class="alert alert-info">
          <h3> Номер id: {{ $contact->id }}</h3>
          <p> Комментарий:{{ $contact->subject }}</p>
          <p> Оценка:{{ $contact->message }}</p>
          <p> Продукт id :{{ $contact->product_id }}</p>
        </div>
      @endforeach
    </div>
  <a href="{{ route('add-form', $product->id) }}"><button
  class="btn btn-warning">Добавить комментарий</button></a>
</div>
@endsection
