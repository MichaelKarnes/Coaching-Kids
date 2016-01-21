<!DOCTYPE html>
<!--

	Design by TEMPLATED
	http://templated.co
	Released for free under the Creative Commons Attribution License

	Name       : Cupcaked Out
	Version    : 1.0
	Released   : 20130222

-->
<html lang="en">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Coaching Kids</title>
        <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="../style.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <?php require_once '../core/init.php'; ?>
        <?php $user = new User(); ?>
        <?php if($user->isLoggedIn()) Redirect::to("/"); ?>
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <div id="outer" style="width: 480px;">
            <div id="header">
                <div id="logo">
                    <a href="\">
                        <img src="/images/logo.png" alt="Coaching Kids logo" />
                    </a>
                </div>
                <div id="nav" style="width: 478px;">
                    <ul style="width: 382px;">
                        <li class="first active">
                            <a>Inicio de sesión de admin</a>
                        </li>
                    </ul>
                    <br class="clear" />
                </div>
            </div>
            <form action="../actions/login.php" onsubmit="return check_empty();" method="post" name="form">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
                <div id="main" style="width: 424px;">
                    <div id="content" style="width: 428px;">
                        <input type="text" name="username" placeholder="Nombre de usario" style="width: 100%;" />
                        <input type="password" name="password" placeholder="Contraseña" style="width: 100%;" />
                        <a href="#" style="float: right;">¿Olvidaste tu contraseña?</a>
                        <br class="clear" />
                    </div>
                    <br class="clear" />
                </div>
                <div id="footer" style="width: 422px;">
                    <div id="footerContent" style="height: 31px; line-height: 31px;">
                        <input type="checkbox" name="remember" /> <label for="remember">Recuérdame</label>
                        <input type="submit" value="Iniciar sesión" style="float: right;" />
                    </div>
                </div>
            </form>
        </div>
        <div id="copyright">
				&copy; Coaching Kids | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>
        </div>
    </body>
</html>
