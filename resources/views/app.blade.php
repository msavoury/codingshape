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
            <li><a href="">Built With </a></li>
            <li><a id="about" data-toggle="modal" data-target="#aboutModal" href="">about</a></li>
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
    <!--MODALS-->
    <!-- Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">About</h4>
      </div>
      <div class="modal-body">
        Created by <a href="http://www.github.com/msavoury">@marcossavoury</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <!--END MODALS -->
    <script src="/assets/js/lib/jquery-2.1.4.min.js"></script>
    <script src="/assets/js/lib/bootstrap.min.js"></script>
    <script src="/assets/js/lib/angular-1.4.5.min.js"> </script>
    <script src="/assets/js/lib/angular-sanitize-1.4.5.min.js"></script>
    <script src="/assets/js/codingshape.js"></script>
</body>
</html>
