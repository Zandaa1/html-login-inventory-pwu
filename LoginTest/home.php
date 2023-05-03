<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
} else {
    header("Location: index.php");
    exit();
}

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `TABLE 5` WHERE CONCAT(`Id`, `fldInventoryCTRL#Yellow`, `fldICTCTRL#SMALLWHITESTICKER`, `fldOLDCTRL#`, `fldProperty#FROMUASBIGWHITESTICKER`, `fldFINALCTRL#`, `fldPropertyDescription`, `fldBrand`, `fldModel`, `fldOTHERDESC`, `fldProcessor`, `fldHardDisk`, `fldMemory`, `fldLancard`, `fldSize`, `fldColor`, `fldSerial`, `fldType`, `fldLocation`, `fldCampus`, `fldWing`, `fldFloor`, `fldRoom`, `fldDepartment`, `fldEMP#`, `fldEMPName`, `fldRemarks`) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `TABLE 5`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect('sql106.unaux.com', 'unaux_33421222', 'pcgqpzscpesljv', 'unaux_33421222_database');
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

//function filterTable($query)
//{
//    $connect = mysqli_connect("sql106.unaux.com", "unaux_33421222", "pcgqpzscpesljv", "unaux_33421222_database");
//    $filter_Result = mysqli_query($connect, $query);
//    return $filter_Result;
//}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <title>12 Franklin ICT</title>
    <style>
        img {
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: -1;
        }

        table {
            display: block;
            overflow-x:scroll;
        }


    </style>
</head>

<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Scan QR Code</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div id="qrcodesuccess">
    
              </div>
              <div id="qr-reader" style="width:auto"></div>
    
              <div id="qr-reader-results"></div>
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Scan QR Code</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div id="qrcodesuccess">
    
              </div>
              <div id="qr-reader" style="width:auto"></div>
    
              <div id="qr-reader-results"></div>
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    

    <nav class="navbar navbar-expand navbar-light bg-faded">
        <div class="container">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="home.php" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about us.php" aria-current="page">About Us<span class="visually-hidden">(current)</span></a>
                <li class="nav-item">
                    <p class="nav-link" style="color:black;">
                        Last update: <?php date_default_timezone_set("Asia/Singapore");
                                        echo " " . date("h:i:sa"); ?>
                    </p>

                </li>
                </li>
            </ul>
            <p style="margin-top:2.2%;margin-right:2%;">Hello, <?php echo $_SESSION['name']; ?></p><br>
            <form action="logout.php">
                <button class="btn btn-outline-success my-2 my-sm-0">Log out</button><br>
            </form>
        </div>
    </nav>
    <center>
        <div class="container">
            <div class="container">
                <picture>
                    <source srcset="" type="image/svg+xml">
                    <img src="img/_Brown Minimalist Dekstop Wallpaper (1).png" class="mh-auto w-auto pt-20 float-lg-end img-fluid mx-auto" alt="image desc">
                </picture>
            </div>
            <form action="home.php" method="post">
                <div style="margin-top:37%;width:65%;" class="input-group">
                    <input type="text" id="qroutput" class="form-control" name="valueToSearch" placeholder="Search here"><br><br>
                    <input type="submit" id="searchbox" class="btn btn-primary" name="search" value="Filter">
                    <a class="btn btn-dark bi bi-qr-code-scan" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        aria-expanded="false" aria-controls="collapseExample"></a>
                    <form action="home.php">
                        <input type="submit" class="btn btn-dark" name="search" value="Reset">
                    </form>
                </div>
                <br>
    </center>
    
    </div>
    <table style="margin-top:2%;" class="table table-striped table-dark">
        <thead style="position:sticky;top:0;" class="thead-dark">
            <tr>
                <th>No.</th>
                <th>INVENTORY CTRL # YELLOW</th>
                <th>ICT CTRL# SMALL WHITE STICKER</th>
                <th>OLD CTRL#</th>
                <th>PROPERTY # FROM UAS BIG WHITE STICKER</th>
                <th>FINAL CNTRL#</th>
                <th>PROPERTY DESCRIPTION</th>
                <th>BRAND</th>
                <th>MODEL</th>
                <th>OTHER DESC</th>
                <th>PROCESSOR</th>
                <th>HARD DISK</th>
                <th>MEMORY</th>
                <th>LANCARD</th>
                <th>SIZE</th>
                <th>COLOR</th>
                <th>SERIAL</th>
                <th>TYPE</th>
                <th>LOCATION</th>
                <th>CAMPUS</th>
                <th>WING</th>
                <th>FLOOR</th>
                <th>ROOM</th>
                <th>DEPARTMENT</th>
                <th>EMP#</th>
                <th>EMP NAME</th>
                <th>REMARKS</th>
            </tr>
        </thead>

        <!-- populate table from mysql database -->
        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
            <tbody>

                <tr>

                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['fldInventoryCTRL#Yellow']; ?></td>
                    <td><?php echo $row['fldICTCTRL#SMALLWHITESTICKER']; ?></td>
                    <td><?php echo $row['fldOLDCTRL#']; ?></td>
                    <td><?php echo $row['fldProperty#FROMUASBIGWHITESTICKER']; ?></td>
                    <td><?php echo $row['fldFINALCTRL#']; ?></td>
                    <td><?php echo $row['fldPropertyDescription']; ?></td>
                    <td><?php echo $row['fldBrand']; ?></td>
                    <td><?php echo $row['fldModel']; ?></td>
                    <td><?php echo $row['fldOTHERDESC']; ?></td>
                    <td><?php echo $row['fldProcessor']; ?></td>
                    <td><?php echo $row['fldHardDisk']; ?></td>
                    <td><?php echo $row['fldMemory']; ?></td>
                    <td><?php echo $row['fldLancard']; ?></td>
                    <td><?php echo $row['fldSize']; ?></td>
                    <td><?php echo $row['fldColor']; ?></td>
                    <td><?php echo $row['fldSerial']; ?></td>
                    <td><?php echo $row['fldType']; ?></td>
                    <td><?php echo $row['fldLocation']; ?></td>
                    <td><?php echo $row['fldCampus']; ?></td>
                    <td><?php echo $row['fldWing']; ?></td>
                    <td><?php echo $row['fldFloor']; ?></td>
                    <td><?php echo $row['fldRoom']; ?></td>
                    <td><?php echo $row['fldDepartment']; ?></td>
                    <td><?php echo $row['fldEMP#']; ?></td>
                    <td><?php echo $row['fldEMPName']; ?></td>
                    <td><?php echo $row['fldRemarks']; ?></td>
                </tr>
            </tbody>
        <?php endwhile; ?>
    </table>
    </div>
    </form>
    <script src="html5-qrcode.min.js"></script>
    <script>
      function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
          || document.readyState === "interactive") {
          // call on next available tick
          setTimeout(fn, 1);
        } else {
          document.addEventListener("DOMContentLoaded", fn);
        }
      }
  
      docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
          if (decodedText !== lastResult) {
            ++countResults;
            lastResult = decodedText;
            // Handle on success condition with the decoded message.
            document.getElementById("qrcodesuccess").innerHTML = ("<div class='alert alert-success'> <p id='qrcode-success'>Processing... Please wait.</p></div>");
            document.getElementById("qroutput");
            qroutput.value += lastResult;
            setTimeout(function() {
              document.getElementById("searchbox").click();
            }, 2000);
          
          }
        }
  
        var html5QrcodeScanner = new Html5QrcodeScanner(
          "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
      });
    </script>
</body>
<script src="html5-qrcode.min.js"></script>

</html>