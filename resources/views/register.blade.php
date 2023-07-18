<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/register.css" />
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
  <div class="Container">
  <form class="Signup-form" method="post" action="">
    @csrf
        <h1>Sign Up</h1>
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" placeholder="Sajjan Raj" required>
        <label for="Age">Age</label>
        <input type="number" id="Age" name="Age" placeholder="28" required>
        <label for="Gender">Gender</label>
        <input type="number" id="Gender" name="Gender" placeholder="1 for male, 2 for female" required>
        <label for="Location">Location</label>
        <input type="text" id="Location" name="Location" placeholder="Nepal" required>
        <label for="Email">Email</label>
        <input type="email" id="Email" name="Email" placeholder="srv@example.com" required>
        <label for="Profile-picture">Valid Certificate</label>
        <input type="file" id="Profile-picture" name="Profile-picture" accept="image/*" required>
        <label for="Password">Password</label>
        <input type="password" id="Password" name="Password" placeholder="*******" required>
        <label for="Confirm-password">Confirm Password</label>
        <input type="password" id="Confirm-password" name="Confirm-password" placeholder="*******" required>
        <label for="Profile-picture">Profile Picture</label>
        <input type="file" id="Profile-picture" name="Profile-picture" accept="image/*" required>
        <button id="Register-button">Sign Up</button>
        <div class="Login-link">
            Already have an account? <a href="login">Log in here</a>
        </div>
    </form>
  </div>

  <script src="js/axion.min.js"></script>
  <script src="js/global.js"></script>
  <script>
    LoadRegister();
  </script>
</body>
</html>