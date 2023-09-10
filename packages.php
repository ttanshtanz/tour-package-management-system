<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Site Title-->
    <title>Packages</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <style>
    /* Add borders to input fields
    .input-with-border, .form-input .input-with-border {
      border: 0px solid #838386;
	    border-radius: 35px;
    } */
  </style>
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2 novi-background bg-cover">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="2px" data-lg-stick-up-offset="2px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-inner"> 
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/blk.png" alt="" width="208" height="46"/><img class="logo-inverse" src="images/white.png" alt="" width="208" height="46"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li class="active"><a href="packages.php">Packages</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom" style="background: url(&quot;images/book1.jpg&quot;); background-size: cover;">
          <div class="container">
            <p class="breadcrumbs-custom-subtitle">Grab your tickets now!</p>
            <p class="heading-1 breadcrumbs-custom-title">Packages</p>
            <br><br>
            <br><br>
          </div>
        </section>

      </header>
    <!-- search content-->
    <div class="container container-bigger form-request-wrap form-request-wrap-modern">
      <div class="row row-fix justify-content-sm-center justify-content-lg-mid">
        <div class="col-lg-6 col-xxl-5">
          <div class="form-request form-request-modern">
                <p class="d-inline-flex gap-1">
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#add" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Add
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#view" role="button" aria-expanded="false" aria-controls="collapseExample">
                    View
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#update" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Update
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#delete" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Delete
                  </a>
                  <a class="btn btn-primary" data-bs-toggle="collapse" href="#search" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Search
                  </a>
                </p>
              
                <div class="collapse" id="view" style="margin-top: 20px; margin-bottom: 20px;">
                  <div class="card card-body bg-gray-lighter">
                      <h4>View Packages</h4>

                      <?php                  
                        $con = mysqli_connect("localhost", "root", "", "travel");

                        if (!$con)
                          die("Connection failed" . mysqli_connect_error());

                        $sql = "SELECT * FROM travel";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                          echo "<table class='table table-striped'>
                                  <thead>
                                    <tr>
                                      <th>Package Name</th>
                                      <th>From</th>
                                      <th>To</th>
                                      <th>Depart Date</th>
                                      <th>Duration</th>
                                      <th>Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>";
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['p_name']}</td>
                                    <td>{$row['f_city']}</td>
                                    <td>{$row['t_city']}</td>
                                    <td>{$row['depart_date']}</td>
                                    <td>{$row['duration']}</td>
                                    <td>{$row['price']}</td>
                                  </tr>";
                          }
                          echo "</tbody></table>";
                        } else {
                          echo "<p>No packages available.</p>";
                        }

                        mysqli_close($con);
                      ?>
                                              
                  </div>
                </div>
              
                <div class="collapse" id="add" style="margin-top: 20px; margin-bottom: 20px;">
                  <div class="card card-body bg-gray-lighter">
                          <h4>Add Tour Package</h4>
                          <!-- RD Mailform-->
                          <form class="rd-mailform form-fix form-request-modern" method='POST' action=''>
                            <div class="row row-20 row-fix">
                              <div class="col-sm-12">
                                <label class="form-label-outside">Package Name</label>
                                <div class="form-wrap form-wrap-inline">
                                  <input type='text' class="form-input input-with-border" placeholder="Enter package name" id="p_name" name="p_name" required>
                                  <!-- <label class="form-label" for="p_name">Enter package name</label> -->
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="form-label-outside">From</label>
                                <div class="form-wrap form-wrap-inline">
                                  <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="f_city" required>
                                    <option value="1">Kochi</option>
                                    <option value="2">Thiruvanthapuram</option>
                                    <option value="3">Kozhikode</option>
                                    <option value="4">Kannur</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="form-label-outside">To</label>
                                <div class="form-wrap form-wrap-inline">
                                  <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="t_city" required>
                                    <option value="1">USA</option>
                                    <option value="2">Madrid</option>
                                    <option value="3">Paris</option>
                                    <option value="4">Australia</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-6">
                                <label class="form-label-outside">Depart Date</label>
                                <div class="form-wrap form-wrap-validation">
                                  <!-- Select -->
                                  <input class="form-input input-with-border" id="dateForm" name="depart_date" type="text" data-time-picker="date" required>
                                  <label class="form-label" for="dateForm">Choose the date</label>
                                </div>
                              </div>
                              <div class="col-sm-12 col-lg-6">
                                <label class="form-label-outside">Duration</label>
                                <div class="form-wrap form-wrap-validation">
                                  <!-- Select 2-->
                                  <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="duration" required>
                                    <option value="1">Any length</option>
                                    <option value="2">2 days</option>
                                    <option value="3">3 days</option>
                                    <option value="4">4 days</option>
                                    <option value="5">5 days</option>
                                    <option value="6">6 days</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <label class="form-label-outside">Price</label>
                                <div class="form-wrap form-wrap-inline">
                                  <input type='text' class="form-input input-with-border" placeholder="Enter package price" id="price" name="price" required>
                                  <!-- <label class="form-label" for="p_name">Enter package name</label> -->
                                </div>
                              </div>
                            </div>
                            <div class="form-wrap form-button">
                              <button class="button button-block button-secondary" type="submit" name='insert'>Add Package</button>
                            </div>
                          </form>
                  </div>
                </div>
                
              <div class="collapse" id="delete" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="card card-body bg-gray-lighter">
                  <h4>Delete Package</h4>
                  <form class="rd-mailform form-fix form-request-modern" method="POST" action="">
                    <div class="row row-20 row-fix">
                      <div class="col-sm-12">
                        <label class="form-label-outside">Package Name</label>
                        <div class="form-wrap form-wrap-inline">
                          <!-- <input type="text" class="form-input input-with-border" placeholder="Enter package name" id="delete_p_name" name="delete_p_name" required> -->
                          <select class="form-input select-filter" id="delete_p_name" name="delete_p_name">
                        <option value="">Enter package name</option>
                            <?php
                              $con = mysqli_connect("localhost", "root", "", "travel");
                              if (!$con)
                                die("Connection failed" . mysqli_connect_error());

                              $query = "SELECT DISTINCT p_name FROM travel";
                              $result = mysqli_query($con, $query);

                              while ($row = mysqli_fetch_assoc($result)) {
                                $pName = $row['p_name'];
                                echo "<option value='$pName'>$pName</option>";
                              }

                              mysqli_close($con);
                            ?>
                      </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-wrap form-button">
                      <button class="button button-block button-secondary" type="submit" name="delete">Delete Package</button>
                    </div>
                  </form>

                  <?php
                          
                  ?>
                </div>
            </div>

            <div class="collapse" id="update" style="margin-top: 20px; margin-bottom: 20px;">
              <div class="card card-body bg-gray-lighter">
                <h4>Update Package</h4>
                <form class="rd-mailform form-fix form-request-modern" method="POST" action="packages.php">
                  <div class="row row-20 row-fix">
                    <div class="col-sm-12">
                      <label class="form-label-outside">Package Name</label>
                      <div class="form-wrap form-wrap-inline">
                        <!-- <input type="text" class="form-input input-with-border" placeholder="Enter package name" id="update_p_name" name="update_p_name" required> -->
                        <select class="form-input select-filter" id="update_p_name" name="update_p_name">
                        <option value="">Enter package name</option>
                            <?php
                              $con = mysqli_connect("localhost", "root", "", "travel");
                              if (!$con)
                                die("Connection failed" . mysqli_connect_error());

                              $query = "SELECT DISTINCT p_name FROM travel";
                              $result = mysqli_query($con, $query);

                              while ($row = mysqli_fetch_assoc($result)) {
                                $pName = $row['p_name'];
                                echo "<option value='$pName'>$pName</option>";
                              }

                              mysqli_close($con);
                            ?>
                      </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label class="form-label-outside">New Price</label>
                      <div class="form-wrap form-wrap-inline">
                        <input type="text" class="form-input input-with-border" placeholder="Enter new price" id="new_price" name="new_price" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-wrap form-button">
                    <button class="button button-block button-secondary" type="submit" name="update">Update Package</button>
                  </div>
                </form>

                <?php
                   
                ?>
              </div>
            </div>

            
            <div class="collapse" id="search" style="margin-top: 20px; margin-bottom: 20px;">
              <div class="card card-body bg-gray-lighter">
                <h4>Search Package</h4>
                <form class="rd-mailform form-fix form-request-modern" method="POST" action="">
                  <div class="row row-20 row-fix">
                    <div class="col-sm-12">
                      <label class="form-label-outside">Package Name</label>
                      <div class="form-wrap form-wrap-inline">
                      <select class="form-input select-filter" id="search_p_name" name="search_p_name">
                      <option value="">Select Package Name</option>
                          <?php
                            $con = mysqli_connect("localhost", "root", "", "travel");
                            if (!$con)
                              die("Connection failed" . mysqli_connect_error());

                            $query = "SELECT DISTINCT p_name FROM travel";
                            $result = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                              $pName = $row['p_name'];
                              echo "<option value='$pName'>$pName</option>";
                            }

                            mysqli_close($con);
                          ?>
                    </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-wrap form-button">
                    <button class="button button-block button-secondary" type="submit" name="search">Search Package</button>
                  </div>                  
                </form>

                <?php
                if (isset($_POST['search'])) {
                  $search_p_name = $_POST['search_p_name'];
                  $con = mysqli_connect("localhost", "root", "", "travel");

                  if (!$con)
                    die("Connection failed" . mysqli_connect_error());

                  $sql = "SELECT * FROM travel WHERE p_name='$search_p_name'";
                  $result = mysqli_query($con, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    echo "<h5>Search Results</h5>";
                    echo "<table class='table table-striped'>
                            <thead>
                              <tr>
                                <th>Package Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Depart Date</th>
                                <th>Duration</th>
                                <th>Price</th>
                              </tr>
                            </thead>
                            <tbody>";
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>
                              <td>{$row['p_name']}</td>
                              <td>{$row['f_city']}</td>
                              <td>{$row['t_city']}</td>
                              <td>{$row['depart_date']}</td>
                              <td>{$row['duration']}</td>
                              <td>{$row['price']}</td>
                            </tr>";
                    }
                    echo "</tbody></table>";
                  } else {
                    echo "<script>
                            document.getElementById('messageText').textContent = 'No packages found.';
                            $('#messageModal').modal('show');
                          </script>";
                  }

                  mysqli_close($con);
                }      
                ?>
              </div>
            </div>



          </div>   
        </div>
      </div>
    </div>

    <!-- Page Footer-->
      <!-- Footer Minimal-->
      <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
        <div class="container container-wide">
          <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><a href="index.html"><img class="inverse-logo" src="images/white.png" alt="" width="208" height="46"/></a></div>
            <div class="col-md-10 col-lg-7 col-xl-4">
              <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved. Design&nbsp;by&nbsp;Tania, Vyshnav & Yadhu</p>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
              <ul class="group-xs group-middle"> 
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Modal for displaying messages -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="messageModalLabel">Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="messageText"></p>
          </div>
        </div>
      </div>
    </div>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 <script>
  function reloadPage() {
    location.reload();
  }

  function reloadPageAndUpdate() {
    location.reload();
    $('#update').removeClass('show');
  }
</script>

</body>
</html>

<?php
if(isset($_POST['insert']))
{
  $name = $_POST['p_name'];
  $fcity = $_POST['f_city'];
  $tcity = $_POST['t_city'];
  $ddate = $_POST['depart_date'];
  $dur = $_POST['duration'];
  $amt = $_POST['price'];  
  $con = mysqli_connect("localhost","root","","travel");
  
  if(!$con)
    die("Connection failed" . mysqli_connect_error());
    
  $sql = "insert into travel values('$name','$fcity','$tcity','$ddate','$dur',$amt)";
  
  try
  {
    if(mysqli_query($con, $sql))
    {
      echo "<script>
              document.getElementById('messageText').textContent = 'Inserted Successfully';
              $('#messageModal').modal('show');
            </script>";
    }
    else
    {
      echo "<script>
              document.getElementById('messageText').textContent = 'Error in inserting';
              $('#messageModal').modal('show');
            </script>";
    }
    if (isset($_GET['inserted']) && $_GET['inserted'] === 'true') {
      
      echo "<script>
              document.getElementById('messageText').textContent = 'Inserted Successfully';
              $('#messageModal').modal('show');
            </script>";
      
    }
  }
  catch(Exception $e)
  {
    echo "<script>
            document.getElementById('messageText').textContent = 'Enter the values in textbox to insert';
            $('#messageModal').modal('show');
          </script>";
  }
  
  mysqli_close($con);
}

if (isset($_POST['delete'])) {
  $delete_p_name = $_POST['delete_p_name'];
  $con = mysqli_connect("localhost", "root", "", "travel");

  if (!$con)
    die("Connection failed" . mysqli_connect_error());

  $sql = "DELETE FROM travel WHERE p_name='$delete_p_name'";
  try {
    if (mysqli_query($con, $sql)) {
      echo "<script>
      window.location.href = 'packages.php?deleted=true';
      </script>";
    } else {
      echo "<script>
              document.getElementById('messageText').textContent = 'Error deleting package.';
              $('#messageModal').modal('show');
            </script>";
    }

    if (isset($_GET['delete']) && $_GET['deleted'] === 'true') {
      
      echo "<script>
              document.getElementById('messageText').textContent = 'Package deleted Successfully';
              $('#messageModal').modal('show');
            </script>";
      
    }

  } catch (Exception $e) {
    echo "<script>
            document.getElementById('messageText').textContent = 'An error occurred while deleting the package.';
            $('#messageModal').modal('show');
          </script>";
  }

  mysqli_close($con);
} 

if (isset($_POST['update'])) {
  $update_p_name = $_POST['update_p_name'];
  $new_price = $_POST['new_price'];
  $con = mysqli_connect("localhost", "root", "", "travel");

  if (!$con)
    die("Connection failed" . mysqli_connect_error());

  $sql = "UPDATE travel SET price='$new_price' WHERE p_name='$update_p_name'";
  if (mysqli_query($con, $sql)) {
    echo "<script>
          window.location.href = 'packages.php#view';
          </script>";
  } else {
    echo "<script>
            document.getElementById('messageText').textContent = 'Error updating package.';
            $('#messageModal').modal('show');
          </script>";
  }
  if (isset($_GET['updated']) || $_GET['updated'] == 'true') {
    echo "<script>
      document.getElementById('messageText').textContent = 'Package updated successfully';
      $('#messageModal').modal('show');
    </script>";
  }
  mysqli_close($con);
}   
?>

