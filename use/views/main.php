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
    <link href="css/freelancer.min.css?ver=15" rel="stylesheet">
<link href="css/addon/HoverEffect.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.rawgit.com/hiun/NanumSquare/master/nanumsquare.css">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">EASY BLOCK</a>
        
     		<a href="/auth/logout" class="btn nbtn">로그아웃</a>
		
		<div id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="img/minipenguin.png" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">@@@</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="/profile"> <i class="fa fa-user fa-fw fa-lg npro"></i> Profile </a>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
          
      </div>
    </nav>

       <div class="modal fade" id="login_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header mycolor1">
            <h4 class="modal-title" id="exampleModalLabel">로그인</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body bg-ilght" style="text-align:center">
            <form name="form_login" method="post" action="/auth">
              <div class="form-inline">
                이메일 : &nbsp;&nbsp;
                <input type="text" name="email" size="20" value="" class="form-control form-control-sm">
              </div>
              <div style="height:10px"></div>
              <div class="form-inline">
                암　호 : &nbsp;&nbsp;
                <input type="password" name="pwd" size="20" value="" class="form-control form-control-sm" onKeydown = "if (event.keyCode == 13) { javascript:form_login.submit(); }"> 
              </div>
            </form>
          </div>
          <div class="modal-footer alert-secondary" style="text-align:center">
            <button type="button" class="btn btn-sm btn-secondary" onclick="javascript:form_login.submit();" on>확인</button>
            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
   
   
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center bimage">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/mascot.png" alt="마스코트펭귄">
        <h1 class="text-uppercase mb-0">Start Easy Block!</h1>
        <hr class="star-light">
 
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
       <div class="container">
       <!--
        <h2 class="text-center text-uppercase text-secondary mb-0">MENU</h2>
    
            <hr class="star-dark mb-5">
    -->    <div class="row nblank"></div>
           <div class="row">
            
		<div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="/intro">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/icon_intro2.png" class="img-fluid" alt="Pic">
				<span class="pic-caption open-up">
					<h1 class="pic-title">Intro</h1>
					<p>Intro descritpion</p>
				</span>
				</div>
			</a>
		</div>
        

        <div class = "col-md-6 col-lg-4">
			<a class="pic pic-3 d-block mx-auto" href="/c">
				<div class="my-auto w-100 text-center text-white">
				<img src="img/icon_block2.png" class="img-fluid" alt="Pic">
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
				<img src="img/icon_arduino2.png" class="img-fluid" alt="Pic">
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
             <h4 class="text-uppercase mb-4">Team gelato</h4>
              <hr class="star-light">
          </div>
       
         <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Programmar</h4>
            <p class="lead mb-0">LEE HYE JIN &nbsp;&nbsp;&nbsp;RYU GA RAM
            <p class="lead mb-0">CHAE HAN BIN &nbsp;&nbsp;&nbsp;CHOI JI HUN
            <p class="lead mb-0">LEE MIN SEOK &nbsp;&nbsp;&nbsp;PARK SU HO
             <!-- <a href="http://startbootstrap.com"><br>Team Gelato</a></p>-->
          </div>
        </div>
      </div>
    </footer>

   

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
