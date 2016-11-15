<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body class="signin">﻿   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>ailige - 登录</title>
    <link href="./ailige - 登录_files/bootstrap.min.css" rel="stylesheet">
    <link href="./ailige - 登录_files/font-awesome.min.css" rel="stylesheet">
    <link href="./ailige - 登录_files/animate.min.css" rel="stylesheet">
    <link href="./ailige - 登录_files/style.min.css" rel="stylesheet">
    <link href="./ailige - 登录_files/login.min.css" rel="stylesheet">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script type="text/javascript" src="./ailige - 登录_files/jquery-1.7.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$("#login").click(function(){
			
			var action = $("#lg-form").attr('action');
			var form_data = {
				username: $("#username").val(),
				password: $("#password").val(),
				is_ajax: 1
			};
			
			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
				success: function(response)
				{
					if(response == "success")
						$("#slsamg").slideUp('slow', function(){
							$("#message").html('<p class="success">小媳妇登入成功!</p><p id="ppp">2</p><p >秒后跳转到后台....</p>');
							setInterval("timeout()",1000);
							window.setTimeout(function(){ 
								  location.href="/sglb.php/Index/index.html";    
							  }, 2000);  
						});
					else
						$("#message").html('<p class="error">ERROR: 用户名或密码错误.</p>');
				}	
			});
			return false;
		});
	});
	function timeout(){
	var a =	$("#ppp").text();
	var a =a-1;
	$("#ppp").text(a);
	}
	</script>
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <h1>[ ailige ]</h1>
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong>登入李哥后台</strong></h4>
                </div>
            </div>
            <div class="col-sm-5">
                <form id="lg-form" method="post" action="http://munierdb.com/sglb.php/Index/login.html">
                	<div id="slsamg">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录到ligeaini后台</p>
                    <input type="text" class="form-control uname" name="username" id="username" placeholder="用户名">
                    <input type="password" class="form-control pword m-b" name="password" id="password" placeholder="密码">
                    <a href="http://munierdb.com/sglb.php/index/login.html">忘记密码了？</a>
                    <button type="submit" id="login" class="btn btn-success btn-block">登录</button>
                	</div>
                	<div id="message"></div>
                </form>
            </div>
        </div>
    </div>
</body></html>