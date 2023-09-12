<?php
  require './php/sign-in.php';
  require './php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Franchise Operators | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/sidenav.css">
  <link rel="stylesheet" href="./css/violation-type.css">
  <link rel="stylesheet" href="./css/pop-up violation.css">
</head>
<body>
  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'violation-type';
    require 'TMU-navbar.php';
  ?>

  <!--Page Content-->
  <main class="content-wrapper">
    <div class="container-fluid">
      <?php 
        include './php/operator-records.php';
      ?>

<header>
        <span>Violation Type</span>
      </header>
      
      <div class="table-area">
        <div class="violation-text">
          <h5>Franchise Operator</h5>
            <button class="btn btn-outline-secondary"><i class="bx bx-edit"></i></button>
            <button class="btn btn-outline-secondary"><i class="bx bx-trash"></i></button>
            <button class="btn btn-outline-secondary"><i class="bx bx-upload"></i></button>
            <button id="showPopup">Add Violation Type</button>
            
            <div id="popup" class="modal">
            <div class="modal-content">
            <span class="close" id="closePopup">&times;</span>
            <h2>Popup Content</h2>
            <p>This is a simple popup.</p>
        </div>
        </div>
        </div>
        </div>
        
        <div class="table-functionalities">
        <div class="search-container">
          <input type="text" placeholder="Search..." class="search-input" id="searchInput" name="search" value="<?php echo htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8'); ?>">
          <i class='bx bx-search-alt-2'></i>
        </div>
                    
       <div class="dropdown">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sort By </button>
              <div class="dropdown-menu" aria-labelledby="sortDropdown">
                  <a class="dropdown-item" href="#">Option 1</a>
                  <a class="dropdown-item" href="#">Option 2</a>
                  <a class="dropdown-item" href="#">Option 3</a>
              </div>
        </div>

        

          <!--Filter and Sort Area-->
        </div>
        <div class="table-wrapper">
          <input type="hidden" id="currentPage" value="1">
          <table class="operator-table">
            <thead>
              <tr class="table-header">
              <th class="bordertable">
                    <div class="checkbox-group">
                            <input type="checkbox" name="" id="header-checkbox" class="requirement-label">
                            <label class="checkbox-label" for="header-checkbox"></label>
                    </div>
              </th>
                <th>#</th>
                <th>Violation Code</th>
                <th>Violation Type</th>
                <th>Violation Description</th>
                <th>1st Attempt</th>
                <th>2nd Attempt</th>
                <th>3rd Attempt</th>  
              </tr>
            </thead>
            
            <tbody class="list" id="operatorList">
              <td class="bordertable">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-2" class="requirement-label">
                      <label class="checkbox-label" for="requirement-2"></label>
                    </div>
              </td>
                <td>01</td>
                <td>VF001</td>
                <td>Operating without Franchise</td>
                <td>Description</td>
                <td>1000.00</td>
                <td>1000.00</td>
                <td>1000.00</td> 
            </tbody>

            <tbody class="list" id="operatorList">
              <td class="bordertable">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-3" class="requirement-label">
                      <label class="checkbox-label" for="requirement-3"></label>
                    </div>
              </td>
                <td>02</td>
                <td>VF002</td>
                <td>Operating with Expired Franchise</td>
                <td>Description</td>
                <td>1000.00</td>
                <td>1000.00</td>
                <td>1000.00</td>
            </tbody>

             <tbody class="list" id="operatorList">
              <td class="bordertable">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-4" class="requirement-label">
                      <label class="checkbox-label" for="requirement-4"></label>
                    </div>
              </td>
                <td>03</td>
                <td>VF003</td>
                <td>Disregarding Traffic Signs</td>
                <td>Description</td>
                <td>1000.00</td>
                <td>1000.00</td>
                <td>1000.00</td>
            </tbody>

            <tbody class="list" id="operatorList">
              <td class="bordertable">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-5" class="requirement-label">
                      <label class="checkbox-label" for="requirement-5"></label>
                    </div>
              </td>
                <td>04</td>
                <td>VF004</td>
                <td>Obstruction</td>
                <td>Description</td>
                <td>1000.00</td>
                <td>1000.00</td>
                <td>1000.00</td>
            </tbody>

            <tbody class="list" id="operatorList">
              <td class="bordertable">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-6" class="requirement-label">
                      <label class="checkbox-label" for="requirement-6"></label>
                    </div>
              </td>
                <td>05</td>
                <td>VF005</td>
                <td>Tricycle without Interior Light</td>
                <td>Description</td>
                <td>1000.00</td>
                <td>1000.00</td>
                <td>1000.00</td>
            </tbody>
          </table>
             


        <div class="pagination">
          <!--Pagination Part-->
          <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
          <a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($searchTerm); ?>" <?php if ($i === $currentPage) echo 'class="active"'; ?>><?php echo $i; ?></a>
        <?php } ?>

        </div>
      </div>
      <?php?>
    </div>
  </main>
  <script src="./js/violation-type.js"></script>
  <script>
      const headerCheckbox = document.getElementById('header-checkbox');
      const checkboxes = document.querySelectorAll('tbody.list input[type="checkbox"]');

      headerCheckbox.addEventListener('click', function () {
      checkboxes.forEach(function (checkbox) {
      checkbox.checked = headerCheckbox.checked;
      
        });
      });
  </script>
</body>
</html>