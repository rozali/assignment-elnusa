<!-- Registration Method -->

<?php
    $output = "";
    $output2 = "";
    $daftar = TRUE;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      $username = $_POST['username'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $password1 = $_POST['password1'];
      $password2 = $_POST['password2'];
      $register = $_POST['register'];
      $usernamelength = strlen($username);
      
      if (isset($register)){
        if ($usernamelength < 5){
            $output= "<p class='text-danger'>Invalid username. Username harus 4 karakter atau lebih</p>";
            $daftar = FALSE;
        }

        if ($password1 != $password2){
            $output2= "<p class='text-danger'>Password anda tidak sama</p>";
            $daftar = FALSE;
        }
      }

      if ($daftar) {
        if ($fh = fopen('user.txt', 'a')) {
          $input = "\r\n" .$username. "|" .$nama. "|" .$email. "|" .$password2;
          fwrite($fh, $input);
          fclose($fh);
          echo '<script language="javascript">';
          echo 'alert("Berhasil registrasi. Silahkan Login")';
          echo '</script>';
          header("location:login.php");
        }
      }
    }
?>

<!-- HTML Register -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Register Page</title>
  </head>
  <body class="bg-light">
    <main role="main" class="mt-5 mb-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Register to login</h4>
            <form class="needs-validation" method="POST">
              <div class="mb-3">
                <label for="username">Username*</label>
                <input class="form-control" id="username" placeholder="Username" name="username" required>
                <?php echo $output; ?>
              </div>
              <div class="mb-3">
                <label for="nama">Nama*</label>
                <input class="form-control" id="nama" placeholder="Nama" name="nama" required>
              </div>
              <div class="mb-3">
                <label for="inputEmail">Email address*</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="firstName">Password*</label>
                  <input type="password" class="form-control" id="firstName" placeholder="Password" value="" name="password1" required>
                  <br><?php echo $output2; ?>
                </div>
                <div class="col-md-6">
                  <label for="lastName">Password Confirm*</label>
                  <input type="password" class="form-control" id="lastName" placeholder="Password Confirm" value="" name="password2" required>
                </div>
              </div>
              <p> * <span class="text-danger">Required</span> </p>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Register</button>
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
