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
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h4 class="mb-3">Register to login</h4>
            <form method="POST" action="register" novalidate>
              {{ csrf_field() }}
              <div class="mb-3">
                <label for="username">Username*</label>
                <input class="form-control" id="username" placeholder="Username" name="username" required>
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
                  <label for="password">Password*</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" value="" name="password" required>
                </div>
                <div class="col-md-6">
                  <label for="password_confirmation">Password Confirm*</label>
                  <input type="password" class="form-control" id="password_confirmation" placeholder="Password_Confirm" value="" name="password_confirmation" required>
                </div>
              </div>
              <p> * <span class="text-danger">Required</span> </p>
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
