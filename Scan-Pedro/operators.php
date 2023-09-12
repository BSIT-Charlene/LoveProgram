<?php
  require './php/sign-in.php';
  require './php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Franchise Operators | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/sidenav.css">
  <link rel="stylesheet" href="./css/operators.css">
</head>
<body>
  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'operators';
    require 'navbar.php';
  ?>

  <!--Page Content-->
  <main class="content-wrapper">
    <div class="container-fluid">
      <?php 
        include './php/operator-records.php';
      ?>
      <?php if (empty($operatorData)) { ?>
        <header><span>Official Records</span></header>
        <div class="page-section">
          <span>There's no record yet. Click <a href="application.php">here</a> to add.</span>
        </div>
      <?php } else { ?>
      <header>
        <span>Official Records</span>
      </header>
      
      <div class="table-area">
        <div class="franchise-text">
          <span>Franchise Operator</span>
        </div>
        <div class="table-functionalities">
        <div class="search-container">
          <input type="text" placeholder="Search..." class="search-input" id="searchInput" name="search" value="<?php echo htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8'); ?>">
          <i class='bx bx-search-alt-2'></i>
        </div>
          <!--Filter and Sort Area-->
        </div>
        <div class="table-wrapper">
          <input type="hidden" id="currentPage" value="1">
          <table class="operator-table">
            <thead>
              <tr class="table-header">
                <th>Franchise No.</th>
                <th>Franchise Holder</th>
                <th>Barangay</th>
                <th>Vehicle Units</th>
                <th>Number of Drivers</th>
                <th>TODA</th>
                <th>Franchise Validity</th>
              </tr>
            </thead>
            <tbody class="list" id="operatorList">
              <?php 
              foreach ($operatorData as $index => $data) { ?>
                <tr data-row-index="<?php echo $index; ?>" class="operator-row">
                  <td class="operator-id"><?php echo $data['operator_id']; ?></td>
                  <td class="operator-name"><?php echo $data['operator_given'] . ' ' . $data['operator_middle'] . ' ' . $data['operator_surname'] . ' ' . $data['operator_suffix']; ?></td>
                  <td class="barangay"><?php echo $data['barangay_name']; ?></td>
                  <td>Total Units No. 1</td>
                  <td>Total Drivers No. 1</td>
                  <td class="toda"><?php echo $data['toda_name']; ?></td>
                  <td>Franchise Validity No. 1</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="pagination">
          <!--Pagination Part-->
          <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
          <a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($searchTerm); ?>" <?php if ($i === $currentPage) echo 'class="active"'; ?>><?php echo $i; ?></a>
        <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </main>
  <script src="./js/operators.js"></script>
  <script>
    const toggleBtn = document.querySelector('.collapse-btn');
    const sidenav = document.querySelector('.sidenav');
    const contentWrapper = document.querySelector('.content-wrapper');

    toggleBtn.addEventListener('click', () => {
      sidenav.classList.toggle('collapsed');
    });
  </script>
</body>
</html>