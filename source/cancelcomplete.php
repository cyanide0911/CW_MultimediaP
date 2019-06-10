<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">              
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--메타데이터 작성 -->
    <title>토르컴</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <?php

    $mysql_hostname = '';   //접속할주소 설정
    $mysql_username = '';           //접속할 계정설정
    $mysql_password = '';           //계정암호 입력
    $mysql_database = 'mall';           //DB명입력
    $mysql_port = 3306;                 //포트번호 입력
  

    $connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);
    //DB연결
    if (!$connect->connect_error) {
           
    }
    else{
        echo "fail";    //DB연결 실패시 오류출력
    }
    $givenID = $_GET["odid"];   //주문번호 대입

    $stmt = $connect->prepare("DELETE from ordertable where id = ?");   //주문번호에 해당하는 주문 삭제
    $stmt->bind_param("i", $givenID);       //위 sql문에 파라미터 넘김
    $stmt->execute();       //sql문 실행

    $stmt->close();         //종료
    $connect->close();      //연결 종료
    ?>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>     <!--클릭시 메인화면으로 연결--> 
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">            <!--클릭시 메뉴출력으로 연결-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">    
                    <a class="nav-link" href="index.php">Home                   <!--메인화면으로 연결-->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keyboard.php">Keyboard</a>        <!--키보드페이지 연결-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mouse.php">Mouse</a>              <!--마우스페이지 연결-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="headphone.php">Headphone</a>      <!--헤드폰페이지 연결-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mouse pad.php">Mousepad</a>       <!--마우스패드 페이지 연결-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="searchorder.php">Search Order</a>     <!--주문확인 페이지 연결-->
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Page Content -->
<div class="container">         <!--주문취소 버튼-->
    <tbody>
    <tr>
        <td align="center">
            <table width="890" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <br>
                <tr>
                    <td height="25" align="center">주문이 취소되었습니다.</td>      <!--주문취소 내용 출력-->
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
