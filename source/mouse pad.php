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

    $mysql_hostname = '';     //접속ip
    $mysql_username = '';             //접속계정
    $mysql_password = '';             //접속패스워드
    $mysql_database = '';             //접속DB명
    $mysql_port = 3306;                   //접속포트


    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die("DB연결실패");

    if ($connect) {
     
    }
    else{
        echo "fail";        //DB연결 실패시 오류문 출력
    }

    $result = mysqli_query($connect, 'SELECT id, itemname, price, thumb from iteminfo');      //상품번호, 상품명, 가격, 상품이미지 검색

    for($cnt = 0 ; $data = mysqli_fetch_array($result) ; $cnt+=1) {     //검색한 데이터 레코드 1개씩 추출
        $idid[$cnt] = $data['id'];
        $itname[$cnt] = $data['itemname'];
        $itprice[$cnt] = $data['price'];
        $itthumb[$cnt] = "/source/" . $data['thumb'];
    }

    mysqli_close($connect);   //sql문 종료

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
              <span class="sr-only">(current)</span>
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
            <a class="nav-link" href="mouse pad.php">Mousepad
              <span class="sr-only">(current)</span>
            </a>
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
        <h1 class="display-3">Mousepad</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
            <div class="card h-10">
                <form method="get" action="introduceitem.php">
                    <img class="card-img-top"  src="<?echo $itthumb[12] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[12]; ?></h4>
                        <p class="card-text"><? echo $itprice[12]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[12]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-4">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
            <div class="card h-10">
                <form method="get" action="introduceitem.php">
                    <img class="card-img-top"  src="<?echo $itthumb[13] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[13]; ?></h4>
                        <p class="card-text"><? echo $itprice[13]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[13]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
            <div class="card h-10">
                <form method="get" action="introduceitem.php">
                    <img class="card-img-top"  src="<?echo $itthumb[14] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[14]; ?></h4>
                        <p class="card-text"><? echo $itprice[14]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[14]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
            <div class="card h-10">
                <form method="get" action="introduceitem.php">
                    <img class="card-img-top"  src="<?echo $itthumb[15] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[15]; ?></h4>
                        <p class="card-text"><? echo $itprice[15]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[15]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
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
