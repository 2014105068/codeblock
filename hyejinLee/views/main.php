<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EasyBlock!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
	<link href="css/addon/HoverEffect.css" rel="stylesheet">
    <link href="css/freelancer.min.css" rel="stylesheet">

	<!-- 마우스 가져다대면 전환 이펙트 -->
	
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">EASY BLOCK</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#login_pop" data-toggle="modal">LOGIN</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/sign_up">JOIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<!-- 메인 로그인 팝업 -->
    <div class="modal fade" id="login_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header mycolor1">
            <h4 class="modal-title" id="exampleModalLabel">로그인</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body bg-ilght" style="text-align:center">
            <form name="form_login" method="post" action="/login/check">
              <div class="form-inline">
                아이디 : &nbsp;&nbsp;
                <input type="text" name="uid" size="15" value="" class="form-control form-control-sm">
              </div>
              <div style="height:10px"></div>
              <div class="form-inline">
                암　호 : &nbsp;&nbsp;
                <input type="password" name="pwd" size="15" value="" class="form-control form-control-sm"> 
              </div>
            </form>
          </div>
          <div class="modal-footer alert-secondary" style="text-align:center">
            <button type="button" class="btn btn-sm btn-secondary" onclick="javascript:form_login.submit();">확인</button>
            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/mascot.png" alt="마스코트펭귄">
        <h1 class="text-uppercase mb-0">Start Easy Block!</h1>
        <hr class="star-light">
          <h2 class="font-weight-light mb-0"><b>세상에서 가장 쉬운 코딩을 경험해보세요</b></h2>
      </div>
    </header>

	
	
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">MENU</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            
		<div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="/intro">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/intro.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">Intro</h1>
					<p>Intro descritpion</p>
				</span>
				</div>
			</a>
		</div>
            
         <div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="/mycode">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/home.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">Mycode</h1>
					<p>Mycode description</p>
				</span>
				</div>
			</a>
		</div>
            
         <div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="#">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/community.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">커뮤니티</h1>
					<p>커뮤니티 description</p>
				</span>
				</div>
			</a>
		</div>
            
		<div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="/c">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/c.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">C 코딩</h1>
					<p>C코딩 description</p>
				</span>
				</div>
			</a>
		</div>

        <div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="#">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/python.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">파이썬</h1>
					<p>파이썬 description</p>
				</span>
				</div>
			</a>
		</div>
            
        <div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="#">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/portfolio/arduino.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">아두이노</h1>
					<p>아두이노 description</p>
				</span>
				</div>
			</a>
		</div>
		
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Kyungbook National University
                <br>IT-5,&nbsp; Room 251</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Programmar</h4>
            <p class="lead mb-0">Computer Science ITEC 401
              <a href="http://startbootstrap.com"><br>Team Gelato</a></p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

	
  </body>

</html>
