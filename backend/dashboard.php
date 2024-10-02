<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta name="viewport" content="device-width", initial-scale="1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-landmark"></i>
            <span>LGU</span>
        </div>





        <ul class="sidebar-menu">
            <li class="active"><a href="#" id="dashboard"><i class="fas fa-th-large"></i>Dashboard</a></li>
            <li><a href="#" id="module1"><i class="fas fa-wrench"></i>Module 1</a></li>
            <li><a href="#" id="module2"><i class="fas fa-wrench"></i>Module 2</a></li>
            <li><a href="#" id="module3"><i class="fas fa-wrench"></i>Module 3</a></li>
            <li><a href="#" id="module4"><i class="fas fa-wrench"></i>Module 4</a></li>
            <li><a href="#" id="module3"><i class="fas fa-wrench"></i>Module 5</a></li>
            <li><a href="#" id="module3"><i class="fas fa-wrench"></i>Module 6</a></li>
            <li><a href="#" id="module3"><i class="fas fa-wrench"></i>Module 7</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <header>
            <div class="menu-toggle" id="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="header-right">
                <i class="fas fa-comment-dots" id="message-icon"></i>
                <i class="fas fa-bell" id="notification-icon"></i>
                
                
                <div class="profile-container">
                    <div class="profile-icon">
                      <!-- Use your profile icon or placeholder image -->
                      <img src="aa.jpg" alt="Profile" class="profile-image">
                    </div>

 <!-- Dropdown menu -->
 <div class="dropdown-menu" id="dropdownMenu">
    <div class="menu-header">Hello, User!</div>
    <ul>
      <li><a href="editprofile.html"><i class="fa fa-user-circle"></i>Edit Profile</a></li>
      <li><a href="#"><i class="fa fa-question-circle"></i>Help & Support</a></li>
      <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
      <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a></li>
    </ul>
  </div>
</div>

        </header>
        <main>
            <h1 id="content-title">Dashboard</h1>
            <p>Welcome to your dashboard!</p>
        </main>
    </div>

    <script>// Toggle sidebar functionality
        document.getElementById("menu-toggle").addEventListener("click", function () {
            document.getElementById("sidebar").classList.toggle("collapsed");
            document.getElementById("main-content").classList.toggle("collapsed");
        });
   
        // Change content based on clicked module
        document.querySelectorAll(".sidebar-menu li a").forEach(item => {
            item.addEventListener("click", function (event) {
                // Remove active class from all menu items
                document.querySelectorAll(".sidebar-menu li").forEach(li => li.classList.remove("active"));
                
                // Add active class to clicked menu item
                event.currentTarget.parentElement.classList.add("active");
        
                // Change the content dynamically
                const contentTitle = document.getElementById("content-title");
                contentTitle.textContent = event.currentTarget.textContent.trim();
            });
        });
        
        // Handle profile, notifications, and messages click
        document.getElementById("profile-icon").addEventListener("click", function () {
            const profileIcon = document.getElementById('profileIcon');
const dropdownMenu = document.getElementById('dropdownMenu');

// Toggle the dropdown menu when the profile icon is clicked
profileIcon.addEventListener('click', function() {
  dropdownMenu.classList.toggle('show');
});

// Close the dropdown menu if clicked outside
window.addEventListener('click', function(e) {
  if (!profileIcon.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.remove('show');
  }
});
        });
        
        document.getElementById("notification-icon").addEventListener("click", function () {
            alert("Notifications clicked!");
        });
        
        document.getElementById("message-icon").addEventListener("click", function () {
            alert("Messages clicked!");
        });
        
        </script>
<!-- Add links to other modules or functionality as needed -->
    

</body>
</html>