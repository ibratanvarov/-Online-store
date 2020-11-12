
<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">
                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>{{$product->price}}</p>
                        <p>
                           <a href="{{route('main.basket')}}" class="btn btn-primary" role="button">В карзину</a>
                           <a href="{{route('main.product',[$product->category->code, $product->code])}}" class="btn btn-default" role="button">Подробнее</a></p>
                    </div>
                </div>
</div>
