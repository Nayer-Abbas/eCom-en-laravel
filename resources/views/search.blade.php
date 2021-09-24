@extends('master')
@section("content")
<div class="container">
    <a href="" > Filter</a>
<div class="trending-wrapper">
<h2>Search for Products</h2>
@foreach ($products as $item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">    
    <img class="trending-image" src="{{$item['gallery']}}">
    <div class="">
        <h2>{{$item['name']}}</h2>
        <h5>{{$item['description']}}</h5>
        <br>
        </a>
    </div>
    @endforeach
</div>
</div>

@endsection 