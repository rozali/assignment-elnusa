<!-- Registration Method -->

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      
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
    <main role="main" class="mt-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Register to login</h4>
            <form class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="username">Username*</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName">Password*</label>
                  <input type="password" class="form-control" id="firstName" placeholder="" value="" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName">Password Confirm*</label>
                  <input type="password" class="form-control" id="lastName" placeholder="" value="" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
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
