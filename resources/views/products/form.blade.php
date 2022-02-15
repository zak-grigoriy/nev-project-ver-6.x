@extends('auth.layouts.master')

@section('title-block')
  Добавить объявление
@endsection

@section('content')

<div class="col-md-12">
  <br>
<h1>Добавить объявление</h1>
  <br>
<form method="POST" enctype="multipart/form-data"
  action="{{route('products.store')}}">
    <div>
@isset($product)
  @nethod('PUT')
@endisset
@csrf
            <div class="input-group row">
            <label for="code" class="col-sm-2 col-form-label">Код:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="code" id="code"
                volue="@isset($product){{$product->code}}@endisset">
              </div>
          </div>
            <br>
          <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Наз: </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name"
                value="@isset($probuct){{$product->name}}@endisset">
              </div>
          </div>
            <br>
          <div class="input-group row">
            <label for="category_id" class="col-cm-2 col-form-label">Категория:</label>
              <div class="col-cm-6">
                <select name="category_id" id="category_id" class="form-Control">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}"
                    @isset($product)
                      @if($product->category_id == $category->id) selected @endif
                    @endisset>
                      {{$category->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
              <br>
            <div class="input-group row">
              <label for="description" class="col=cm-2 col-form-label">Описание:</label>
                <div class="col-cm-6">
                  <textarea name="description" id="description" cols="72" rows="7">
                    @isset($product){{$product->description}}@endisset
                  </textarea>
                </div>
                </div>
              <br>
                <div class="input-group row"
              <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                <div class="col-sm-10">
                  <label class="btn btn-default btn-file">
                    Загрузить <input type="file" style="display: none;" name="image" id="image">
                  </label>
                </div>
                </div>
              <br>
            <button class="btn btn-success">Сохранить</button>
          </div>
        </form>
    </div>
@endsection
