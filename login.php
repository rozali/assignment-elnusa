<!-- Login Method -->

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    session_start();
      
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = FALSE;

    if (isset($_POST['signin'])) {
      if ($fh = fopen('user.txt', 'r')) {
          while (!feof($fh)) {
              $line = fgets($fh);
              $content  = explode("|", $line);
              $content[3] = str_replace("\r\n", "", $content[3]);
              if ($content[0] == $username && $content[3] == $password) {
                $_SESSION['user'] = $content[0];
                header("location:home.php");
                $login = TRUE;
              }
          }
          fclose($fh);
      }
      if (!$login) {
        echo '<script language="javascript">';
        echo 'alert("Login Gagal. Mohon cek kembali Username dan Password anda")';
        echo '</script>';
      }
    } elseif(isset($_POST['register'])) {
      header("location:register.php");
    }
    
  }
 ?>

<!-- HTML Login -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body class="bg-light">
    <main role="main" class="mt-5">
      <div class="container">
        <div class="row justify-content-md-center text-center">
          <div class="col-lg-4 col-sm-12">
           <form class="form-signin" method="POST">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              <label for="inputUsername" class="sr-only">Username</label>
              <input type="text" id="inputUsername" class="form-control mb-3" placeholder="Username" name="username">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" name="password">
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
              <p class="mt-3 text-muted">or</p>
              <button class="btn btn-lg btn-success btn-block" type="submit" name="register">Register</button>
              <p class="mt-5 mb-3 text-muted">&copy; Rozali Syahputra</p>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
