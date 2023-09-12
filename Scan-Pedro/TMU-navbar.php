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
      <span>TMU</span>
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
      <a href="TMU-dashboard.php"><li class="list <?php echo ($activeModule === 'dashboard') ? 'selected' : ''; ?>"><i class='bx bxs-dashboard'></i><span> Dashboard</span></li></a>
      <a href="violation-records.php"><li class="list <?php echo ($activeModule === 'violation-records') ? 'selected' : ''; ?>"> <i class='bx bxs-spreadsheet' ></i><span>Violation Records</span></li></a>
      <a href="driver-violation.php"><li class="list <?php echo ($activeModule === 'driver-violation') ? 'selected' : ''; ?>"> <i class='bx bxs-spreadsheet' ></i><span>Tricycle Drivers Violation</span></li></a>
    </ul>
   
    <span class="category">Manage</span>
    <ul class="manage">
      <a href="violation-type.php"><li class="list <?php echo ($activeModule === 'violation-type') ? 'selected' : ''; ?>"><i class='bx bxs-user-detail'></i><span> Manage Violation Type</span></li></a>
      <a href="report.php"><li class="list <?php echo ($activeModule === 'report') ? 'selected' : ''; ?>"><i class='bx bxs-report'></i><span>Reports</span></li></a>
    </ul>
  </div>
</div>