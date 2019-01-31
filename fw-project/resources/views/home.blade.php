

<!-- HTML Login -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Home Page</title>
  </head>
  <body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline" method="POST">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-light my-2 my-sm-0">
                <input type="radio" name="login" id="option1" autocomplete="off" checked> Login
              </label>
              <label class="btn btn-outline-light my-2 my-sm-0">
                <input type="radio" name="register" id="option2" autocomplete="off"> Register
              </label>
            </div>
          </form>
        </div>
      </nav>
    </header>
    <main role="main" class="mt-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-6 col-sm-12">
            <div class="card">
              <h5 class="card-header">Hi, {{ $data[0] }}</h5>
              <div class="card-body">
                <p class="card-text">Berikut ini adalah detail informasi anda</p>
                <dl class="row">
                  <dt class="col-sm-3">User</dt>
                  <dd class="col-sm-9">{{ $data[0] }}</dd>

                  <dt class="col-sm-3">Nama</dt>
                  <dd class="col-sm-9">{{ $data[1] }}</dd>

                  <dt class="col-sm-3">Email</dt>
                  <dd class="col-sm-9">{{ $data[2] }}</dd>

                </dl>
                <a href="./logout" class="btn btn-warning text-white">Logout</a>
              </div>
            </div>
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
