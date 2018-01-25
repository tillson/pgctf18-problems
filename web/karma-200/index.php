<?php
require('header.php');
 ?>
<html>
  <head>
    <title>Karma Police Department</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container" style="padding-top:30px;">
      <h1>Karma Police Department</h1>
      <i>Protecting and serving since 1997</u>
      <hr>
      <div class="row">
        <div class="col-md-7 col-md-offset-5">
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
          <i>Users are securely authenticated against our Super Quarantined Live database.</i>
        </div>
      </div>
    </div>
  </body>
</html>
