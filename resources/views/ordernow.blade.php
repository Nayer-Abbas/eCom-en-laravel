@extends('master')
@section("content")
<div class="container">
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
  <form action="/action_page.php">
  <div class="form-group">
    <textarea type="email" placeholder="enter your Address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <input type="radio" name="payment"><span> Online Payment</span><br><br>
    <input type="radio" name="payment"><span> Emi Payment</span><br><br>
    <input type="radio" name="payment"><span> Payment on Delivery</span><br><br>
  </div>
    <button type="submit" class="btn btn-success">Order Now</button>
</form>
  </div>
    </div>
</div>
@endsection 