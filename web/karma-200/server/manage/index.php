<?php require_once('../header.php');
if (!$_SESSION['username']) {
  header('Location: /');
  die();
}
?>

<html>
  <head>
    <title>Karma Police Department</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid" style="padding-top:30px;">
      <h1>Karma Police Department Records</h1>
      <hr>
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="./">Flag Vault <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </nav>
        <div class="col-md-5 col-md-offset-5">
          <h2>Flag Vault</h2>
          <hr>
          <p>flag{th1s_1s_wh4t_youll_g3t}</p>
        </div>
      </div>
    </div>
  </body>
</html>
