<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard | Scan Pedro</title>
  <link rel="stylesheet" href="./css/boxicons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/poppins.css">
  <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
  <?php
  //Makikipalitan yung $activeModule ng module na ginagawa
    $activeModule = 'dashboard';
    require 'navbar.php';
  ?>

  <!--Page Content-->
  <main class="content-wrapper">
    <div class="container-fluid">
      <header><span>Dashboard</span></header>

      <!--Ito iddelete-->
      <div class="stats">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="image">
                <i class='bx bx-cycling'></i>
              </div>
              <div class="col info">
                <span>Registered TODAs</span>
                <h2>88</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="card violation-card">
              <div class="row">
                <div class="col">
                  <div class="view-date">
                    <p>As of August 12, 2023</p>
                    <p>Tricycle Drivers Traffic Violations</p>
                  </div>  
                </div>
                <div class="col">
                  <div class="view-container">
                    <a href="" class="view-violations">View All</a>
                  </div>  
                </div>
              </div>
              <table>
                <tr>
                  <th>Name</th>
                  <th>Traffic Violation</th>
                  <th>Date & Time</th>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
                <tr>
                  <td>Juan Dela Cruz</td>
                  <td>No Helmet</td>
                  <td>August 14, 2023 7:19:00 PM</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-4">
            <div class="row">
              <div class="card">
                
              </div>
            </div>
            <div class="row">
              <div class="card">
                
              </div>
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