@extends('auth.layouts.master')

@section('title-block')
    Все сообщения
@endsection

@section('content')
<div class="col=md-12">
    <h1>{{$category->id}}</h1>
    <table class="table">
        <tbody>
        <tr>
            <th> Поле </th>
            <th> Значение </th>
        </tr>
        <tr>
            <td> ID </td>
            <td> {{$category->id}} </td>
        </tr>
        <tr>
            <td> Код </td>
            <td> {{$category->code}} </td>
        </tr>
        <tr>
            <td> Название </td>
            <td> {{$category->name}} </td>
        </tr>
        <tr>
            <td> Описание </td>
            <td> {{$category->description}} </td>
        </tr>
        <tr>
            <td> Картинка </td>
            <td><img src="{{Storage::url($category->image)}}"
                     heigh="240px"></td>
        </tr>
        <!-- <tr>
            <td>Кол-во объвлений </td>
            <td> {{$category->count()}}</td>

        </tr> -->
        </tbody>
    </table>
</div>
@endsection
