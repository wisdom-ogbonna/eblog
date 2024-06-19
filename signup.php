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
    <a href="#" class="logo">LOGO</a>
  </nav>
  <div class="signup-container">
    <form class="signup-form">
      <h2>Create an Account</h2>
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>

      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

      </div>
      <div class="form-group">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
      </div>
      <button type="submit">Sign Up</button>
      <div class="alternate-action">
        Already have an account? <a href="signin.php">Log in</a>
      </div>
    </form>
  </div>
</body>
</html>
