<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!--메타데이터 작성-->
  <title>토르컴</title> <!--제목-->

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


    $connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die("DB 연결 실패");           //DB연결

    if ($connect) {

    }
    else{
        echo "fail";            //접속실패시 올뮤문 출력
    }
    $givenID = $_GET["pastname"];   //전페이지에서 선택한 상품명 넘김

    $result = mysqli_query($connect, 'SELECT id, itemname, price, thumb, info from iteminfo where id ='.$givenID);      //상품번호, 상품명, 가격, 이미지, 상품정보 검색

        $data = mysqli_fetch_array($result) ;               //검색한정보 레코드 1개 리턴
        $idid = $data['id'];                //상품번호 대입
        $itname = $data['itemname'];         //상품명 대입 
        $itprice = $data['price'];            //상품가격 대입
        $itthumb = "/source/" . $data['thumb'];     //상품이미지 대입
        $itinfo = "/source/". $data['info'];          //상품정보 대입

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


    <div class="page-body">
      <div class="thumb-info">
          <div class="thumb-wrap">
              <div class="thumb"><img src="<? echo $itthumb ?>"></div>      <!--상품이미지 출력-->
              
          </div><!-- .thumb-wrap -->
              <div class="info">
              <div class="table-opt">
                  <table summary="주문수량">
                      <tbody>
                                                                      <tr>                                                                                                                                                                                                                                                                       <tr>
                              <td colspan="2">
                                  <div class="MK_optAddWrap">
                                      <div id="MK_innerOptWrap">
                                          <div id="MK_innerOptTotal">
                                              <h3 class="tit-prd"><? echo $itname?> </h3>
                                              <span class="MK_txt-total">상품 금액</span>               <!--상품가격 출력-->
                                              <strong class="MK_total" id="MK_p_total"><? echo $itprice?></strong>
                                              <span class="MK_txt-won">원</span>                <!--가격뒤에 '원' 출력-->
                                              <br>
                                              <form method="get" action="purchasepage.php">
                                              <input type="hidden" name="itemNum" value="<? echo $idid?>">
                                              <input type="submit" class="btn btn-primary" value="구매하기">        <!--구매하기 버튼 생성-->
                                              </form>
                                          </div>
                                              
                                          <div class="infoimage">
                                              <img src="<? echo $itinfo?>">        <!--상품정보 이미지형태로 출력-->
                                          </div>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                                                                                                                                                                  <tr>
                              <td colspan="2">
                              <div class="opt-wrap">
                                  
                                                                                  </div>
                              </td>
                          </tr>
                                                                                                                                                                                                                                                                                                                                                  <tr>
                              <td colspan="2">
                                  <div class="tb-left">
                                                                                                                                                                                                          </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div><!-- .table-opt -->
              <div class="prd-btns">

              </div>

          </div><!-- .info -->
      </div><!-- .thumb-info -->
<div id="malltb_video_player" style="margin-top: 10px; margin-bottom: 10px; text-align: center; display: none;"></div>                            
</div><!-- detail_align -->

      </div>



<div class="related_prd_box">
        </div>

</div>

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
