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
    $givenID = $_GET["itemNum"];
    echo $givenID;
    $result = mysqli_query($connect, 'SELECT id, itemname, price, thumb from iteminfo where id ='.$givenID);
    $data = mysqli_fetch_array($result) ;
    $idid = $data['id'];
    $itname = $data['itemname'];
    $itprice = $data['price'];
    $itthumb = "/source/" . $data['thumb'];
    mysqli_close($connect);

?>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="index.php"><img class="logo" src="image/logo2.png" alt=""></a>
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


    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3"><img class="fontlogo" src="image/font logo.png"></h1>

      <p class="lead" style="font-family: Fusterd Brush Two; font-size: 80px;" align="center">Upgrade Your Skill</p>
    </header>

    <!-- Page Features -->
    <form action="completeorder.php" method="get">
        <table width="920" cellspacing="0" cellpadding="0" border="0" align="center">
          <tbody><tr>
            <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
        
              <tbody>
              <tr>
                <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                  <tr>
                    <td align="center"><table width="98%" cellspacing="0" cellpadding="0" border="0">
                        <tbody><tr>
                          <td><table width="100%" height="32" cellspacing="0" cellpadding="5" border="0" background="/skin/shop/basic/img/titlebg.gif">                        
                                <tbody><tr>
                              <td width="70" align="center">이미지</td>
                              <td width="*">상품명</td>
                              <td width="80" align="center">가격</td>
                            </tr>
                                </tbody></table></td>
                        </tr>
                        <tr>
                          <td><!--리스트 시작 -->
                            <table width="100%" cellspacing="0" cellpadding="5" border="0">
                                                <tbody><tr>
                              <td class="black_bold" width="70" align="center"><img src="<? echo $itthumb?>" width="60" height="60"></td>
                                                    <td width="*"><span class="blue"><?echo $itname?></span></td>
                              <td width="80" align="right">
                                  <span class="black_bold"><? echo $itprice ?>원</span>
                              </td>
                            </tr>
                            
                          </tbody></table>
                            <!--리스트 끝 --></td>
                        </tr>                
                      </tbody></table>
                        <table width="98%" cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                  <td style="padding-right:10px" align="right"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
        
                                      </td>
                                    </tr>
                                  </tbody></table></td>
                                </tr>
                            </tbody></table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                      </tbody></table></td>
                  </tr>
                </tbody></table></td>
              </tr>
              
            </tbody></table></td>
          </tr>
          <tr>
            <td height="15" align="center"></td>
          </tr>
          <tr>
            <td><table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>

                    <tr>
                <td width="10000" valign="top"><!--주문고객정보 시작 -->
                    <table width="97%" cellspacing="0" cellpadding="0" border="0">

                        <tbody>
                      <tr>
                        <td align="center"><table width="98%" cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                              <td height="35" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
                                  <colgroup>
                                  <col width="100" align="center">
                                  <col width="500" align="center">
                                  </colgroup>
                                  <tbody><tr>
                                    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="150" height="30" bgcolor="#FFFFFF" align="left">주문자 이름</td>
                                    <td align="left"><input name="name" type="text" class="minput_gray" id="od_bname" size="20" value=""></td>
                                  </tr>
                                  <tr bgcolor="dbdbdb">
                                    <td colspan="2" align="left"></td>
                                  </tr>
                                  <tr>
                                    <td height="30" bgcolor="#FFFFFF" align="left">휴대전화</td>
                                    <td align="left"><input name="bmobile" type="text" class="minput_gray" id="bmobile" size="15" value=""></td>
                                  </tr>
                                  <tr bgcolor="dbdbdb">
                                    <td colspan="2" align="left"></td>
                                  </tr>
                                  <tr>
                                    <td height="30" bgcolor="#FFFFFF" align="left">주소</td>
                                    <td height="20" align="left"><input name="baddress1" type="text" class="minput_gray" id="baddress1" size="25" value=""></td>
                                  </tr>

                                  </tbody></table></td>
                            </tr>
                            <tr>
                              <td>      <input type="submit" class="btn btn-primary" value="결제">
                                  &nbsp;</td>
                            </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody>


                    </table>
                  <!--주문고객정보 끝 --></td>
              </tr>
            </tbody>

        </table></td>
          </tr>
          <tr>
            <td><br><table width="100%" cellspacing="0" cellpadding="0" border="0">
              <tbody><tr>
                </tr>
                          <tr><td>&nbsp;</td>
                          </tr>
                        </tbody></table>                </td>
                      </tr>
                    </tbody></table>
                  <!--배송방법 끝 --></td>
                </tr>
            </tbody></table></td>
          </tr>
          <!-- 뉴결제 -->
          <tr><td><br>
              <table width="980" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody><tr>
                    <td width="700" valign="top">
                        <table style="border-top:1px solid #a2a2aa" width="690" cellspacing="1" cellpadding="0" border="0" bgcolor="#ececee">
                            <tbody>
                            <tr>
                                <td height="80" bgcolor="#FFFFFF">&nbsp;&nbsp;입금 은행</td>
                                <td bgcolor="#FFFFFF">
                                <div id="bank_tab1">
                                    <span id="bank_type1">국민은행 656901-04-251956 김민수</span>
                                    <br>
                                </div>
                                </td>
                            </tr>
                            
                        </tbody></table>
                    </td>
                    <td valign="top">
                        <table width="280" cellspacing="0" cellpadding="0" border="0" align="right">			
                            <tr>
                                <td style="padding:9px 0 0 0" height="25">
                                    <!--무통장결제 시작 -->
                                    <div id="bank" style="display: inline;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody><tr>									
                                            <td bgcolor="#FFFFFF" align="center"><p style="margin-top:1px;">
                                            </p>
                                            </td>
                                        </tr>							
                                        </tbody></table></div>
                                </td>
                            </tr>				
                        </tbody></table>
                    </td>
                </tr>
            </tbody>
              </table>
        
          </td></tr>
          <!-- 뉴결제 -->
          <tr>
            <td height="10">&nbsp;</td>
          </tr>

        </tbody></table>

        <input type="hidden" name="itemprice" value="<? echo $itprice ?>">
        <input type="hidden" name="itemid" value="<? echo $givenID ?>">
    </form>
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
