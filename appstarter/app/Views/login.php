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
    
    <div class="header">
      <div class="header-left">
        <img class="logo" src="http://bappeda.lampungprov.go.id/logo/logo.png" />
      </div>
      <div class="header-right">
        <ul>
          <li><a href="default.asp">About</a></li>
          <li><a href="news.asp">News</a></li>
          <li><a href="contact.asp">Contact</a></li>
          <li><a href="about.asp">Home</a></li>
        </ul>
      </div>
    </div>

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