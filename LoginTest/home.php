<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}
else{
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
    $connect = mysqli_connect('sql106.unaux.com', 'unaux_33421222', 'pcgqpzscpesljv','unaux_33421222_database');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>12 Franklin ICT</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-faded">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Active <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <p>Hello, <?php echo $_SESSION['name']; ?></p><br>
            <form action="logout.php">
            <button class="btn btn-outline-success my-2 my-sm-0">Log out</button><br>
            </form>
        </div>
    </nav>
    <center>
    <div class="container">
            <br>
            <img src="img/pwu-logo.png" height="100px" alt="">
            <img src="img/jasms.png" height="90px" alt="">
            <h1>PWU INVENTORY SEARCH</h1>
            <p><?php date_default_timezone_set("Asia/Singapore");
                echo "Last update time: " . date("h:i:sa"); ?></p>
            <form action="home.php" class="was-validated" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="valueToSearch" placeholder="Value here" required><br><br>
                    <input type="submit" name="search" value="Filter"><br><br>
                </div>
                <br>
    </center>
    </div>
    <table class="table table-striped table-dark">
        <thead>
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
    </form>

</body>

</html>