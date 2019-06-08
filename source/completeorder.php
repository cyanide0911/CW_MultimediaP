<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--메타데이터 작성-->

  <title>토르컴</title> 
  <--타이틀표시-->

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
    <?php //php문 시작

    $mysql_hostname = '220.92.9.189'; //접속ip
    $mysql_username = 'root'; //접속계정
    $mysql_password = '5607'; //접속패스워드
    $mysql_database = 'mall'; //접속DB명
    $mysql_port = 3306; //접속포트


    $connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);  //DB연결

    if ($connect->connect_error) {
  
    }
    else{
        echo "fail";  //DB연결 실패시 오류출력
    }
    $givenID = $_GET["itemid"];   //상품id
    $givenName = $_GET["name"];   //상품명
    $givenPhone = (string)$_GET["bmobile"]; //휴대폰번호
    $givenAddress = $_GET["baddress1"];     //주소
    $givenPrice = (string)$_GET["itemprice"];   //상품가격

    $stmt = $connect->prepare("INSERT INTO ordertable(itemid, price, named , place, phone) values (?,?,?,?,?)");  //상품명, 상품가격, 주문자명, 주소, 휴대폰번호로 테이블에 레코드추가
    $stmt->bind_param("iisss", $givenID, $givenPrice, $givenName, $givenAddress, $givenPhone);  
    $stmt->execute();       

    $stmt->close();     //statement객체 종료
    $connect->close();  //연결종료
    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die("fail");   //


    if ($connect) {
  
    }
    else{
        echo "fail";    //DB연결 실패시 오류출력
    }
    $result = mysqli_query($connect, 'SELECT id, itemid from ordertable order by id desc');     //DB에서 주문한 상품 id 추출
    $data = mysqli_fetch_array($result) ;   //레코드 리턴
    $idid = $data['id'];    //주문번호만 추출

    ?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo2.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>   <!--클릭시 메인화면으로 연결-->
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home     <!--클릭시 메인화면연결-->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keyboard.php">Keyboard</a>    <!--키보드로 연결-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mouse.php">Mouse</a>      <!--마우스로 연결-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="headphone.php">Headphone</a>  <!--헤드폰으로 연결-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mouse pad.php">Mousepad</a> <!--마우스패드로 연결-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchorder.php">Search Order</a> <!--주문번호조회로 연결-->
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
          <td height="25" align="center">주문하신 주문번호는 <? echo $idid ?> 입니다.</td>    <!--주문완료 후 주문번호 확인-->
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
      <p class="m-0 text-center text-white">Copyright &copy; Thor COM 2019</p>  <!--하단 내용표시-->
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
