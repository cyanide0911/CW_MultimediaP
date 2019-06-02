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
$givenID = $_GET["ordernumber"];

$stmt = $connect->prepare("SELECT id ,itemid, named, place, price from ordertable where id = ? ");
$stmt->bind_param("i", $givenID);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

$data = $result->fetch_assoc();
$odid = $data['id'];
$oditid = $data['itemid'];
$odname = $data['named'];
$odplace = $data['place'];
$odprice = $data['price'];

$stmt = $connect->prepare("SELECT id ,itemname from iteminfo  where id = ? ");
$stmt->bind_param("i", $oditid);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$data = $result->fetch_assoc();
$itid = $data['id'];
$itname = $data['itemname'];
$connect->close()
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

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3"><img class="fontlogo" src="image/font logo.png"></h1>

      <p class="lead" style="font-family: Fusterd Brush Two; font-size: 80px;" align="center">Upgrade Your Skill</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
        <tr>

              <table width="97%" cellspacing="0" cellpadding="0" border="0">
                      <tbody>
                      <tr>
                        <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                              <td width="6"></td>
                              <td class="yellow" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                  <colgroup>
                                  <col width="120" align="center">
                                  <col width="1" align="center">
                                  <col width="*" align="center">
                                  <col width="1" align="center">
                                  <col width="100" align="center">
                                  <col width="1" align="center">
                                  <col width="50" align="center">
                                  <col width="1" align="center">
                                  <col width="100" align="center">
                                  <col width="1" align="center">
                                  <col width="60" align="center">
                                  <col width="1" align="center">
                                  <col width="60" align="center">
                                  </colgroup>
                                  <tbody><tr>
                                    <td align="center">상품코드</td>
                                    <td align="center"width="1"></td>

                                    <td align="center">상품명</td>
                                    <td align="center"width="1"></td>

                                    <td align="center">가격</td>
                                  </tr>
                                </tbody></table></td>
                              <td width="6"></td>
                            </tr>
                          </tbody></table>
                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <colgroup>
                  <col width="120" align="center">
                  <col width="1" align="center">
                  <col width="*" align="left">
                  <col width="1" align="center">
                  <col width="100" align="center">
                  <col width="1" align="center">
                  <col width="35" align="center">
                  <col width="1" align="center">
                  <col width="90" align="center">
                  <col width="1" align="center">
                  <col width="60" align="center">
                  <col width="1" align="center">
                  <col width="65" align="center">
                  </colgroup>
                  <tbody><tr>
                  <td class="green_bold" height="30" align="center"><?echo $odid?></td>
                  <td align="center">&nbsp;</td>
                  <td align="center"><? echo $itname ?> </td>
                  <td align="center">&nbsp;</td>
                  <td align="center"><?echo $odprice?></td>
                  <td align="center">&nbsp;</td>
                 </tr>
                </tbody></table></td>
              </tr>								
                                            
                          </tbody></table></td>
                      </tr>
                    </tbody></table>
                    <form action="" method="GET">
                    <input type="hidden" name="cancel" value="true">
                    <input type="submit" class="btn btn-primary" value="주문 취소">
                    </form>
              
              <!--리스트 끝 --></td>
          </tr>
        

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
  </div>
</body>

</html>
