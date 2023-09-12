<!DOCTYPE html>
<html lang="en">
<head>
  <title> Violation Issuance | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/driverslist.css">
</head>
<body>
  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'driverslist';
    require 'enforcersidenav.php';
  ?>

  <!--Page Content-->
  <main class="content-wrapper">
    <div class="container-fluid">
      <header><span>Violation Issuance</span></header>
      
      <span class="title">Vehicle</span>
      <div class="card vehiclebg">
        <div class="card vehicle-info">
          <span class="unit-no">UNIT 1</span>

          <table>
            <tr>
                  <th>Plate Number:</th>
                  <th>Manufacturer</th>
                  <th>Body Number:</th>
                  <th>Engine Number:</th>
                  <th>Chassis Number:</th>
            </tr>

            <tr>
                  <td>SPL00324</td>
                  <td>Kawasaki</td>
                  <td>982341</td>
                  <td>982342</td>
                  <td>982343</td>
                </tr>
          </table>
   
        </div>
      </div>

      <span class="title">List of Drivers</span>
      <div class="card driverbg">
        <div class="driver-info">
          <p>DELA CRUZ, JUAN WONDER</p>
          <span class="license-text">License Number: 349027041239</span>
          <div class="addviolation-btn">
            <button id="submit-button" class="submit-btn" name="submit">Add Violation</button>
          </div>
        </div>
      </div>

      <div class="card driverbg">
        <div class="driver-info">
          <p>DELA CRUZ, JUAN WONDER</p>
          <span class="license-text">License Number: 349027041239</span>
          <div class="addviolation-btn">
            <button id="submit-button" class="submit-btn" name="submit">Add Violation</button>
          </div>
        </div>
      </div>
      
      <div class="card driverbg">
        <div class="driver-info">
          <p>DELA CRUZ, JUAN WONDER</p>
          <span class="license-text">License Number: 349027041239</span>
          <div class="addviolation-btn">
            <button id="submit-button" class="submit-btn" name="submit">Add Violation</button>
          </div>
        </div>
      </div>
      
    </div>
  </main>

  <script src="./js/sidenav.js"></script>
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