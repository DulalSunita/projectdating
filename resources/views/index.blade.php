<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <header>
      <nav id="Nav-without-user">
        <a class="Logo-block" href="index">
          <img src="images/Tinder-logo.png" alt="Logo" class="Logo" />
        </a>
        <ul>
          <li><a href="login">Log in</a></li>
          <li><a href="register">Sign up</a></li>
        </ul>
      </nav>
      <nav id="Nav-with-user" class="Disabled">
        <a class="Logo-block" href="index">
          <img src="images/Tinder-logo.png" alt="Logo" class="Logo" />
        </a>
        <ul>
          <li><a href="inbox"><i class="fas fa-inbox"></i></a></li>
          <li><a href="notification"><i class="fas fa-bell"></i></a></li>
          <li><a href="profile"><i class="fas fa-user"></i></a></li>
          <li><a href="#" onclick="Logout()"><i class="fas fa-right-from-bracket"></i></a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <div class="Parallax">
          <h1 class="Parallax-title">Find your perfect match</h1>
          <div class="Get-started">
            <a href="register" class="Get-started-button">Get started</a>
            <a href="browse"  class="Get-started-button Disabled">Start Looking</a>
          </div>
        </div>
      </section>

      <section class="features">
        <div class="feature">
          <i class="fas fa-heart"></i>
          <h2>Match with singles</h2>
          <p>Swipe right to like or left to pass. Start swiping now!</p>
        </div>

        <div class="feature">
          <i class="fas fa-users"></i>
          <h2>Expand your social circle</h2>
          <p>Find new friends and expand your social circle.</p>
        </div>

        <div class="feature">
          <i class="fas fa-comments"></i>
          <h2>Chat and connect</h2>
          <p>Chat with your matches and connect on a deeper level.</p>
        </div>
      </section>
    </main>

    <script src="https://kit.fontawesome.com/fc8d13f77c.js" crossorigin="anonymous"></script>
    <script src="js/axion.min.js"></script>
    <script src="js/global.js"></script>
    <script>
      LoadIndex();
    </script>
  </body>
</html>
