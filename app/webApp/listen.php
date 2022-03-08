<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Listen to music!</title>
    <link rel="stylesheet" href="../frontEnd/assets/cssFolder/main.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>

     <li>
       <a href="fsongs.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Favorite songs</span>
       </a>
       <span class="tooltip">Favorite songs</span>
     </li>
     <!-- <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li> -->
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li>
        <a href="main.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home Page</span>
        </a>
         <span class="tooltip">Home Page</span>
      </li>
      <li class="profile">
         <div class="profile-details">
            <div class="name_job">
                <div class="name">Piero Angela</div>
            </div>
         </div>
        <i class='bx bx-log-out' id="log_out"></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Here you can listen to our tracks!<br>
    <div class="text">!Work In Progress!</div><br>
</section>
  <script src="../frontEnd/assets/jsFolder/script.js"></script>
</body>
</html>
