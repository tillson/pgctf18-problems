<?php
require('header.php');
 ?>
<html>
  <head>
    <title>Login to Manage</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css" type="text/css">
  </head>
  <body>
    <div class="container" style="padding-top:30px;">
      <h1>Login to Manage</h1>
      <hr>
      <div class="row">
        <div class="col-md-4 col-md-offset-5">
          <form method="post" action="login.php">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
