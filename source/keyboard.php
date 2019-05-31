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


    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die("ssx");

    if ($connect) {
        echo "SUckSEx\n";
    }
    else{
        echo "fail";
    }

    $result = mysqli_query($connect, 'SELECT id, itemname, price, thumb from iteminfo');

    for($cnt = 0 ; $data = mysqli_fetch_array($result) ; $cnt+=1) {
        $idid[$cnt] = $data['id'];
        $itname[$cnt] = $data['itemname'];
        $itprice[$cnt] = $data['price'];
        $itthumb[$cnt] = "/source/" . $data['thumb'];
    }
    mysqli_select_db($connect, $mysql_database) or die('DB 선택 실패');

    mysqli_close($connect);




    ?>
    <script>
        function setChildValue(index) {
            window.location.href = "searchorder.php?index=" + index;
        }</script>
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
            <a class="nav-link" href="keyboard.php">Keyboard
              <span class="sr-only">(current)</span>
            </a>
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

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Keyboard</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <form method="get" action="purchasepage.php">
                <img class="card-img-top"  src="<?echo $itthumb[0] ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?echo $itname[0]; ?></h4>
                    <p class="card-text"><? echo $itprice[0]."원"?></p>
                </div>
                <div class="card-footer">
                    <input type="hidden" name="pastname" value="<?echo $idid[0]?>">
                    <input type="submit" class= "btn btn-primary" value="바로 구매">


                </div>
                </form>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <img class="card-img-top" src="<?echo $itthumb[1] ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?echo $itname[1]; ?></h4>
                    <p class="card-text"><? echo $itprice[1]."원"?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">바로 구매</a>

                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <img class="card-img-top" src="<?echo $itthumb[2] ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?echo $itname[2]; ?></h4>
                    <p class="card-text"><? echo $itprice[2]."원"?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">바로 구매</a>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <img class="card-img-top" src="<?echo $itthumb[3] ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?echo $itname[3]; ?></h4>
                    <p class="card-text"><? echo $itprice[3]."원"?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">바로 구매</a>

                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

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
