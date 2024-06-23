<?php
include("admin/templates/header.php");
?>

<nav>

  <a href="#" class="logo">LOGO</a>
  <div class="nav-items">
    <a class="nav-link" href="signin.php">signin</a>
    <a class="nav-link" href="signup.php">signup</a>
    <a class="nav-link" href="dashboard.php">Dashboard</a>
  </div>

  <div class="menu-icon">
    <img src="images/menu-icon.svg" alt="" />
  </div>
</nav>

<div class="mobile-nav-menu">
  <a class="nav-link" href="#features">Features</a>
  <a class="nav-link" href="#pricing">Pricing</a>
  <a class="nav-link" href="#cta">Download</a>
</div>

<header>
  <div class="container">
    <div class="left">
      <h1>Simplified Task Management</h1>

      <p>
        Streamline your productivity and stay organized with our powerful
        task management app
      </p>

      <div class="buttons">
        <a href="#" class="download-btn">
          <div class="btn-icon">
            <img src="images/appstore-logo.svg" alt="" />
          </div>
          <div class="btn-text">
            <div>Get It On</div>
            <div>App Store</div>
          </div>
        </a>

        <a href="#" class="download-btn">
          <div class="btn-icon">
            <img src="images/google-play-icon.svg" alt="" />
          </div>
          <div class="btn-text">
            <div>Download It On</div>
            <div>Google Play</div>
          </div>
        </a>
      </div>
    </div>

    <div class="right">
      <img src="images/hero-image.png" alt="" />
    </div>
  </div>
</header>

<div class="container">
  <section id="posts">
    <h2>Latest Posts</h2>
    <div class="container mt-4">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
          <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Summary</th>
            <th>Post</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include("admin/connect.php");

          $query = "SELECT * FROM posts";
          $result = mysqli_query($conn, $query);

          if ($result) {
            while ($row = mysqli_fetch_array($result)) {
          ?>
              <tr>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
                <td><?php echo htmlspecialchars($row['title']); ?></td>
                <td><?php echo htmlspecialchars($row['summary']); ?></td>
                <td><?php echo htmlspecialchars($row['content']); ?></td>
                <td>
                  <a href="admin/view.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">View</a>
                  <a href="admin/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                  <a href="admin/delete.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
          <?php 
            }
          } else {
            echo "<tr><td colspan='5' class='text-center'>No posts available.</td></tr>";
          }
          ?>
        </tbody>
    </table>
</div>
  </section>


  <section id="features">
    <h2>Features</h2>
    <div class="content">
    </div>
  </section>

  <section id="testimonials">
    <div class="content">
      <div class="left">
        <h2>What our customers say about the app</h2>
        <p>There are already more than 100k+ customers using our app.</p>
      </div>

      <div class="right">
        <div class="testimonial-card">
          <span class="quote-icon">
            <img src="images/quote-icon.svg" alt="" />
          </span>

          <p class="review">
            Since I started using the app, my productivity has skyrocketed.
            The reminder feature keeps me on track. Highly recommended!
          </p>

          <div class="reviewer-info">
            <div class="image">
              <img src="images/testimonial1.png" alt="" />
            </div>

            <div class="details">
              <div class="name">John Smith</div>
              <div class="designation">Tech Lead, Amazon</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="navigation-btns">
      <div class="prev-btn">
        <img src="images/chevron-left.svg" alt="" />
      </div>
      <div class="next-btn">
        <img src="images/chevron-right.svg" alt="" />
      </div>
    </div>

    <span class="bg-element"></span>
  </section>


  <section id="cta">
    <h2>Get Started Today</h2>
    <div class="content">
      <p>
        Take control of your tasks and boost your productivity. Get started
        today and experience the power of efficient task management
      </p>

      <div class="buttons">
        <a href="#" class="download-btn">
          <div class="btn-icon">
            <img src="images/appstore-logo.svg" alt="" />
          </div>
          <div class="btn-text">
            <div>Get It On</div>
            <div>App Store</div>
          </div>
        </a>

        <a href="#" class="download-btn">
          <div class="btn-icon">
            <img src="images/google-play-icon.svg" alt="" />
          </div>
          <div class="btn-text">
            <div>Download It On</div>
            <div>Google Play</div>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>

<footer>
  <div class="container">
    <div class="content">
      <div class="left">
        <div class="logo">LOGO</div>
        <p>Best Task Management App</p>
      </div>

      <div class="right">
        <div class="links">
          <h3>Quick Links</h3>
          <ul>
            <li>
              <a href="#">About Us</a>
            </li>

            <li>
              <a href="#">Privacy Policy</a>
            </li>

            <li>
              <a href="#">Terms & Conditions</a>
            </li>
          </ul>
        </div>

        <div class="links">
          <h3>Contact Us</h3>
          <ul>
            <li>+1 (555) 123-4567</li>
            <li>contact@example.com</li>
            <li>123 Main Street, City, State, ZIP</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="copyright">
      <p>Designed by Live Blogger © 2023</p>
      <div class="socials">
        <a href="#"><img src="images/facebook-logo.svg" alt="" /></a>
        <a href="#"><img src="images/instagram-logo.svg" alt="" /></a>
        <a href="#"><img src="images/twitter-logo.svg" alt="" /></a>
      </div>
    </div>
  </div>
</footer>

<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>