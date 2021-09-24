<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>eComm-En</title>
  </head>
  <body>
      {{View::make("header")}}
      @yield("content")
      {{View::make("footer")}}
  </body>
  <style>
  .custom-login{
    height: 500px;
    padding-top: 100px;
  }
  .slider-img{
     height: 400px !important;
  }
  .custom-product{
    height: 600px;
  }
  .slider-text{
    background-color: #35443585 !important;
  }
  .treding-item{
    height: 100px;
    width: 100px; 
  }
  .treding-item{ 
    float: left;
    width: 20%;
  }
  .trending-wrapper{
    margin: 30px;
  }
  .detail-img{
    height: 200px
  }
  .search-box{
    width: 500px !important;
  }
  .trending-image{
    height: 100px;
  }
  .cart-list-devider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }
  .cart-items{
    margin-left: 70px;
  }
  .ecom-footer{
    background-color: silver;
  }
  .footer-text{
    margin-left:420px;
  }
</style>
</html>