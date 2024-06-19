<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"> <!-- Bootstrap Icons CSS -->
  <link rel="stylesheet" href="css/style.css"> <!-- Ensure this links to your CSS file -->
</head>
<body>
  <div class="dashboard-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="profile">
        <i class="bi bi-person-circle" style="font-size: 50px; margin-right: 15px;"></i> <!-- Bootstrap Profile Icon -->
        <div class="profile-info">
          <div class="name">John Doe</div>
          <div class="role">Blogger</div>
        </div>
      </div>
      <ul class="menu">
        <li><a href="#"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
        <li><a href="#"><i class="bi bi-pencil-square"></i> New Post</a></li>
        <li><a href="#"><i class="bi bi-file-earmark-text"></i> Posts</a></li>
        <li><a href="#"><i class="bi bi-folder"></i> Categories</a></li>
        <li><a href="#"><i class="bi bi-gear"></i> Settings</a></li>
      </ul>
    </div>
    <!-- Main Content -->
    <div class="main-content">
      <!-- Statistics Section -->
      <div class="statistics">
        <div class="stat-card">
          <h3>Total Posts</h3>
          <div class="number">120</div>
        </div>
        <div class="stat-card">
          <h3>Total Views</h3>
          <div class="number">45,000</div>
        </div>
        <div class="stat-card">
          <h3>Total Comments</h3>
          <div class="number">300</div>
        </div>
      </div>
      <!-- Recent Posts Section -->
      <div class="recent-posts">
  <h2><i class="bi bi-journal-text"></i> Recent Posts</h2>
  <div class="post">
    <i class="bi bi-image post-icon"></i>
    <div class="post-info">
      <h3>Understanding CSS Grid</h3>
      <p>March 15, 2024</p>
    </div>
  </div>
  <div class="post">
    <i class="bi bi-image post-icon"></i>
    <div class="post-info">
      <h3>Mastering Flexbox</h3>
      <p>February 20, 2024</p>
    </div>
  </div>
  <div class="post">
    <i class="bi bi-image post-icon"></i>
    <div class="post-info">
      <h3>JavaScript Best Practices</h3>
      <p>January 30, 2024</p>
    </div>
  </div>
</div>

      <!-- Categories Section -->
      <div class="categories">
        <h2><i class="bi bi-tags"></i> Categories</h2>
        <ul>
          <li>Web Development</li>
          <li>JavaScript</li>
          <li>CSS</li>
          <li>HTML</li>
          <li>React</li>
          <li>Angular</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
