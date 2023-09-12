<head>
  <link rel="stylesheet" href="./css/sidenav.css">
</head>
<nav class="navbar">
    <div class="logo-scan">
      <div class="nav-logo-container">
        <img src="./img/white-logo.jpg" alt="">
      </div>
      <div class="scan-text">
        <span class="text1"><i>Scan Pedro</i></span>
        <br>
        <span class="text2">QR-Code Record Management System of Transportation Regulatory Unit, City of San Pedro, Laguna</span>
      </div>
    </div>
    <div class="user-config">
      <span>Administrator</span>
      <div class="config-drop">
        <i class='bx bxs-user user-icon'></i>
        <i class='bx bxs-down-arrow arrow-icon'></i>
      </div>
    </div>
  </nav>
  
  <div class="sidenav">
  <div class="collapse-btn">
    <i class='bx bx-menu'></i>
  </div>
  <div class="options">
    <span class="category">User Panel</span>
    <ul class="user-panel">
      <a href="dashboard.php"><li class="nav-list <?php echo ($activeModule === 'dashboard') ? 'selected' : ''; ?>"><i class='bx bxs-dashboard'></i><span> Dashboard</span></li></a>
      <a href="application.php"><li class="nav-list <?php echo ($activeModule === 'application') ? 'selected' : ''; ?>"> <i class='bx bxs-spreadsheet' ></i><span> Application Form</span></li></a>
    </ul>
    <span class="category">Records</span>
    <ul class="records">
      <a href="operators.php"><li class="nav-list <?php echo ($activeModule === 'operators') ? 'selected' : ''; ?>"><i class='bx bxs-user-rectangle'></i><span> Franchise Operator</span></li></a>
      <a href="drivers.html"><li class="nav-list <?php echo ($activeModule === 'drivers') ? 'selected' : ''; ?>"><i class='bx bxs-user-rectangle'></i><span> Tricycle Drivers</li></a>
      <a href="violations.html"><li class="nav-list <?php echo ($activeModule === 'violations') ? 'selected' : ''; ?>"><i class='bx bxs-traffic'></i><span> Violations</span></li></a>
    </ul>
    <span class="category">Manage</span>
    <ul class="manage">
      <a href="users.html"><li class="nav-list <?php echo ($activeModule === 'users') ? 'selected' : ''; ?>"><i class='bx bxs-user-detail'></i><span> Manage Users</span></li></a>
    </ul>
  </div>
</div>