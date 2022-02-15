@extends('auth.layouts.master')

@section('title-block')
  Подробная информация
@endsection

@section('content')

  <h1>Подробная информация</h1>
    <div class="col=md-12">
      <table class="table">
        <tbody>
          <tr>
            <th> Поле </th>
            <th> Значение </th>
          </tr>
            <tr>
              <td> ID </td>
              <td> {{$product->id}} </td>
            </tr>
            <tr>
              <td> Категория id </td>
              <td> {{$product->category_id}} </td>
            </tr>
            <tr>
              <td> Код </td>
              <td> {{$product->code}} </td>
            </tr>
            <tr>
              <td> Название </td>
              <td> {{$product->name}} </td>
            </tr>
            <tr>
              <td> Описание </td>
              <td> {{$product->description}} </td>
            </tr>
            <tr>
              <td> Юзер id </td>
              <td> {{$product->user_id}} </td>
            </tr>
            <tr>
              <td> Проайс </td>
              <td> {{$product->price}} </td>
            </tr>
            <tr>
              <td> Картинка </td>
              <td><img src="{{Storage::url($product->image)}}"
              heigh="240px"></td>
           </tr>
        </tbody>
      </table>

    <a href="{{ route('add-form', $product->id) }}"><button
    class="btn btn-warning">Добавить комментарий</button></a>
    <br>
    <br>
@endsection
