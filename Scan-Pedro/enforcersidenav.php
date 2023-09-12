<head>
  <link rel="stylesheet" href="./css/enforcersidenav.css">
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
      <span>Enforcer</span>
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
      <a href="vehicleslist.php"><li class="nav-list <?php echo ($activeModule === 'vehicleslist') ? 'selected' : ''; ?>"> <i class='bx bxs-spreadsheet' ></i><span> Vehicle List</span></li></a>
      <a href="driverslist.php"><li class="nav-list <?php echo ($activeModule === 'driverslist') ? 'selected' : ''; ?>"> <i class='bx bxs-spreadsheet' ></i><span> Driver List</span></li></a>
    </ul>
    <span class="category">Records</span>
    <ul class="records">
      <a href="violations.html"><li class="nav-list <?php echo ($activeModule === 'violations') ? 'selected' : ''; ?>"><i class='bx bxs-traffic'></i><span> Violations</span></li></a>
    </ul>
  </div>
</div>