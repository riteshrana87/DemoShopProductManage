<!-- Single Product -->
<div class="col-md-6 col-lg-4 col-xl-3">
    <div id="product-1" class="single-product">
            <div class="part-1" style="background: url('{{url('storage/'.$product->image)}}');background-size: cover !important;transition: all 0.3s !important;"></div>
            <div class="part-2">
                    <h3 class="product-title">{{$product->name}} | {{$product->getCategory->name}}</h3>
                    <h4 class="product-price">${{$product->price}}</h4>
            </div>
    </div>
</div>
