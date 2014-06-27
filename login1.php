<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>20 Dakika Dizisi Kişisel Websitesi</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" href="../themes/base/jquery.ui.all.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
	<style>
	div#users-contain { width: 350px; margin: 20px 0; }
	div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
	div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
	.ui-dialog .ui-state-error { padding: .3em; }
	.validateTips { border: 1px solid transparent; padding: 0.3em; }
	</style>
	<script src="js/jquery-2.0.3.js"></script>
	<script src="js/jquery-2.0.3.min.js"></script>
	<script src="js/modernizr.custom.63321.js"></script>
	<script src="../ui/jquery.ui.core.js"></script>
	<script src="../ui/jquery.ui.widget.js"></script>
	<script src="../ui/jquery.ui.mouse.js"></script>
	<script src="../ui/jquery.ui.button.js"></script>
	<script src="../ui/jquery.ui.draggable.js"></script>
	<script src="../ui/jquery.ui.position.js"></script>
	<script src="../ui/jquery.ui.resizable.js"></script>
	<script src="../ui/jquery.ui.button.js"></script>
	<script src="../ui/jquery.ui.dialog.js"></script>
	<script src="../ui/jquery.ui.effect.js"></script>
	<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
			<header>
			  <h1>Hesabına<strong> Giriş Yap</strong></h1>
			</header>
			<section class="main">
				<form class="form-3" action="index.html">
				    <p class="clearfix">
				        <label for="login">Kullanıcı Adı</label>
				        <input type="text" name="login1" id="login1" placeholder="excalibur" title="Lütfen kullanıcı adınızı giriniz">
				    </p>
				    <p class="clearfix">
				        <label for="password">Şifre</label>
				        <input type="password" name="password1" id="password1" placeholder="isyankar47" title="Lütfen şifrenizi giriniz"> 
				    </p>
				    <p class="clearfix">
				        <input type="checkbox" name="remember" id="remember">
				        <label for="remember">Beni Hatırla</label>
				    </p>
				    <p class="clearfix">
				        <input type="submit" name="submit" value="Giriş Yap">
				    </p>       
				</form>​
				<span></span>
				<script>
				$( "form" ).submit(function( event ) {
  					if ( $( "input:first" ).val() === "excalibur" && $( "input:eq(1)" ).val() === "isyankar47" ) {
    						alert("Başarıyla giriş yaptınız.");
    						return;
  					}
 					else{
  						alert("Lütfen doğru bir kullanıcı adı veya şifre giriniz..");
  						event.preventDefault();
					}
				});
				</script>
			</section>
        </div>
	<footer>
		Copyright &copy; 2013, EndLeSs Bilisim
		<div id="social_media">
               		Follow us &nbsp;&nbsp;
                	<a href="https://twitter.com/PcEngineer48"><img src="images/icons/twitter_16.png" width="16" height="16" alt="Twitter" /></a>
                	<a href="https://www.facebook.com/sedat.c.uygur?ref=tn_tnmn"><img src="images/icons/facebook_16.png" width="16" height="16" alt="Twitter" /></a>
                	<a href="https://plus.google.com/105760255827149276350/posts"><img src="images/social04.png" width="16" height="16" alt="Twitter" /></a>
                	<a href="https://www.rss.com"><img src="images/icons/rss_16.png" width="16" height="16" alt="Twitter" /></a>
        	</div>
	</footer>
    </body>
</html>
