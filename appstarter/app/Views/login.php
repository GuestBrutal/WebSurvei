<!DOCTYPE html>
<html>
  <head>
    <link href="/login.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Static Template</title>
  </head>

  <body>
  <?= $this->include('layout/header') ?>

    <div class="container" id="container">
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Laman Masuk Admin</h1>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Hubungi Desk Jika Lupa Password</a>
          <button>Masuk</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <h1>Selamat Datang</h1>
            <p>Silahkan Masuk Terlebih Dahulu</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>