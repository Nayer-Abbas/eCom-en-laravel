@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/"><button class="btn btn-success">Go Back</button></a>
        <h2>{{$product['name']}}<h2> 
            <hr>
        <h3>Price: {{$product['price']}}<h3> 
        <h4>Detail: {{$product['description']}}<h4> 
            <br><br>
            <a href="/"><button class="btn btn-primary">Add to Card</button></a>
            <br><br>
            <a href="/"><button class="btn btn-success">Buy Now</button></a>

        </div>
    </div>
</div>

@endsection 