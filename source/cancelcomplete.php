<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>토르컴</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <?php

    $mysql_hostname = '220.92.9.189';
    $mysql_username = 'root';
    $mysql_password = '5607';
    $mysql_database = 'mall';
    $mysql_port = 3306;


    $connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

    if (!$connect->connect_error) {
        echo "SUckSEx\n";
    }
    else{
        echo "fail";
    }
    $givenID = $_GET["odid"];

    $stmt = $connect->prepare("DELETE from ordertable where id = ?");
    $stmt->bind_param("i", $givenID);
    $stmt->execute();

    $stmt->close();
    $connect->close();
    ?>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keyboard.php">Keyboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mouse.php">Mouse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="headphone.php">Headphone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mouse pad.php">Mousepad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="searchorder.php">Search Order</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page Content -->
<div class="container">
    <tbody>
    <tr>
        <td align="center">
            <table width="890" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <br>
                <tr>
                    <td height="25" align="center">주문이 취소되었습니다.</td>
                </tr>
                </tbody></table>
        </td>
    </tr>

    <tr>
        <td height="40">&nbsp;</td>
    </tr>
    </tbody>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Thor COM 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
