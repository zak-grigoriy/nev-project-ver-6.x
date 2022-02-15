<div class="col-sm-6 col-md-3">
   <div class="thumbnail">
     <div class="caption">
        <img src="{{Storage::url($product->image)}}" heigh="240px">
        <h3><p>{{$product->name}} </p></h3>
        <p>{{$product->price}} руб.</p>
        <p>{{$product->id}}</p>
        <p>{{$product->name}}</p>
        <p>{{$product->price}} руб.</p>
        <p>{{$product->user_id}} user_id</p>
        <p>
        <a href="{{ route ('messagepodrobno',  $product->id)}}"
        class="btn btn-default" role="button">Подробнее</a>
      </p>
    </div>
  </div>
</div>
