<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--메타데이터 작성-->
  <title>토르컴</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
    <?php

    $mysql_hostname = '220.92.9.189';   //접속ip
    $mysql_username = 'root';   //접속계정
    $mysql_password = '5607';   //접속패스워드
    $mysql_database = 'mall';   //접속db명
    $mysql_port = 3306;   //접속포트


    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die("DB연결 실패");    //DB연결

    if ($connect) {
     
    }
    else{
        echo "fail";  //DB연결 실패시 오류문출력
    }

    $result = mysqli_query($connect, 'SELECT id, itemname, price, thumb from iteminfo'); //상품id, 상품명, 가격, 이미지 추출

    for($cnt = 0 ; $data = mysqli_fetch_array($result) ; $cnt+=1) {   //for문 돌리면서 상품정보 상품id, 상품명, 상품가격, 상품이미지 배열에 대입
        $idid[$cnt] = $data['id'];
        $itname[$cnt] = $data['itemname'];
        $itprice[$cnt] = $data['price'];
        $itthumb[$cnt] = "/source/" . $data['thumb'];
    }
     

    mysqli_close($connect);

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
            <a class="nav-link" href="headphone.php">Headphone
              <span class="sr-only">(current)</span>
            </a>
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
        <h1 class="display-3">Headphone</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <form method="get" action="introduceitem.php">        <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
                    <img class="card-img-top"  src="<?echo $itthumb[4] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[4]; ?></h4>
                        <p class="card-text"><? echo $itprice[4]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[4]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>

        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <form method="get" action="introduceitem.php">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
                    <img class="card-img-top"  src="<?echo $itthumb[5] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[5]; ?></h4>
                        <p class="card-text"><? echo $itprice[5]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[5]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <form method="get" action="introduceitem.php">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
                    <img class="card-img-top"  src="<?echo $itthumb[6] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[6]; ?></h4>
                        <p class="card-text"><? echo $itprice[6]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[6]?>">
                        <input type="submit" class= "btn btn-primary" value="바로 구매">


                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-10">
                <form method="get" action="introduceitem.php">      <!--상품이미지, 상품명, 상품가격과 구매버튼 화면에 출력-->
                    <img class="card-img-top"  src="<?echo $itthumb[7] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?echo $itname[7]; ?></h4>
                        <p class="card-text"><? echo $itprice[7]."원"?></p>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="pastname" value="<?echo $idid[7]?>">
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
