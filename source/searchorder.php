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
      <form action="viewOrder.php" method="get">
          <div class="row text-center">
    <h1>주문번호를 입력하세요</h1>
    
    <input type="text" name="ordernumber" value="">
    <input type="submit" class="btn btn-primary" value="주문조회" id="calc">

  </div>
          </form>
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
