@extends('auth.layouts.master')

@section('title-block')
  Новый комментарий
@endsection

@section('content')
<div class="starter-template">
  <h1>Новый комментарий</h1>
    <div class="row">
      <br>
      <form action="{{ route('addcomment-form') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Введите комментарий</label>
        <input type="text" name="subject" placeholder="Введите комментарий"
        id="subject" class-"form-control">
      </div>
      <br>
      <div class="form-group">
        <p>Введите оценку от 1 до 5:</p>
        <p><input type="number" size="3" name="message" min="1" max="5"
        value="5"></p>
      </div>
      <div class="form-group">
        <input type="hidden" name="product_id" value="{{$product->id}}" >
      </div>
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Сохранить</button>
      </div>
    </div>
  </div>
@endsection
