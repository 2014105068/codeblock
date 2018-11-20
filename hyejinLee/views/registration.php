<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> EasyBlock!|회원가입</title>
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
        <div id="container" class="cls-container">
            <!-- REGISTRATION FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
                    <h4> 환영합니다!</h4>
                    <p class="text-center">EasyBlock에 회원가입하고 다양한 서비스를 만나보세요!</p>
                    <div class="row">
                        <form id="registration" class="form-inline" action="/sign_up/reg" method="post">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div id="demo-error-container"></div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="nickname" class="control-label">닉네임</label>
                                    <input id="nickname" type="text" placeholder="Enter Nickname" class="form-control" name="nickname" />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="email" class="control-label">이메일 주소</label>
                                    <input id="email" type="email" placeholder="Enter Email Address" class="form-control" name="email"/>
									<span id="status" class="status"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="pwd" class="control-label">비밀번호</label>
                                    <input id="pwd" type="password" placeholder="Password" class="form-control lock-input" name="pwd" />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="pwc" class="control-label">비밀번호 확인</label>
                                    <input id="pwc" type="password" placeholder="Retype Password" class="form-control lock-input" name="pwc" onkeyup="checkPass(); return false;"/>
									<span id="confirmMessage" class="confirmMessage"></span>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left pad-btm">
                                    <label for="checkboxtickmark" class="form-checkbox form-icon control-label">
                                    <input id="checkboxtickmark" type="checkbox" name="agree" value="agree" >
                                    내용을 확인하였으며 동의합니다.
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">
                            회원가입
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!-- REGISTRATION FORM -->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
		<script src="plugins/sign_validator/validator.js"></script>
		<!--<script src="plugins/sign_validator/ERC.js"></script> -->
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
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/jasmine.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/pages-register.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  <!--ajax 구글 api-->
		<script>
		
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		
		$(document).ready(function() {
			$('#email').change(function() {
				var email = $('#email').val();
				if(email !='')
				{
					$.ajax({
						method:"POST",
						data:{email:email},
						//data:{'email':$('#email').val()},
						url:"<?php echo base_url(); ?>sign_up/email_check",
						success:function(data) {
							$('#status').html(data);
						}
					});
				}
			});
		});
		</script>
		
		<!-- 비밀번호 확인 스크립트 -->
		
		
    </body>
</html>

