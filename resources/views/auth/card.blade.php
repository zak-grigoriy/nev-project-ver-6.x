<div class="col-sm-6 col-md-3">
  <div class="thumbnail">
    <img src="#" alt="">
      <div class="caption">
      <img src="{{Storage::url($product->image)}}" heigh="240px">
      <h3><p>{{$product->name}} </p></h3>
        <p>{{$product->price}} руб.</p>
        <!-- <p>{{$product->user_id}} user_id</p> -->
        <p>{{$product->id}} id</p>
        <p>
           <a href="{{ route('contact-data', $product->id) }}" class="btn btn-default"
           role="button">Комментарии</a>
        </p>
      </div>
    </div>
</div>
