@extends('auth.layouts.master')

@section('title-block')
  Все объявления
@endsection

@section('content')

<div class="col-md-12">
  <h1>Редактировать объявление</h1>
    <form method="POST" enctype="multipart/form-data"
    action="{{route('products.update', $product)}}">
    <div>
      @isset($product)
        @method('PUT')
      @endisset
      @csrf
    <div class="input-group row">
      <label for="code" class="col-sm-4 col-form-label">Код: </label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="code" id="code"
          value="@isset($product){{$product->code}}@endisset">
        </div>
    </div>
      <br>
    <div class="input-group row">
      <label for="name" class="col-sm-3 col-form-label">Название: </label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" id="name"
          value="@isset($product){{$product->name}}@endisset">
        </div>
    </div>
      <br>
    <div class="input-group row">
      <label for="description" class="col=cm-3 col-form-label">Описание:</label>
        <div class="col-cm-6">
          <textarea name="description" id="description" cols="72"
          rows="7">@isset($product){{$product->description}}@endisset</textarea>
        </div>
    </div>
      <br>
    <div class="input-group row"
      <label for="image" class="col-sm-3 col-form-label">Картинка: </label>
        <div class="col-sm-12">
          <label class="btn btn-default btn-file">
          Загрузить <input type="file" style="display: none;" name="image" id="image">
          </label>
        </div>
    </div>
      <button class="btn btn-success">Сохранить</button>
    </div>
  </form>
 </div>
   <br>
@endsection
