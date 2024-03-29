<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inbox</title>
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/inbox.css" />
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
  <div class="Container"  id="Messages-section">
  </div>
</div>

<script src="https://kit.fontawesome.com/fc8d13f77c.js" crossorigin="anonymous"></script>
<script src="js/axion.min.js"></script>
    <script src="js/global.js"></script>
    <script>
      LoadInbox();
    </script>
</body>
</html>