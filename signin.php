<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link rel="stylesheet" href="css/style.css"> <!-- Ensure this links to your CSS file -->
</head>

<body>

  <nav>
    <a href="index.php" class="logo">LOGO</a>
  </nav>

  <div class="signup-container">
    <form class="signup-form">
      <h2>Dashboard</h2>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Sign In</button>
      <div class="alternate-action">
        Do not have an account? <a href="signup.php">Create Account</a>
      </div>
    </form>
  </div>
</body>

</html>