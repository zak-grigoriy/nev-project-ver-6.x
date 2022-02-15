@extends('auth.layouts.master')

@section('title-block')
  Мои объявления
@endsection

@section('content')

  <div class="col-md-12">
    <h1>Мои объявления</h1>
    <table class="table">
      <tbody>
        <tr>
          <th> № </th>
          <th> Код </th>
          <th> Название </th>
          <th> Действия </th>
        </tr>
        @foreach($products as $product)
          @php
            $user_id = Auth::id();
          @endphp
            @if($product->user_id === $user_id )
              <tr>
              <td> {{$product->id}} </td>
              <td> {{$product->code}} </td>
              <td> {{$product->name}} </td>
              <td>
                <div class="btn-group" role="group">
                  <form action="{{route ('products.destroy', $product)}}" method="POST">
                    <a class="btn btn-success" type="button"
                    href="{{route('products.show', $product)}}">Открыть</a>
                    <a class="btn btn-warning" type="button"
                    href="{{route('products.edit', $product)}}">Редактиовать</a>
                    @csrf
                    @method('DELETE')
                      <input class="btn btn-danger" type="submit" value="Удалить">
                  </form>
                </div>
              </td>
              </tr>
            @endif
            @endforeach
         </tbody>
      </table>
     <a class="btn btn-success" type="button" href="{{route('products.create')}}">Добавить объявление</a>
  </div>
@endsection
