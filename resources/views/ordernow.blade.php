@extends('master')
@section("content")
<div class="container">
  <h3 class="text-danger">Total Amount:</h3>
  <br>
    <div class="col-sm-10">
    <table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tex</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
    <h3 class="text-danger">Enter Your Address:</h3><br>
  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address"  placeholder="enter your Address" class="form-control" required></textarea>
  </div>
  <h3 class="text-danger">Select Your Payment:</h3><br>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span>  Online Payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>  Emi Payment</span><br><br>
    <input type="radio" value="cash" name="payment"><span>  Payment on Delivery</span><br><br>
  </div>
    <button type="submit" class="btn btn-success">Order Now</button>
</form>
<br>
<br>
<br>
  </div>
    </div>
</div>
@endsection 