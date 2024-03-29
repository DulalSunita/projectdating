<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inbox</title>
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/notification.css" />
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
  <h1 style="text-align: center;">Favorites Section</h1>
  <div class="Container" id="Favorites-section">
    <div class="Notification">
      <div class="Notification-content">
        <h3>Jane Smith Has Favorited You!</h3>
        <p>1 day ago</p>
      </div>
    </div>
  </div>
  <h1 style="text-align: center;">Blocks Section</h1>
  <div class="Container" id="Blocks-section">
    <div class="Notification">
      <div class="Notification-content">
        <h3>John Doe Has Blocked You!</h3>
        <p>2 hours ago</p>
      </div>
    </div>
  </div>
</div>
<script src="https://kit.fontawesome.com/fc8d13f77c.js" crossorigin="anonymous"></script>
<script src="js/axion.min.js"></script>
    <script src="js/global.js"></script>
    <script>
      LoadNotification();
    </script>
</body>
</html>