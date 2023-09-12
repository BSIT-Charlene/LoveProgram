<?php
  require './php/sign-in.php';
  require './php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application Form | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/application.css">
</head>
<body>
  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'application';
    require 'navbar.php';
  ?>

  <!--Page Content-->
  <main class="content-wrapper">
    <div class="container-fluid">
      <header><span>Application Form</span></header>

      <!--Ito iddelete-->
      <form id="application-form" action="./php/process-form.php" method="post" onsubmit="validateForm();">
        <div class="form-section">
          <div class="form-header">
            <div class="col-3">
              <div class="logo-container">
                <img src="./img/sanpedro-logo.png" alt="">
              </div>
            </div>
            <div class="col-6">
              <div class="header-text">
                <span>Republic of the Philippines</span>
                <span><b>CITY OF SAN PEDRO</b></span>
                <span>Laguna, Philippines</span>
                <span>Tel. No. 808-2020 lov 211</span>
                <span><b>TRANSPORTATION REGULATORY UNIT</b></span>
              </div>
            </div>
            <div class="col-3">
              <div class="img-container">
              </div>
            </div>
          </div>
          <div class="border-line"></div>
          <div class="form-body">
            <span class="application-text">APPLICATION FOR FRANCHISE</span>
            <div class="col-3 input-div">
              <span>TODA</span>
              <select name="toda" id="" class="" required>
                <option value="" selected disabled>Select TODA</option>
                <?php
                  $toda_options = "";
                  $options = "SELECT * FROM toda";
                  $result = mysqli_query($conn, $options);

                  while ($row = mysqli_fetch_assoc($result)) {
                    $toda = $row['toda_id'];
                    $toda_name = $row['toda_name'];
                    $toda_options .= "<option value='$toda'>$toda_name</option>";
                  }

                  echo $toda_options;
                ?>
              </select>
            </div>
            <span class="franchise-text">FRANCHISE OPERATOR</span>
            <div class="operator-info">
              <span class="franchise-text2">FRANCHISE OPERATOR'S PERSONAL INFORMATION</span>
              <div class="row input-row">
                <div class="col">
                  <div class="input-div">
                    <span>First Name</span>
                    <input type="text" placeholder="Enter First Name" name="operator-given" required>
                  </div>
                </div>
                <div class="col">
                  <div class="input-div">
                    <span>Middle Name</span>
                    <input type="text" placeholder="Enter Middle Name" name="operator-middle" required>
                  </div>
                </div>
                <div class="col">
                  <div class="input-div">
                    <span>Last Name</span>
                    <input type="text" placeholder="Enter Last Name" name="operator-surname" required>
                  </div>
                </div>
                <div class="col">
                  <div class="input-div">
                    <span>Suffix</span>
                    <select name="operator-suffix">
                      <option value="" selected disabled>Select Suffix</option>
                      <option value="Jr.">Jr.</option>
                      <option value="Sr.">Sr.</option>
                      <option value="I">I</option>
                      <option value="II">II</option>
                      <option value="III">III</option>
                      <option value="IV">IV</option>
                      <option value="V">V</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row input-row">
                <div class="col">
                  <div class="input-div">
                    <span>Address</span>
                    <input type="text" placeholder="Enter Address" name="operator-address" required>
                  </div>
                </div>
                <div class="col">
                  <div class="input-div">
                    <span>Barangay</span>
                    <select name="operator-barangay" id="" required>
                      <option value="" selected disabled>Select Barangay</option>
                      <?php
                        $barangay_options = "";
                        $options = "SELECT * FROM barangay";
                        $result = mysqli_query($conn, $options);

                        while ($row = mysqli_fetch_assoc($result)) {
                          $barangay = $row['barangay_id'];
                          $barangay_name = $row['barangay_name'];
                          $barangay_options .= "<option value='$barangay'>$barangay_name</option>";
                        }

                        echo $barangay_options;
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="input-div">
                    <span>Contact Number</span>
                    <input type="text" id="contact-input" name="operator-contact-num" placeholder="09*********" maxlength="11" required>
                  </div>
                </div>
              </div>
              <div class="row input-row">
                <div class="col">
                  <div class="check-text">
                    <span>Kindly check if the Applicant is also a Tricycle Driver</span>
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="driver-checkbox" name="checkbox-driver">
                      <label class="checkbox-label driver-label" for="driver-checkbox"></label>
                      <span>Tricycle Driver</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="motor-description">
              <span class="franchise-text2">MOTOR DESCRIPTION</span>
              <table id="vehicle-table" class="vehicle-info">
                <tr>
                  <th></th>
                  <th>Body No.</th>
                  <th>Plate No.</th>
                  <th>Manufacturer</th>
                  <th>Engine No.</th>
                  <th>Chassis No.</th>
                </tr>
                <tr class="data-row">
                  <td><div class="unit-count">1st Unit</div></td>
                  <td><input type="text" name="body_no[0]" required></td>
                  <td><input type="text" name="plate_no[0]" required></td>
                  <td><input type="text" name="manufacturer[0]" required></td>
                  <td><input type="text" name="engine_no[0]" required></td>
                  <td><input type="text" name="chassis_no[0]" required></td>
                </tr>
                <tr class="add-btn-row">
                  <td colspan="6">
                    <div class="add-btn-container">
                      <button class="add-btn">+</button>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <div class="row assessment">
              <div class="col requirement-checklist">
                <div class="requirement-text-grp">
                  <span>REQUIREMENT CHECKLIST</span>
                  <span class="requirement-text">(Kindly check if the requirements have been met)</span>
                </div>
                <div class="checklist-container">
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-1" class="requirement-label">
                      <label class="checkbox-label" for="requirement-1"></label>
                    </div>
                    <span>1. Mayor's Permit</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-2" class="requirement-label">
                      <label class="checkbox-label" for="requirement-2"></label>
                    </div>
                    <span>2. LTO C.R. (Photocopy)</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-3" class="requirement-label">
                      <label class="checkbox-label" for="requirement-3"></label>
                    </div>
                    <span>3. LTO O.R. (Photocopy)</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-4" class="requirement-label">
                      <label class="checkbox-label" for="requirement-4"></label>
                    </div>
                    <span>4. Insurance</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-5" class="requirement-label">
                      <label class="checkbox-label" for="requirement-5"></label>
                    </div>
                    <span>5. Barangay Clearance</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-6" class="requirement-label">
                      <label class="checkbox-label" for="requirement-6"></label>
                    </div>
                    <span>6. Special Authority</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-7" class="requirement-label">
                      <label class="checkbox-label" for="requirement-7"></label>
                    </div>
                    <span>7. Driver's License (Photocopy)</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-8" class="requirement-label">
                      <label class="checkbox-label" for="requirement-8"></label>
                    </div>
                    <span>8. 2x2 Pictures</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-9" class="requirement-label">
                      <label class="checkbox-label" for="requirement-9"></label>
                    </div>
                    <span>9. Fare Matrix</span>
                  </div>
                  <div class="checklist">
                    <div class="checkbox-group">
                      <input type="checkbox" name="" id="requirement-10" class="requirement-label">
                      <label class="checkbox-label" for="requirement-10"></label>
                    </div>
                    <span>10. TODA Membership/Certificate</span>
                  </div>
                </div>
              </div>
              <div class="col closing">
                <div class="row">
                  <div class="col date-assessed">
                    <div class="input-div">
                      <span>Date Assessed</span>
                      <input type="datetime-local" id="date-assessed-input" required disabled>
                    </div>
                  </div>
                  <div class="col payment-num">
                    <div class="input-div">
                      <span>O.R. No. of Payment</span>
                      <input type="text" required>
                    </div>
                </div>
                </div>
                <div class="row staff-row">
                  <div class="input-div staff-name">
                    <span>TRU Staff in Charge</span>
                    <input type="text" placeholder="Admin" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="border-line"></div>
          <div class="form-footer">
            <button id="submit-button" class="submit-btn" name="submit">Save Application</button>
          </div>
        </div>
      </form>
      <!--Hanggang dito-->

    </div>
  </main>

  <script src="./js/application.js"></script>
  <script>
    const toggleBtn = document.querySelector('.collapse-btn');
    const sidenav = document.querySelector('.sidenav');
    const contentWrapper = document.querySelector('.content-wrapper')

    toggleBtn.addEventListener('click', () => {
      sidenav.classList.toggle('collapsed');
    });
  </script>

</body>
</html>