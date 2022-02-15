@extends('views.layouts.app')

@section('title-block')
   Главная страница страница
@endsection

@section('content')
    <h3>Главноая страница страница</h3>
        <br>
{{--        @if($errors->any())--}}
{{--           <div class="alert alert-danger">--}}
{{--               <ul>--}}
{{--                   @foreach($errors->all() as $error)--}}
{{--                       <li>{{$error}}</li>--}}
{{--                   @endforeach--}}
{{--               </ul>--}}
{{--           </div>--}}
{{--        @endif--}}

{{--    <form method="POST" enctype="multipart/form-data" action="#">--}}
        <form method="POST" enctype="multipart/form-data" action="{{route('contact-form')}}">
      <div>
         <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Имя </label>
            <div class="col-sm-6">
               <input type="text" class="form-control" name="name" placeholder="Введите имя" id="name" value="">
            </div>
         </div>
             <br>

         <div class="input-group row">
            <label for="email" class="col-sm-2 col-form">Email</label>
            <div class="col-sm-6">
               <input type="text" class="form-control" name="email" placeholder="Введите Email" id="email">
            </div>
         </div>
            <br>

         <div class="input-group row">
           <label for="subject" class="col-sm-2 col-form">Тема</label>
           <div class="col-sm-6">
              <input type="text" name="subject" id="subject" class="form-control"
             placeholder="Тема сообщения">
           </div>
        </div>
           <br>

        <div class="input-group row">
           <label for="message" class="col-sm-2 col-form">Cообщениe</label>
           <div class="col-sm-6">
              <textarea name="message" id="message" class="form-control"
              placeholder="Введите сообщение"></textarea>
           </div>
        </div>

        <div class="col-sm-10">
           <label class="btn btn-default btn-file">
               Загрузить картинку <input type="file" style="display: none;" name="image" id="image">
           </label>
        </div>

          <br>
          <button class="btn btn-success" type="submit">Сохранить</button>
        @csrf
      </div>
    </form>
    <br>
    <br>
@endsection
