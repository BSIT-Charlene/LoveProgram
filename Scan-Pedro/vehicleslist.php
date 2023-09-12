<!DOCTYPE html>
<html lang="en">
<head>
  <title> Violation Issuance | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/vehicleslist.css">
</head>

<body>

  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'vehicleslist';
    require 'enforcersidenav.php';
  ?>

  <main class="content-wrapper">
      <div class="container-fluid">
        <header><span>Violation Issuance</span></header>

        <span class="title">Franchise Operator’s Vehicles</span>
          <div class="vehicle-card">
            <div class="unit-card">
              <span class="unit-text">UNIT 1</span>
                <div class="vehicle-details-card">
                   <div class="vehicle-details-text">
                    <p>Plate Number: 349027041239</p>
                    <p>Manufacturer: Kawasaki</p>
                    <p>Body Number: 349027041239</p>
                    <p>Engine Number: 349027041239</p>
                    <p>Chassis Number: 349027041239</p>
                    </div>
                     <div class="seedrivers-btn">
                        <button id="submit-button" class="submit-btn" name="submit">See Drivers</button>
                      </div>
                </div>
            </div>

            <div class="unit-card">
              <span class="unit-text">UNIT 2</span>
                <div class="vehicle-details-card">
                   <div class="vehicle-details-text">
                    <p>Plate Number: 349027041239</p>
                    <p>Manufacturer: Kawasaki</p>
                    <p>Body Number: 349027041239</p>
                    <p>Engine Number: 349027041239</p>
                    <p>Chassis Number: 349027041239</p>
                    </div>
                     <div class="seedrivers-btn">
                        <button id="submit-button" class="submit-btn" name="submit">See Drivers</button>
                      </div>
                </div>
            </div>

            <div class="unit-card">
              <span class="unit-text">UNIT 3</span>
                <div class="vehicle-details-card">
                   <div class="vehicle-details-text">
                    <p>Plate Number: 349027041239</p>
                    <p>Manufacturer: Kawasaki</p>
                    <p>Body Number: 349027041239</p>
                    <p>Engine Number: 349027041239</p>
                    <p>Chassis Number: 349027041239</p>
                    </div>
                     <div class="seedrivers-btn">
                        <button id="submit-button" class="submit-btn" name="submit">See Drivers</button>
                      </div>
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