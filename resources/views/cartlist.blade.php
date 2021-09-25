@extends('master')
@section("content")
<div class="container-fluid">
<br>
<h2>Product in Cart</h2>
<a class="btn btn-success" href="ordernow">Order Now</a>
<br>
<br>
@foreach ($products as $item)
    <div class="row cart-list-devider">
        <div class="col-sm-3 cart-items">
            <a href="detail/{{$item->id}}">    
                <img class="trending-image" src="{{$item->gallery}}">
            </a>
        </div>
        <div class="col-sm-3">
            <h2>{{$item->price}}</h2>
            <h2>{{$item->name}}</h2>
            <h5>{{$item->description}}</h5>

            <br>
        </div>
        <div class="col-sm-3">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from Cart</a>
        </div>
    </div>
    </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection 