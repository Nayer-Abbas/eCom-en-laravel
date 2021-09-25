@extends('master')
@section("content")
<div class="container-fluid">
<br>
<h2>My Orders</h2>
<br>
<br>
@foreach ($orders as $item)
    <div class="row cart-list-devider">
        <div class="col-sm-3 cart-items">
            <a href="detail/{{$item->id}}">    
                <img class="trending-image" src="{{$item->gallery}}">
            </a>
        </div>
        <div class="col-sm-3">
            <h3>Name : {{$item->name}}</h3>
            <h5>Delivery Status : {{$item->status}}</h5>
            <h5>Address : {{$item->address}}</h5>
            <h5>Payment Status : {{$item->payment_status}}</h5>
            <h5>Payment Method : {{$item->payment_method}}</h5>
            <br>
        </div>  
    </div>
    </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection 