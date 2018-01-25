<?php require_once('../header.php');
if (!isset($_SESSION['username'])) {
  header('Location: /');
  die();
}
?>

<html>
  <head>
    <title>Equifax Management Panel</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid" style="padding-top:30px;">
      <h1>Equifax Management Panel</h1>
      <hr>
      <div class="row">
        <div class="col-md-5 col-md-offset-5">
          <h2>flag{c4tching_th4t_sw33t_equiflacc}</h2>
        </div>
    </div>
  </body>
</html>
