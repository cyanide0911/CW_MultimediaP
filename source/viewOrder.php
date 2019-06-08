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
$mysql_hostname = '220.92.9.189';           //접속ip
$mysql_username = 'root';                   //접속계정
$mysql_password = '5607';                   //접속패스워드
$mysql_database = 'mall';                   //접속DB명
$mysql_port = 3306;                         //접속포트


$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);     //DB연결

if (!$connect->connect_error) {
    
}
else{
    echo "fail";        //연결실패시 오류문출력
}
$givenID = $_GET["ordernumber"];            //주문번호 입력

$stmt = $connect->prepare("SELECT id ,itemid, named, place, price, phone from ordertable where id = ? ");       //입력받은 주문번호로 주문번호, 상품명, 주문자명, 주소, 가격,  휴대폰번호 검색
$stmt->bind_param("i", $givenID);           //입력받은 주문번호 파라미터로 넘김
$stmt->execute();                           //sql문 실행
$result = $stmt->get_result();              //검색결과 변수에 저장
$stmt->close();                             //sql문 종료

$data = $result->fetch_assoc();             //읽어온 데이터 배열형태로 데이터에 저장
$odid = $data['id'];                         //주문번호 저장
$oditid = $data['itemid'];                  //상품번번 저장
$odname = $data['named'];                   //주문자명 저장
$odplace = $data['place'];                  //주소 저장
$odprice = $data['price'];                  //상품가격 저장
$odphone = $data['phone'];                  //휴대폰번호 저장

$stmt = $connect->prepare("SELECT id ,itemname from iteminfo  where id = ? ");  //상품번호로 상품번호, 상품명 검색
$stmt->bind_param("i", $oditid);
$stmt->execute();
$result = $stmt->get_result();      //검색한데이터 변수에 저장
$stmt->close();
$data = $result->fetch_assoc();     
$itid = $data['id'];                //상품번호 뽑아서 저장
$itname = $data['itemname'];        //상품명 뽑아서 자장
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
                          </tbody>
                            </table>
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
                  <td class="green_bold" height="30" align="center"><?echo $odid?></td>         <!--주문번호출력-->    
                  <td align="center">&nbsp;</td>
                  <td align="center"><? echo $itname ?> </td>           <!--상품명출력-->
                  <td align="center">&nbsp;</td>
                  <td align="center"><?echo $odprice?></td>             <!--가격출력-->
                  <td align="center">&nbsp;</td>
                 </tr>
                </tbody></table></td>
              </tr>								
                                            
                          </tbody></table></td>

                                  </tr>

                                  </tbody></table></td>
                      </tr>
                    </tbody>
        </table>
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
                                        <td align="center">주문자명</td>            
                                        <td align="center"width="1"></td>

                                        <td align="center">핸드폰 번호</td>
                                        <td align="center"width="1"></td>

                                        <td align="center">주소</td>
                                    </tr>
                                    </tbody></table></td>
                            <td width="6"></td>
                        </tr>
                        </tbody>
                    </table>
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
                                    <td class="green_bold" height="30" align="center"><?echo $odname?></td>     <!--주문자명 출력-->
                                    <td align="center">&nbsp;</td>
                                    <td align="center"><? echo $odphone ?> </td>                <!--휴대폰번호 출력-->
                                    <td align="center">&nbsp;</td>
                                    <td align="center"><?echo $odplace?></td>                   <!--주소 출력-->
                                    <td align="center">&nbsp;</td>
                                </tr>
                                </tbody></table></td>
                        </tr>

                        </tbody></table></td>

            </tr>

            </tbody></table></td>
        </tr>
        </tbody></table>

                    <form action="cancelcomplete.php" method="GET">
                    <input type="hidden" name="cancel" value="true">
                        <input type="hidden" name="odid" value="<? echo $odid?>">
                    <input type="submit" class="btn btn-primary" value="주문 취소">     <!--주문취소 버튼 생성-->
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
