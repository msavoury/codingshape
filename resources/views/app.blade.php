<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>codingshape.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="/assets/css/custom.css" media="screen">
  </head>
  <body ng-app="codingshape" ng-controller="cardController">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">codingshape.com</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw">about</a></li>
          </ul>

        </div>
      </div>
    </div>
    <div class="container">
      @yield('content')
      <footer>
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </footer>
    </div>
    <script src="/assets/js/lib/jquery-2.1.4.min.js"></script>
    <script src="/assets/js/lib/bootstrap.min.js"></script>
    <script src="/assets/js/lib/angular-1.4.5.min.js"> </script>
    <script src="/assets/js/lib/angular-sanitize-1.4.5.min.js"></script>
    <script src="/assets/js/codingshape.js"></script>
</body>
</html>
