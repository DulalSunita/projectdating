<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>
  <header>
    <nav>
      <div class="Logo-block">
        <img src="images/Tinder-logo.png" alt="Logo" class="Logo" />
      </div>
      <ul>
        <li><a href="login">Log in</a></li>
        <li><a href="register">Sign up</a></li>
      </ul>
    </nav>
  </header>
  <div class="Container">
    <form class="Login-form"method="post" action="/login">
        <h1>Login</h1>
        <label for="Email">Email Address</label>
        <input type="email" name="Email" placeholder="Email" id="Email" required>
        <label for="Password">Password</label>
        <input type="password" name="Password" placeholder="Password" id="Password" required>
        <button id="Login-button">Login</button>
        <div class="Register-link">
            Don't have an account? <a href="register">Register here</a>
        </div>
    </form>
  </div>
  <script src="js/axion.min.js"></script>
  <script src="js/global.js"></script>
  <script>
    LoadLogin();
  </script>
</body>
</html>