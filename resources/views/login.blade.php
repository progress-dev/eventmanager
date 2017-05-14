<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Event Manager</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <center><img src="img/head.png" style="width:70%; margin-top:30%;"></center>
      <div id="login">
          <form action="admin"><br><br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" name="Username" placeholder="Username" class="form-control">
            </div><br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-pencil"></span>
              </span>
              <input type="password" name="Password" placeholder="Password" class="form-control">
            </div><br>
            <input type="submit" value="Login" class="btn btn-block" style="background-color: #000033; color: #ffffff;">
            <p style="color:#000033; text-align:center; font-size:12px"><br>
              &copy Progress All Right Reserved
            </p>
          </form>
      </div>
    </div>
    <div class="col-md-4"></div>

    <!-- Script !-->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
