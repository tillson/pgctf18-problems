<?php require_once('../header.php');
if (!$_SESSION['username']) {
  header('Location: /');
  die();
}
?>

<html>
  <head>
    <title>Corporate Manage</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <script src="/assets/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid" style="padding-top:30px;">
      <h1>Corporate Manage Panel</h1>
      <hr>
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="./">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./servers.php">Server Management</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          </ul>
        </nav>
        <div class="col-md-5 col-md-offset-5">
          <h2>Server Management</h2>
          <hr>
          <form action="./servers.php" method="post">
            <div class="form-group col-md-7">
              <div class="input-group">
                <input class="form-control" name="ipaddress" placeholder="Server IP" type="text" />
                <span class="input-group-btn">
                  <input class="btn btn-info" type="submit" value="Ping">
                </span>
              </div>
            </div>
          </form>
          <?php
            if (isset($_POST['ipaddress'])) {
              echo "<!--- ping [ipaddress]; -->";
              echo "<pre>";
              $out = array();
              echo exec('ping -c 1 ' . $_POST['ipaddress'] . ';', $out);
              foreach($out as $line) {
                echo $line . "\n";
              }
              echo "</pre>";
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
