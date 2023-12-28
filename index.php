<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
  <header>
      <nav class="navbar navbar-expand-lg bg-transparent mt-2">
        <div class="container-fluid container-lg" id="round-onclick">
          <a class="logo d-lg-none d-block text-decoration-none" href="/tubes">
            <h1>E-Absensi</h1>
          </a>

            <a class="logo d-lg-block text-decoration-none d-none" href="/tubes">
              <h1>E-Absensi</h1>
            </a>
          
        </div>
      </nav>
    </header>

    <div class="video position-relative">
      <video autoplay muted loop id="myVideo">
        <source src="video.mp4" type="video/mp4" />
      </video>
      <div class="d-flex justify-content-center">
        <div class="detail">
          <button type="button" class="btn btn-dark rounded-5 bg-transparent p-3"><a class="nav-link" href="edit.php">Absent</a></button>
          <hr class="mb-3" />
          <a href="" class="text-decoration-none fw-normal">Update Your Presensi</a>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>