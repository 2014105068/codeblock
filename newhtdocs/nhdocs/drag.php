<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>판매관리</title>
    <link href="/my/css/my.css" rel="stylesheet">
    <link href="/my/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <script src="/my/js/jquery-3.3.1.min.js"></script>
    <script src="/my/js/popper.min.js"></script>
    <script src="/my/js/bootstrap.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery-ui/jquery-ui.css"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>  
  </head>
    <script>
    $( function() {
        $( ".draggable" ).draggable({
            stack: ".draggable"
        }),
        $( ".droppable" ).droppable({
            drop: function( event, ui ) {
                $( this )
                // 여기서부터 드래그 앤 드롭할 때 바뀌는 부분입니다~
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Welcome to JavaScript!" );
                /////////////////////////////////////////////////////////
            }
        });
    });
    
</script>
  <body>
      
      <div class = "container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">판매관리</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class = "nav-link" href = "#">매입</a></li>
                <li class="nav-item"><a class = "nav-link" href = "#">매출</a></li>
                <li class="nav-item"><a class = "nav-link" href = "#">기간조회</a></li>
        
                <li class="nav-item dropdown">    
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">통계</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Best제품</a>
                    <a class="dropdown-item" href="#">월별제품별현황</a>
                    <a class="dropdown-item" href="#">종류별 분포도</a>
                </div>
                </li>
        
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">기초정보</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">구분</a>
                    <a class="dropdown-item" href="#">제품</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/member">사용자</a>
                </div>
                </li>
            </ul>
            <a class = "btn btn-sm btn-outline-secondary btn-dark" href="#">로그인</a>
        </div>
        </nav>
        </div> 
    <div class="ex-layout">
        <div class="droppable" id="container1"> 
            <img src="/assets/like.png" alt="박스01">
        </div>

        <div class="draggable" id="middle">
            <img id="test_drag1" src="/assets/add.png"width="155" height="98" alt="화살표">
        </div>

        <div class="droppable" id="container2">
            <p> Drop here</p>
<!--            <img src="/assets/container002.png" alt="박스2">-->
        </div>
    </div>
    
      </div>
  </body>
</html>