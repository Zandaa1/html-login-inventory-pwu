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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <title>12 Franklin ICT</title>
    <style>
        .aboutus-background {
            z-index: -1;
            width:80em;
            padding-right:-15%;
            padding-left:-30%;
            margin-right:auto;
            margin-left:auto;
            margin-top: %;
            position:relative;
            max-width: 100%;    
        }

        body {
            background-image: radial-gradient(farthest-corner at 50% 50%, #1e6438, #37198b)
        }

        .bg-div {
            background-color: yellow;
        }
    </style>
</head>

<body>
<div class="container">

            <br>
            <center>
            <p style="color:orange;margin-bottom:-5%;">
                <?php date_default_timezone_set("Asia/Singapore");
                echo " " . date("h:i:sa"); ?>
            </p>
            <center>
            <br>
    </div>
    <nav class="navbar navbar-expand navbar-light bg-faded">
        <div class="container">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-warning" href="home.php" aria-current="page">Home<span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-warning active" href="#">About Us</a>
                </li>
            </ul>
            <p style="margin-top:2.2%;margin-right:2%;color:#87ff9b;">Hello,
                <?php echo $_SESSION['name']; ?>
            </p><br>
            <form action="logout.php">
                <button class="btn btn-outline-success my-2 my-sm-0 text-warning">Log out</button><br>
            </form>
        </div>
    </nav>
<div class="container">
    <img src="img/Desktop Wallpaper (3).png" class="img-fluid mx-auto d-block aboutus-background">
</div>
    <div>
        <div class="mt-4 p-5 bg-gradient text-white">
            <div class="row">
                <div class="col-3">
                    <img src="img/background.jpg" class="figure-img img-fluid rounded-4" alt="">
                    <figcaption class="figcaption">test</figcaption>
                </div>
                <div class="col-9">
                    <h1>Text</h1>
                    <small>Small Text</small>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, laboriosam, voluptas cupiditate
                        assumenda enim, corporis eius laborum reiciendis ex in doloribus aperiam eaque fugit minus ea!
                        Sunt vitae asperiores sed?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, adipisci, eius consequatur soluta
                        nostrum qui error aperiam eos ab atque exercitationem amet nulla id expedita, incidunt vel! Et,
                        quis nostrum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime obcaecati ipsa sint
                        dolorum dolore autem, corrupti esse laudantium aut culpa, voluptas cum? Nisi tempora sint
                        facilis eligendi debitis asperiores.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <img src="img/background.jpg" class="figure-img img-fluid rounded-4" alt="">
                    <img src="img/Kevin (1).png" style="width:75%;box-shadow: 5px 7px;margin-left:2%;">
                </div>
                <div class="col-9">
                    <h1>Kevin R. De Jesus</h1>
                    <small>Small Text</small>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, laboriosam, voluptas cupiditate
                        assumenda enim, corporis eius laborum reiciendis ex in doloribus aperiam eaque fugit minus ea!
                        Sunt vitae asperiores sed?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, adipisci, eius consequatur soluta
                        nostrum qui error aperiam eos ab atque exercitationem amet nulla id expedita, incidunt vel! Et,
                        quis nostrum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, maxime obcaecati ipsa sint
                        dolorum dolore autem, corrupti esse laudantium aut culpa, voluptas cum? Nisi tempora sint
                        facilis eligendi debitis asperiores.</p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>