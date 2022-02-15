<div class="col-sm-6 col-md-3">
  <div class="thumbnail">
    <div class="caption">
      @foreach ($products as $product)
      @if($product->id == $item)
      <img src="{{Storage::url($product->image)}}" heigh="240px">
      <h3><p>{{ $product->name}}</p></h3>
      <p>{{$product->price}} руб.</p>
      <p>{{$product->id}} </p>
      @endif
      @endforeach
      <a href="/messagepodrobno/{{$item}}"><button type="button"
      class="btn btn-outline-secondary">Подробнее</button></a>
    </div>
  </div>
</div>
