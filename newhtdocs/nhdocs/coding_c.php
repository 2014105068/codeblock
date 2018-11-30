<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> EasyBlock | C코딩</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="/main" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">EasyBlock</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            <!--End Profile toogle button-->
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                           
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--Language selector-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                       
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End language selector-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">
									<?
									if($this->session->userdata('logged_in') == TRUE) {
										echo $this->session->userdata('nickname');
									} else {
									?>GUEST<?}?>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw fa-lg"></i> Profile </a>
                                        </li>
                                        <!-- 로그인을 하지 않으면 mycode 메뉴가 안보이게 -->
										<?
										if($this->session->userdata('logged_in') == TRUE) {
											echo '<li><a href="/mycode">  <i class="fa fa-envelope fa-fw fa-lg"></i> Mycode </a></li>';
										}?>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw fa-lg"></i> Settings </a>
                                        </li>
                                        <?
										if($this->session->userdata('logged_in') == TRUE) {
											echo '<li><a href="/auth/logout">  <i class="fa fa-envelope fa-fw fa-lg"></i> Logout </a></li>';
										}?>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                           
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="pageheader">
                        <h3><i class="fa fa-home"></i> Python block coding </h3>
                      <!--  <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li> <a href="#"> Home </a> </li>
                                <li class="active"> Blank Page </li>
                            </ol>
                        </div>-->
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="row">
                            
                           
                            <div class="col-lg-3">
                                <div class="panel">
                                    <div class="panel-body pad-no">
                                        <!--Default Tabs (Left Aligned)--> 
                                        <!--===================================================-->
                                        <div class="tab-base">
                                            <!--Nav Tabs-->
                                            <ul class="nav nav-tabs">
                                                <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-00"><b> [시작] </b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-01"><b>if_01</b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-02"><b> if_02 </b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-03"><b> if_03 </b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-04"><b> dict_01 </b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-05"><b> for_01</b> </a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-06"><b> for_02</b> </a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-07"><b> block_01 </b></a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-08"><b> list_01</b> </a> </li>
                                                <li> <a data-toggle="tab" href="#demo-lft-tab-09"><b> list_02</b> </a> </li>
                                            </ul>
                                            
                                        
                                            <!--Tabs Content-->
                                            <div class="tab-content">
                                                
                                                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                                    <!-- 테이블 구성하여 블럭 이미지 삽입 부분 -->
                                                    <table>
                                                        <tr><td>
                                                            <div class="draggable item-var" id="var_block" style="position:relative;">
                                                                <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="변수">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                    <input type="text" id="var_start" style="width:40px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:110px;">
                                                                    <input type="text" id="var_final" style="width:45px;">
                                                                </div>
                                                            </div></td>
                                                            <td>
                                                                <div class="draggable item-back" id="back_block" style="position:relative;">
                                                                <img src="assets/CodeBlock/back_block.png" width="100" height="50" alt="변수">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-for" id="state-for" style="position:relative;">
                                                                <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="화살표">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                    <input type="text" id="for_value" style="width:20px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:90px;">
                                                                    <input type="text" id="for_start" style="width:20px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:120px;">
                                                                    <input type="text" id="for_final" style="width:20px;">
                                                                </div>
                                                            </div></td>
                                                            <td>
                                                            <div class="draggable item-while" id="while-block"
                                                                 style="position:relative;">
                                                                <img src="assets/CodeBlock/while_block.png" width="170"
                                                                     height="50" alt="while문">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                <input type="text" id="while" style="width:90px;">
                                                                </div>
                                                            </div></td>
                                                            
                                                        </tr>
                                                        
                                                        <tr><td>
                                                            <div class="draggable item-final-for" id="state-for-final" style="position:relative;">
                                                                <img src="assets/CodeBlock/for_block_04.png" width="170" height="50" alt="for문 끝날때">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                    <input type="text" id="for_final_value" style="width:20px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:90px;">
                                                                    <input type="text" id="for_final_start" style="width:20px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:120px;">
                                                                    <input type="text" id="for_final_final" style="width:20px;">
                                                                </div>
                                                            </div></td>
                                                            <td>
                                                            <div class="draggable item-break" id="break-block"
                                                                 style="position:relative;">
                                                                <img src="assets/CodeBlock/break_block.png" width="170"
                                                                     height="50" alt="break문">
                                                            </div></td>
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-print" id="print-block" style="position:relative;">
                                                                <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                    <input type="text" id="print" style="width:47px;">
                                                                </div>
                                                                <div style="position:absolute; top:20px; left:140px;">
                                                                    <input type="text" id="print_end" style="width:25px;">
                                                                </div>
                                                            </div></td>
                                                            <td rowspan="2">
                                                            <div class="draggable item-dict" id="dict-block"
                                                                 style="position:relative;">
                                                                <img src="assets/CodeBlock/dict_block.png" width="170"
                                                                     height="120" alt="while문">
                                                                <div style="position:absolute; top:45px; left:40px;">
                                                                    <input type="text" id="dict_key_value_01" style="width:50px;">
                                                                </div>
                                                                <div style="position:absolute; top:45px; left:100px;">
                                                                    <input type="text" id="dict_val_value_01" style="width:60px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:40px;">
                                                                    <input type="text" id="dict_key_value_02" style="width:50px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:100px;">
                                                                    <input type="text" id="dict_val_value_02" style="width:60px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:10px;">
                                                                    <input type="text" id="dict_var" style="width:20px;">
                                                                </div>
                                                                
                                                            </div></td>
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-if" id="if-block" style="position:relative;">
                                                                <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                                                <div style="position:absolute; top:20px; left:60px;">
                                                                    <input type="text" id="if" style="width:90px;">
                                                                </div>
                                                            </div></td>
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-else" id="else-block" style="position:relative;">
                                                                <img src="assets/CodeBlock/else_block.png" width="170" height="50" alt="else문">
                                                            </div></td>
                                                            <td rowspan="2">
                                                            <div class="draggable item-dict" id="list-block"
                                                                 style="position:relative;">
                                                                <img src="assets/CodeBlock/list_block.png" width="170"
                                                                     height="120" alt="list문">
                                                                <div style="position:absolute; top:18px; left:45px;">
                                                                    <input type="text" id="list_var" style="width:95px; height:20px">
                                                                </div>
                                                                <div style="position:absolute; top:45px; left:10px;">
                                                                    <input type="text" id="list_key_01" style="width:45px;">
                                                                </div>
                                                                <div style="position:absolute; top:45px; left:65px;">
                                                                    <input type="text" id="list_key_02" style="width:45px;">
                                                                </div>
                                                                <div style="position:absolute; top:45px; left:120px;">
                                                                    <input type="text" id="list_key_03" style="width:42px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:10px;">
                                                                    <input type="text" id="list_key_04" style="width:45px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:65px;">
                                                                    <input type="text" id="list_key_05" style="width:45px;">
                                                                </div>
                                                                <div style="position:absolute; top:85px; left:120px;">
                                                                    <input type="text" id="list_key_06" style="width:42px;">
                                                                </div>
                                                                
                                                                
                                                            </div></td>
                                                            
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-elif" id="elif-block" style="position:relative;">
                                                                <img src="assets/CodeBlock/elseif_block.png" width="170" height="50" alt="else문">
                                                                <div style="position:absolute; top:20px; left:75px;">
                                                                    <input type="text" id="elif" style="width:75px;">
                                                                </div>
                                                            </div></td>
                                                        </tr>
                                                        <tr><td>
                                                            <div class="draggable item-elif" id="continue-block" style="position:relative;">
                                                                <img src="assets/CodeBlock/continue_block_1.png" width="170" height="50" alt="continue문">
                                                            </div></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                        </tr>
                                                        <tr>
                                                        </tr>
                                                        
                                                        <tr>
                                                            
                                                        </tr>
                                                        
                                                </table>    
                                                    <div id="demo-tab-scroll">

                                                    </div>

                                                </div>
                                            </div>     
                                            
                                        </div>
                                        <!--===================================================--> 
                                        <!--End Default Tabs (Left Aligned)-->
                                    </div>
                                   
                                </div>
                            </div>
                             <div class="col-lg-6" style="height:800px; background-color:#fff;">
                                 
                                <div class="tab-base" style="float:left; background-color:#ffe4e1; width:50%; height:100%;">
                                    
                                    <h5 class="panel-title" id="problem">
                                        <div class="tab-content" style="background-color:#ffe4e1">
                                        <div id="demo-lft-tab-00" class="tab-pane fade in active">
                                        <p><b> Python Coding에 오신 것을 환영합니다.<p>← 문제를 선택해 주세요.</p>  </b></p>
                                        </div>
                                        
                                        <div id="demo-lft-tab-01" class="tab-pane fade">
                                        <p><b><br><br>[문제 1]<br><br> &nbsp;&nbsp; 사용자가 입력한 숫자가 짝수인지 아닌지 출력하는 프로그램을 작성하시오.</b></p>
                                        </div>
                                            
                                        <div id="demo-lft-tab-02" class="tab-pane fade">
                                        <p><b><br><br>[문제 2]<br><br> &nbsp;&nbsp; 1부터 50까지의 숫자 중 짝수만 출력하는 프로그램을 작성하시오.</b></p>
                                        </div>
                                        
                                            
                                        <div id="demo-lft-tab-03" class="tab-pane fade">
                                        <p><b><br><br>[문제 3]<br><br> &nbsp;&nbsp;사용자가 입력한 점수를 가지고 반복하여 학점을 판단하는 프로그램을 작성하시오.
                                        </b></p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <p><b>예시) 변수 score가 90점 이상이면 'A' 출력</b></p>
                                            <p><b>80점 이상 90점 미만이면 'B' 출력</b></p>
                                            <p><b>70점 이상 80점 미만이면 'C' 출력</b></p>
                                            <p><b>60점 이상 70점 미만이면 'D' 출력</b></p>
                                            <p><b>60점 미만이면 'F' 출력</b></p>
                                        </div>
                                        
                                        <div id="demo-lft-tab-04" class="tab-pane fade">
                                        <p><b><br><br>[문제 4]<br><br>&nbsp;&nbsp; 딕셔너리형 자료(people)를 만들어 그 안에 이름, 나이를 출력하는 프로그램을 작성하시오.</b></p>
                                        </div>
                                        <div id="demo-lft-tab-05" class="tab-pane fade">
                                        <p><b><br><br>[문제 5]<br><br>&nbsp;&nbsp; 0부터 100 사이의 수 중 7의 배수의 합계를 출력하는 프로그램을 작성하시오.</b></p>
                                    
                                        </div>
                                        <div id="demo-lft-tab-06" class="tab-pane fade">
                                        <p><b><br><br>[문제 6]<br><br> 다음과 같이 역삼각형 모양으로 별을 출력하는 프로그램을 작성하시오.</b></p>
                                            <p><b>*****<br>&nbsp;&nbsp;****<br>&nbsp;&nbsp;&nbsp;&nbsp;***<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</b></p>
                                        </div>
                                        <div id="demo-lft-tab-07" class="tab-pane fade">
                                        <p><b><br><br>[문제 7]<br><br> 다음 코드는 각 과목의 점수를 선언하고, 평균을 출력하는 코드입니다. 이 코드와 같은 결과가 나오도록 블럭을 옮겨보세요.</b></p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <p><b> kor = 94<br>eng = 91 <br> math = 83 <br> science = 87 <br> average = <br>(kor + eng + math + science) / 4 <br> print(average)</b></p>
                                        </div>
                                        <div id="demo-lft-tab-08" class="tab-pane fade">
                                        <p><b><br><br>[문제 8]<br><br> 리스트 이름을 Animal로 만들고 그 안에 개, 고양이, 원숭이, 닭을 넣으시오. 인덱스 지정을 통해 '원숭이'를 출력하시오.</b></p>
                                        </div>
                                        <div id="demo-lft-tab-09" class="tab-pane fade">
                                        <p><b><br><br>[문제 9]<br><br> 리스트 이름을 fruit로 만들고 그 안엔 사과, 딸기, 배, 체리, 귤이 있다. <br> <br>&nbsp;&nbsp;리스트의 각 요소를 확인하면서 과일 이름이 '귤'이라면 '귤귤'로 이름을 바꿔 출력하시오. 그렇지 않은 것은 요소의 값을 그대로 출력하시오. </b></p>
                                        </div>
                                        </div>
                                    </h5>

                                    
                                    <button class="Fix" style="position:absolute; top:-50px; left :200px;">정답보기</button>
                                    <button class="Origin" style="position:absolute; top:-50px; left:300px;">원래대로</button>
									<button id = "savecode" class="Save" style="position:absolute; top:-50px; left:400px;">코드저장</button>
                                    <button value="Refresh Page" style="position:absolute; top:-50px; left : 500px;" onClick="window.location.reload()">새로고침</button>
                                </div>

                            
                                 <div id="droppable_item" style="float:left; background-color:#ffdab9; width:50%; height:100%">
                            <!--문제 답 부분-->
                                   <div id="answer" class="Answer01" style="display:none">
                                    <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                     <div id="var_block" style="position:relative;">
                                        <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="변수">
                                     </div>
                                    </div>
                                    <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">   
                                     <div id="if-block" style="position:relative;">
                                      <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                     </div>
                                    </div>
                                    <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                     <div id="print-block" style="position:relative;">
                                       <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">                        
                                     </div>
                                    </div>
                                    <div style="position:absolute; top:388px; left: 538.8px; z-index:1000;"> 
                                     <div id="else-block" style="position:relative;">
                                      <img src="assets/CodeBlock/else_block.png" width="170" height="50" alt="else문">
                                     </div>
                                    </div>
                                    <div style="position:absolute; top:488px; left: 538.8px; z-index:1000;">
                                     <div id="print-block" style="position:relative;">
                                       <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">                        
                                     </div>
                                    </div>    
                                   </div>
                                    <!--2번답  -->
                                     <div id="answer" class="Answer02" style="display:none">
                                         <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                            <div id="for_block" style="position:relative;">
                                            <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="for문">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:138px; left: 538.8px; z-index:1000;">   
                                            <div id="if-block" style="position:relative;">
                                            <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">   
                                            <div id="continue-block" style="position:relative;">
                                            <img src="assets/CodeBlock/continue_block_1.png" width="170" height="50" alt="continue문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                             <div id="back_block" style="position:relative;">
                                             <img src="assets/CodeBlock/back_block.png" width="170" height="50" alt="back문">
                                             </div>
                                             </div>
                                         <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                     </div>
                                    <!--문제 3번답.  -->
                                     <div id="answer" class="Answer03" style="display:none">
                                        <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                            <div id="while_block" style="position:relative;">
                                                <img src="assets/CodeBlock/while_block.png" width="170" height="50" alt="while">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:138px; left: 538.8px; z-index:1000;">
                                            <div id="var_block" style="position:relative;">
                                                <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="변수">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">   
                                            <div id="if-block" style="position:relative;">
                                            <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;"> 
                                            <div id="elseif-block" style="position:relative;">
                                            <img src="assets/CodeBlock/elseif_block.png" width="170" height="50" alt="else문">
                                            </div>
                                        </div>
                                         <div style="position:absolute; top:338px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:388px; left: 538.8px; z-index:1000;"> 
                                            <div id="elseif-block" style="position:relative;">
                                            <img src="assets/CodeBlock/elseif_block.png" width="170" height="50" alt="else문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:438px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:488px; left: 538.8px; z-index:1000;"> 
                                            <div id="elseif-block" style="position:relative;">
                                            <img src="assets/CodeBlock/elseif_block.png" width="170" height="50" alt="else문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:538px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                         <div style="position:absolute; top:588px; left: 538.8px; z-index:1000;"> 
                                            <div id="else-block" style="position:relative;">
                                            <img src="assets/CodeBlock/else_block.png" width="170" height="50" alt="else문">
                                            </div>
                                         </div>
                                          <div style="position:absolute; top:638px; left: 538.8px; z-index:1000;">
                                            <div id="print-block" style="position:relative;">
                                            <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                            </div>
                                         </div>
                                     </div>
                            <!-------------->
                                     <!--4번답-->
                                         <div id="answer" class="Answer04" style="display:none">
                                             <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                             <div id="dict-block" style="position:relative;">
                                             <img src="assets/CodeBlock/dict_block.png" width="170" height="120" alt="dict문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:278px; left: 538.8px; z-index:1000;">
                                             <div id="print-block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                         </div>
                                    <!--5번답---->
                                     <div id="answer" class="Answer05" style="display:none">
                                             <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:138px; left: 538.8px; z-index:1000;">
                                             <div id="for_block" style="position:relative;">
                                             <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="for문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">
                                             <div id="if_block" style="position:relative;">
                                             <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                             <div id="back_block" style="position:relative;">
                                             <img src="assets/CodeBlock/back_block.png" width="170" height="50" alt="back문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:338px; left: 538.8px; z-index:1000;">
                                             <div id="back_block" style="position:relative;">
                                             <img src="assets/CodeBlock/back_block.png" width="170" height="50" alt="back문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:388px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                         </div>
                                     <!--6번문제 답-->
                                      <div id="answer" class="Answer06" style="display:none">
                                            
                                             <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                             <div id="for_block" style="position:relative;">
                                             <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="for문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:138px; left: 538.8px; z-index:1000;">
                                             <div id="for_block" style="position:relative;">
                                             <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="for문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">
                                             <div id="if_block" style="position:relative;">
                                             <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                             <div id="else_block" style="position:relative;">
                                             <img src="assets/CodeBlock/else_block.png" width="170" height="50" alt="else문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                            
                                             <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                             <div id="back_block" style="position:relative;">
                                             <img src="assets/CodeBlock/back_block.png" width="170" height="50" alt="back문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:338px; left: 538.8px; z-index:1000;">
                                             <div id="back_block" style="position:relative;">
                                             <img src="assets/CodeBlock/back_block.png" width="170" height="50" alt="back문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:388px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                         </div>
                                    <!--- 7번답 ---->
                                        <div id="answer" class="Answer07" style="display:none">
                                            <div style="position:absolute; top:88px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                            <div style="position:absolute; top:138px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                            <div style="position:absolute; top:188px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                            <div style="position:absolute; top:238px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                            <div style="position:absolute; top:288px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                            <div style="position:absolute; top:338px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                            
                                            
                                        </div>
                                    <!----- 8번답 ------>
                                     <div id="answer" class="Answer08" style="display:none">
                                             <div style="position:absolute; top:128px; left: 538.8px; z-index:1000;">
                                             <div id="list-block" style="position:relative;">
                                             <img src="assets/CodeBlock/list_block.png" width="170" height="120" alt="list문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:278px; left: 538.8px; z-index:1000;">
                                             <div id="print-block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                         </div>
                                     <!-----9번답------>
                                     <div id="answer" class="Answer09" style="display:none">
                                             <div style="position:absolute; top:128px; left: 538.8px; z-index:1000;">
                                             <div id="list-block" style="position:relative;">
                                             <img src="assets/CodeBlock/list_block.png" width="170" height="120" alt="list문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:268px; left: 538.8px; z-index:1000;">
                                             <div id="for_block" style="position:relative;">
                                             <img src="assets/CodeBlock/for_block_03.png" width="170" height="50" alt="for문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:318px; left: 538.8px; z-index:1000;">
                                             <div id="if_block" style="position:relative;">
                                             <img src="assets/CodeBlock/if_block.png" width="170" height="50" alt="if문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:368px; left: 538.8px; z-index:1000;">
                                             <div id="var_block" style="position:relative;">
                                             <img src="assets/CodeBlock/var_block.png" width="170" height="50" alt="var문">
                                             </div>
                                             </div>
                                             <div style="position:absolute; top:418px; left: 538.8px; z-index:1000;">
                                             <div id="print_block" style="position:relative;">
                                             <img src="assets/CodeBlock/print_block_1.png" width="170" height="50" alt="print문">
                                             </div>
                                             </div>
                                         </div>
                                    <!-------------->
                                 </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> code </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div id="appscrolldiv">
                                            
                                            <p>&nbsp;</p>
                                           
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                       
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        <li class="list-header">menu</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-th"></i>
                                            <span class="menu-title">
                                            <strong>Intro,tutorial</strong>
                                            </span>
                                           
                                            </a>
                                            <!--Submenu-->
                                            
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">Block coding</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="ui-animation.html"><i class="fa fa-caret-right"></i> Python block coding </a></li>
                                                <li><a href="ui-panel.html"><i class="fa fa-caret-right"></i> Python coding </a></li>
                                                <li><a href="ui-panel.html"><i class="fa fa-caret-right"></i> Arduino coding </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                        
                                      <!--  <li class="list-divider"></li>-->
                                        <!--Category name-->
                                       
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-map-marker"></i>
                                            <span class="menu-title">
                                            Board
                                 <!--  <span class="label label-mint pull-right">New</span>-->
                                            </span>
                                            </a>
                                            <!--Submenu-->
                                           <!-- <ul class="collapse">
                                                <li><a href="maps-gmap.html">Google Maps</a></li>
                                                <li><a href="maps-vectormap.html">Vector Maps</a></li>
                                            </ul>-->
                                        </li>
                                        <!--Menu list item-->
                                        
                                    <!--Widget-->
                                    <!--================================-->
                                   
                                    <!--================================-->
                                    <!--End widget-->
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
                <!--ASIDE-->
                <!--===================================================-->
               
                <!--===================================================-->
                <!--END ASIDE-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2018 Gelato</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <!--       내가 추가한 js <드래그앤드랍용> -->
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery-ui/jquery-ui.css"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
            
        <!--    그 외 jQWidgets 관련     -->
        <!--<script src="js/jqwidget/jqwidgets/jqxcore.js"></script>
        <script src="js/jqwidget/jqwidgets/jqxdocking.js"></script>
        <script src="js/jqwidget/jqwidgets/jqxwindow.js"></script>-->
        <!--            -->
            
        <script src="plugins/parsley/parsley.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/jquery-steps/jquery-steps.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/bootstrap-inputmask.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/jQuery-slimScroll/jquery.slimscroll.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/layout-app-v2.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/jasmine.js"></script>
            
		 <!--ajax 구글 api-->
		<!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		-->
			
        <script>
		/* 코드 저장을 위한 문자열 전역변수 */
		var codeline = "";
		//////////////////////////////////////
        var num_for = 0;
        var var_start;
        var var_final;
        var for_val;
        var for_start;
        var for_final;
        var for_fin_val;
        var for_fin_start;
        var for_fin_final;
        var print_var;
        var print_end;
        var if_state;
        var elseif_state;
        var while_state;
        var break_state;
        var dict_key_val_01;
        var dict_key_val_02;
        var dict_val_val_01;
        var dict_val_val_02;
        var temp;
        var str_string;
        var dict_var;
        var key_string_01;
        var key_string_02;
        var val_string_01;
        var val_string_02;
        var list_ary = new Array();
        var list_var;
        var stop_param;
        
        
       
        $( function() {
            
            $( ".draggable" ).draggable({
                    stack: ".draggable",
                    revert: "invalid",
                    cursor: "move",
                    helper: "clone",
                    containment: "document",
                
                    start: function(event,ui){
                    var currentId = $(this).attr("id"); // 드래그하는 오브젝트의 id값을 받아옴.
                         
                    /* 드래그를 시작할 때, 각 블럭 안의 빈칸 값들을 변수화 */
                     var_start = $("#var_start").val();
                     var_final = $("#var_final").val(); 
                     for_val = $("#for_value").val();
                     for_start = $("#for_start").val();
                     for_final = $("#for_final").val();
                     for_fin_val = $("#for_final_value").val();
                     for_fin_start = $("#for_final_start").val();
                     for_fin_final = $("#for_final_final").val();
                     print_var = $("#print").val();
                     print_end = $("#print_end").val();
                     if_state = $("#if").val();
                     elseif_state = $("#elif").val();
                     while_state = $("#while").val();
                     dict_var = $("#dict_var").val();
                     dict_key_val_01 = $("#dict_key_value_01").val();
                     dict_key_val_02 = $("#dict_key_value_02").val();
                     dict_val_val_01 = $("#dict_val_value_01").val();
                     dict_val_val_02 = $("#dict_val_value_02").val();
                        
                     
                        /* 각 블록을 드래그 할 때, 드래그 가능 조건 설정 */
                        if(currentId=='state-for'){
                            // 옮길 때 처음 값이 끝값보다 크면 되지 않게끔 설정
                            if(for_final - for_start < 0){
                                alert("세번째 칸의 수는 두번째 칸의 수보다 항상 커야 합니다! 새로 입력하세요");
                                $("#for_start").val('');
                                $("#for_final").val('');
                            }
                            else if((!for_final) || (!for_start)){
                                alert("세번째 칸이나 두번째 칸이 빈칸입니다. 값을 입력해주세요.");
                            }
                            else{};
                            // for블럭(마지막에 오는 for블럭)을 옮기는 경우
                        }else if(currentId=='state-for-final'){
                            // 처음 값과 끝값의 범위, 또는 아무것도 입력하지 않았을 경우에 출력.
                            if(for_fin_final - for_fin_start < 0){
                                alert("세번째 칸의 수는 두번째 칸의 수보다 항상 커야 합니다! 새로 입력하세요");
                                $("#for_final_start").val('');
                                $("#for_final_final").val('');
                            }
                            else if((!for_fin_final) || (!for_fin_start)){
                                alert("세번째 칸이나 두번째 칸이 빈칸입니다. 값을 입력해주세요.");
                            }
                            else{};
                        }else if(currentId=='var_block') {
                            /* var 입력의 ASCII값을 받아내는 변수 */
                            str_string = var_start.charCodeAt(0);
                           
                            /* 변수명만 입력하고 변수의 시작값은 입력하지 않은 경우, 자동으로 초기화*/
                            if((var_start) && (!var_final)){
                                $("#var_final").val('0');
                            }
                            /* 아무것도 입력하지 않고 드래그 하려 할 때 */
                            else if((!var_start) && (!var_final)){
                                alert("첫 번째 칸(변수명) 또는 시작값을 입력해 주세요.");
                                return;
                            }
                            else{};
                            /* 변수명은 오직 영문 소문자, 대문자만 쓸 수 있게 임의 설정 */
                           
                            if(!(((str_string >=65) && (str_string <= 90)) || ((str_string >=97) && (str_string <= 122)))){
                                alert("문자열은 반드시 영문 소문자나 대문자로 시작해야 합니다!!");
                                $("#var_start").val('');
                                $("#var_final").val('');
                               return;
                            }
                            else{};
                        } else if(currentId=='print-block'){
                           alert("※주의※ 문자, 메시지를 출력하기 위해서는 반드시 \"\"를 붙여야 합니다!");
                            if(print_end){
                                print_var = print_var + ", end = " + print_end;
                            }
                        } else if(currentId=='while-block'){
                            if(!while_state){
                                alert("빈칸 처리 시 자동 True로 반환합니다.");
                                $("#while").val('True');
                            }
                        } else if(currentId=='break-block'){
                            
                        } else if(currentId=='dict-block'){
                            /* 입력한 값의 처음 값의 아스키 코드를 보고 문자,숫자 유무를 판단 */
                            key_string_01 = dict_key_val_01.charCodeAt(0);
                            key_string_02 = dict_key_val_02.charCodeAt(0);
                            val_string_01 = dict_val_val_01.charCodeAt(0);
                            val_string_02 = dict_val_val_02.charCodeAt(0);
                          
                            if(!(((key_string_01 >=65) && (key_string_01 <= 90)) || ((key_string_01 >=97) && (key_string_01 <= 122)))){
                                if(!(((key_string_02 >=65) && (key_string_02 <= 90)) || ((key_string_02 >=97) && (key_string_02 <= 122)))){
                                alert("key값은 모두 영문 소문자나 대문자로 시작해야 합니다!!");
                                $("#dict_key_value_01").val('');
                                $("#dict_key_value_02").val('');
                                $("#dict_val_value_01").val('');
                                $("#dict_val_value_02").val('');
                                }
            
                               return;
                            }
                            if(!((val_string_01 >=48) && (val_string_01 <= 57))){
                                /* var값이 문자가 올 경우 '' 처리 */
                                dict_val_val_01 = '\'' + dict_val_val_01 + '\'';
                            }
                                
                            if(!((val_string_02 >=48) && (val_string_02 <= 57))){
                                dict_val_val_02 = '\'' + dict_val_val_02 + '\''; 
                            }
                            
                        } else if(currentId=='list-block'){
                            list_var = $("#list_var").val();
                            list_ary[0] = $("#list_key_01").val();
                            list_ary[1] = $("#list_key_02").val();
                            list_ary[2] = $("#list_key_03").val();
                            list_ary[3] = $("#list_key_04").val();
                            list_ary[4] = $("#list_key_05").val();
                            list_ary[5] = $("#list_key_06").val();
                            stop_param = identify(list_ary);
                        
                            
                        }else{};
                    }
                    
            });
            
            function identify(ary){
                for(var j=0; j<6; j++){
                    var str_int = ary[j].charCodeAt(0);
                    /* 문자라면 ''를 취함 */
                    if(!((str_int >=48) && (str_int <= 57))){
                        ary[j] = '\"' + ary[j] + '\"';
                    }
                    /* 빈 경우에 빈곳까지의 인덱스를 반환 */
                    if(ary[j] == '\"\"'){
                        return j;
                    }
                    
                }
                if(!ary[0]){
                        alert("최소 한개의 값은 입력하거나 순서대로 입력해야 합니다!");
                        $("#list_key_01").val('');
                        $("#list_key_02").val('');
                        $("#list_key_03").val('');
                        $("#list_key_04").val('');
                        $("#list_key_05").val('');
                        $("#list_key_06").val('');
                    }
                
                return j;
            }

            $("#droppable_item").droppable({
                accept: ".draggable",
                drop:function(event,ui){
                    var $canvas = $(this);
                    var currentId = ui.draggable.prop('id');
                    var input = '';
                    var nbsp = '';
                    var else_nbsp = '';
                    
                    /* 드랍 하였을 때 변숫값 설정 */
                    var_start = $("#var_start").val();
                    var_final = $("#var_final").val();
                    for_val = $("#for_value").val();
                    for_start = $("#for_start").val();
                    for_final = $("#for_final").val();
                    for_fin_val = $("#for_final_value").val();
                    for_fin_start = $("#for_final_start").val();
                    for_fin_final = $("#for_final_final").val();
                    if_state = $("#if").val();
                    elseif_state = $("#elif").val();
                    while_state = $("#while").val();
                    dict_var = $("#dict_var").val();
                  
                    if(!ui.draggable.hasClass('canvas-element')){
                        /* clone한 블록의 element값을 변수에 할당 */
                        var $canvasElement = ui.draggable.clone();
                        /* 현재 드롭한 블록이 for문 블록인 경우, clone한 블록의 id값을 clone-for0부터 새로 네이밍을 함 */
                        /* 이걸 해 줘야 clone한 id랑 구분이 되어, 계속 드롭해도 code의 복사가 생기지 않는다.*/
                        if(currentId=='state-for'){
                            var cloneId = $canvasElement.prop('id', 'clone-for'+ (num_for));
                        }
                        else if(currentId=='state-for-final'){
                            var $cloneId = $canvasElement.prop('id', 'clone-for-final'+ (num_for));
                        }
                        else if(currentId=='var_block'){
                            /*alert("current ID :"+ $(ui.draggable).prop('id'));*/
                            $canvasElement.prop('id', 'clone-var'+ (num_for));
                        }
                        else if(currentId=='print-block'){
                            $canvasElement.prop('id', 'clone-print' + (num_for));
                        }
                        else if(currentId=='if-block'){
                            $canvasElement.prop('id', 'clone-if' + (num_for));
                        }
                        else if(currentId == 'else-block'){
                            $canvasElement.prop('id', 'clone-else' + (num_for));
                        }
                        else if(currentId == 'elif-block'){
                            $canvasElement.prop('id', 'clone-else' + (num_for));
                        }
                        else if(currentId == 'while-block'){
                            $canvasElement.prop('id', 'clone-while' + (num_for));    
                        }else if(currentId == 'break-block') {
                            $canvasElement.prop('id', 'clone-break' + (num_for));
                        } else if(currentId == 'dict-block'){
                            $canvasElement.prop('id', 'clone-dict' + (num_for));
                        }
                        else if(currentId == 'back_block'){
                            $canvasElement.prop('id', 'clone-back' + (num_for));
                        }else if(currentId=='continue-block'){
                            $canvasElement.prop('id', 'clone-continue' + (num_for));
                        } else if(currentId=='list-block'){
                            $canvasElement.prop('id', 'clone-list' + (num_for));
                        }
                        else {};
                        
                        //클론 id를 만들어 클릭 이벤트 구분하기
                        
                        /* 만약 이 clone-block의 id중 clone-for로 시작되는게 있다면 변수에 할당 */
                        var clone_for = $('#droppable_item').find("[id^=clone-for0]");
                        var clone_for_final = $('#droppable_item').find("[id^=clone-for-final0]");
                        $canvasElement.addClass('canvas-element');
                        $canvasElement.draggable({
                            /* clone한 객체도 다시 draggable 할 수 있게 하는 기능 */
                            containment:'#droppable_item'
                        });

                        /* 드래그 앤 드롭을 하였을 때, 마우스에 놓은 자리에 떨어질 수 있게 설정 */
                        $canvas.append($canvasElement);
                        $canvasElement.css({
                            revert: "invalid",
                            left: (ui.position.left)-415.2,
                            top: (ui.position.top),
                            position: 'absolute'
                        });
                    }
                    /* 파이썬을 위해 Indentation을 임의 지정, if,for문이 오는 경우 num_for의 값을 증가시켜, 그만큼 Indent 시킴 */
                    for(var k=0; k<num_for; k++){
                        nbsp = nbsp + '&nbsp;&nbsp;&nbsp;';
                    }
                    
                    /* for문, if문이 드롭 되는 경우, num_for값 증가*/
                    /* 단 if와 else는 짝을 이루어야 하므로, if문 생성시 num_for값 임시저장 */
                    if((currentId=='state-for') || (currentId=='state-for-final') || (currentId=='if-block') || (currentId=='elif-block') || (currentId=='while-block')){
                        if((currentId=='if-block')){
                            temp = num_for;
                        }
                        num_for++;
                    }
                
                    /* for문 블럭인 경우에 최종 코드부분인 input에 값을 표시 */
                    if(currentId=='state-for'){
                        input = "for&nbsp;" + for_val + " in range (" + for_start + "," + for_final +"):";
                            $("#for_value").val('');
                            $("#for_start").val('');
                            $("#for_final").val(''); 
                    }
                    
                    else if(currentId=='state-for-final')
                    {
                        /* 블럭의 처음에 final-for문이 드롭되는 경우 */
                            if(num_for == 0){
                            input = "for&nbsp;" + for_fin_val + " in range (" + for_fin_start + "," + for_fin_final + ")";
                                $("#for_final_value").val('');
                                $("#for_final_start").val('');
                                $("#for_final_final").val('');
                            }
                            else{
                        /* 처음이 아닌 final이 오는 경우. if나 다른 것들이 드롭된 후 for문이 나오는 경우 */
                             input = nbsp + "for&nbsp;" + for_fin_val + " in range (" + for_fin_start + "," + for_fin_final + ")";
                            };
                            $("#for_final_value").val('');
                            $("#for_final_start").val('');
                            $("#for_final_final").val('');
                            
                    }
                    else if(currentId=='print-block'){
                        input = nbsp + "print(" + print_var + ")";
                        $("#print").val('');
                    }
                    else if(currentId=='var_block'){
                            input = nbsp + var_start + " = " + var_final;
                            $("#var_start").val('');
                            $("#var_final").val('');
                        }
                    else if(currentId=='if-block'){
                            input = nbsp + "if (" + if_state + "):";
                            
                    }
                    else if(currentId=='else-block'){
                        /* else인 경우, if문에서 저장해 논 temp값을 읽어서 indent의 값을 따로 저장 */
                        for(var j=0; j<temp; j++){
                            else_nbsp = else_nbsp + '&nbsp;&nbsp;&nbsp;';
                        }
                            input = else_nbsp + "else :";  
                    }
                    else if(currentId=='elif-block'){
                        for(var j=0; j<temp; j++){
                            else_nbsp = else_nbsp + '&nbsp;&nbsp;&nbsp;';
                        }
                            input = else_nbsp + "elif (" + elseif_state + "):";  
                    }
                    else if(currentId=='while-block'){
                        input = nbsp + "while " + while_state + " :";
                        $("#while").val('');
                    }else if(currentId=='break-block'){
                        input = nbsp + "break ";
                    }else if(currentId=='dict-block'){
                        input = nbsp + dict_var + " = { \"" + dict_key_val_01 + "\" : " + dict_val_val_01 + ",\n \"" + dict_key_val_02 + "\" : " + dict_val_val_02 + " }"
                        
                        $("#dict_key_value_01").val('');
                        $("#dict_key_value_02").val('');
                        $("#dict_val_value_01").val('');
                        $("#dict_val_value_02").val('');
                    } else if(currentId=='back_block'){
                        num_for--;
                    }else if(currentId=='continue-block'){
                        input = nbsp + "continue";
                    }else if(currentId=='list-block'){
                        
                        input = nbsp + list_var + " = [ ";
//                        alert("input val is : " + input + "stop_param is :" + stop_param);
                        for(var j=0; j<(stop_param-1); j++){
                            input = input + list_ary[j] + " ,  ";
                        }
                        input = input + list_ary[stop_param-1] + " ] ";
                        $("#list_key_01").val('');
                        $("#list_key_02").val('');
                        $("#list_key_03").val('');
                        $("#list_key_04").val('');
                        $("#list_key_05").val('');
                        $("#list_key_06").val('');
                    }else {};
        
                    /* 이중 for문의 처리부분 */
                    if(num_for > 0){
                        if(currentId=='state-for'){
                            input = nbsp + "for&nbsp;" + for_val + " in range (" + for_start + "," + for_final + "):";
                        }
                    }
  
					/* appscrolldiv 클래스에 어펜드 되는 부분 */
					/* DB저장 아이디어 : 어펜드 하면서 동시에 문자열에 계속해서 strcat 시킨뒤 마지막에 넘겨준다 */
                    if(input.length > 0){
                        $("#appscrolldiv").append("<h4><b>" + input + "</b></h4><p>");
						codeline = codeline.concat(input +"</br>");
                    }
                    else{};
                    var top = $('[id^=clone-for0]').css('top')
                    ,left = $('[id^=clone-for0]').css('left');
                    /*alert("top : " + top + "left is : " + left);*/


                }
                
            });
            
        });
        // 버튼 클릭 시 처리
		$(function(){
            /* JSON 형태의 배열로 클릭 시에 Active한 object와 div의 id값을 연결하기 */
            var array_id = {"demo-lft-tab-01":"Answer01", "demo-lft-tab-02":"Answer02", "demo-lft-tab-03":"Answer03", "demo-lft-tab-04":"Answer04","demo-lft-tab-05":"Answer05","demo-lft-tab-06":"Answer06","demo-lft-tab-07":"Answer07", "demo-lft-tab-08":"Answer08","demo-lft-tab-09":"Answer09","demo-lft-tab-10":"Answer10"};

			$(".Fix").click(function(){
                $.each(array_id,function(key, value){
                  if($('#' + key).hasClass("active")){
//                        alert('key: ' + key + ', value: ' + value);
                        $("."+value).css("display", "block").css("opacity", 0.35);
                    }    
                });

			});
			$(".Origin").click(function(){
				$.each(array_id,function(key, value){
                  if($('#' + key).hasClass("active")){
//                        alert('key: ' + key + ', value: ' + value);
                        $("."+value).css("display", "none");
                    }    
                });

			});
		});

		/* 코드 저장 */
		/*$(function() {
			$(".Save").click(function(){
				alert('코드 저장 시작');
			});
		});
		*/
		
		//$this->session->userdata('email') 세션에 저장된 이메일
		
		/* ajax 저장 코드 전송 */
		/*
		$(document).ready(function() {
			$('#savecode').click(function() {
				alert('ajax 전송 시작');
				if(codeline !='')
				{
					alert('row 구현시작');
					var row (
						var codes = codeline;
						var email = $this->session->userdata('nickname');
						);
					alert('row 구현 완료');
					$.ajax({
						method:"POST",
						data:{row:row},
						url:"<?php echo base_url(); ?>mycode/savecode",
						success:function(data) {
							alert('코드 저장 완료');
							//$('#status').html(data);
						}
					});
				}
			});
		});
		*/
        </script>
    </body>
</html>