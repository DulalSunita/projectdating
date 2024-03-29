<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/profile.css" />
</head>
<body>
    <header>
        <nav id="Nav-without-user">
          <a class="Logo-block" href="index.html">
            <img src="images/Tinder-logo.png" alt="Logo" class="Logo" />
          </a>
          <ul>
            <li><a href="login">Log in</a></li>
            <li><a href="register">Sign up</a></li>
          </ul>
        </nav>
        <nav id="Nav-with-user" class="Disabled">
          <a class="Logo-block" href="index.html">
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
    <div class="container">
        <div class="profile">
            <div class="profile-personal">
                <img src="images/random guy.jpg" alt="Profile picture" id="Profile-picture">
                <div class="personal-info">
                    <h1 class="username" id="name">Sajjan Raj </h1>
                    <ul>
                        <li id="email"><strong>Email:</strong> srv@example.com</li>
                        <li id="age"><strong>Age:</strong> 28</li>
                        <li id="location"><strong>Location:</strong> Nepal</li>
                    </ul>
                    <button class="profile-btns" id="edit-profile-btn"><a  href="edit_profile.html">Edit Profile</a></button>
                    <button class="profile-btns" id="reset-password-btn">Reset Password</button>
                </div>
            </div>
            <div class="profile-details">
                <div class="description">
                    <h2>About Me</h2>
                    <p id="description">Edit your profile to add a description!</p>
                </div>
                <div class="additional-pictures">
                    <h2>Additional Pictures</h2>
                    <div class="pictures-container" id="pictures-container">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/fc8d13f77c.js" crossorigin="anonymous"></script>
    <script src="js/axion.min.js"></script>
    <script src="js/global.js"></script>
    <script>
      LoadProfile();
    </script>
</body>
</html>
