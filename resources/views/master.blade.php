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
</style>
</html>