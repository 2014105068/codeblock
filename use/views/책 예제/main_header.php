<!doctype html>

<!-- 스크립트 -->
<script>
	function find_text()
	{
		form1.action = "#";
		form1.submit();
	}
</script>

<html lang="kr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>판매관리</title>
		<link href = "/my/css/bootstrap.min.css" rel = "stylesheet">
		<link href = "/my/css/my.css" rel = "stylesheet">
		<script src = "/my/js/jquery-3.3.1.min.js"> </script>
		<script src = "/my/js/popper.min.js"> </script>
		<script src = "/my/js/bootstrap.min.js"> </script>
  </head>
  <body>
	<div class = "container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">판매관리</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <!--<li class="nav-item active"> <a class="nav-link" href="#">매입 <span class="sr-only">(current)</span></a> </li>-->
			  <li class="nav-item"> <a class="nav-link" href="#">매입</a> </li>
			  <li class="nav-item"> <a class="nav-link" href="#">매출</a> </li>
			  <li class="nav-item"> <a class="nav-link" href="#">기간조회</a> </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  통계
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Best제품</a>
				  <a class="dropdown-item" href="#">월별제품별현황</a>
				  <a class="dropdown-item" href="#">종류별분포도</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  기초정보
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">구분</a>
				  <a class="dropdown-item" href="#">제품</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="/member">사용자</a>
				</div>
			  </li>
			 <!-- <li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			  </li> -->
			</ul>
			<!--<form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>-->
			<a class = "bin btn-sm btm-outline-secondary btn-dark" href = "#"> 로그인</a>
		  </div>
		</nav>
		<!--
	</body>
</html>
-->