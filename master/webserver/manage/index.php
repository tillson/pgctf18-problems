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
              <a class="nav-link active" href="./">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./servers.php">Server Management</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="./logout.php">Logout</a>
            </li>
          </ul>
        </nav>
        <div class="col-md-5 col-md-offset-5">
          <h2>Customer Information Query</h2>
          <hr>
          <form action="./index.php" method="post">
            <div class="form-group col-md-10">
              <div class="input-group">
                <input class="form-control" name="query" placeholder="Username" type="text" />
                <span class="input-group-btn">
                  <input class="btn btn-info" type="submit" value="Query">
                </span>
              </div>
            </div>
          </form>
          <?php
            if (isset($_POST['query'])) {
              $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,'manage');
              echo "<pre>";
              $query = $_POST['query'];
              $result = mysqli_query($db, $query);
              if (!$result) {
                die(mysqli_error($db));
              }
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              var_dump($row);
              echo "</pre>";
            }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
