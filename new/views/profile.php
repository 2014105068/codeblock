<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile | SensationApp - Responsive admin template.</title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="css/style.css?ver=1" rel="stylesheet">

   
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

 
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet">

    <link href="plugins/bootstrap-validation/bootstrapValidator.min.css" rel="stylesheet">
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
    <link href="css/demo/jasmine.css" rel="stylesheet">    


    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
    
</head>

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
                                <span class="brand-text">Easyblock</span>
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
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="img/minipenguin.png" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">젤라또</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw fa-lg"></i> Profile </a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
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

                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> User Profile </h3>
                    <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> User Profile </li>
                        </ol>
                    </div>
                </div>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="row">
                        <div class="col-xs-8">
                           
                            <div class="panel">
                                <div class="panel-heading newh">
                                    <div class="panel-title newt">User Information
                                </div>
                                </div>
                                <div class="panel-body newp">
                                    <table class="table">
                                        <tbody>
                                           <tr>
                                               <td><i class="fa fa-user ph-5"></i></td>
                                               <td>Name</td>
                                               <td>penguin</td>
                                           </tr>
                                            <tr>
                                                <td><i class="fa fa-star ph-5"></i></td>
                                                <td> Password </td>
                                                <td> 1234</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope-o ph-5"></i></td>
                                                <td> Email </td>
                                                <td>penguin@google.com </td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone ph-5"></i></td>
                                                <td> Phone </td>
                                                <td> 010-1234-1234 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                            
                            
                        </div>
                        <!--<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="panel">
                                <div class="panel-body pad-no"> 

                                  
                               </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <!--===================================================-->
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
                                        
                                        <!--<li class="list-divider"></li>-->
                                        <!--Category name-->
                                        <li class="list-header">menu</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="/intro">
                                            <i class="fa fa-th"></i>
                                            <span class="menu-title">
                                            <strong>Intro,tutorial</strong>
                                            </span>
                                            
                                            </a>
                                            <!--Submenu-->
                                           
                                        </li>
                                        <!--Menu list item-->
                                      
                                            
                                            <!--Submenu-->
                                           
                                        <li>
                                           <a href="#">
                                               <i class="fa fa-briefcase"></i>
                                               <span class="menu-title">Block coding</span>
                                               <i class="arrow"></i>
                                            </a>
                                           
                                            <ul class="collapse">
                                               
                                                <li><a href="/c"><i class="fa fa-caret-right"></i> Python coding </a></li>
                                                <li><a href="ui-xeditable.html"><i class="fa fa-caret-right"></i> Arduino coding </a></li>
                                                
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                       
                                            <!--Submenu-->
                                           
                                        
                                        <!--Menu list item-->
                                        <!--<li>
                                            <a href="#">
                                            <i class="fa fa-table"></i>
                                            <span class="menu-title">My code</span>
                                           
                                            </a>
                                            <!--Submenu-->
                                          
                                        
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                        
                                        
                                        <!--Category name-->
                                       
                                        
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                      
                                        <!--Menu list item-->
                                       
                                        <!--Menu list item-->
                                        
                                    </ul>
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
          

            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v1</div>

            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2018 Your Gelato</p>
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


    <script src="js/jquery-2.1.1.min.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script src="plugins/fast-click/fastclick.min.js"></script>


    <script src="js/scripts.js"></script>

    <script src="plugins/switchery/switchery.min.js"></script>

    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>

    <script src="plugins/screenfull/screenfull.js"></script>

    <script src="js/demo/jasmine.js"></script>


</body>
</html>