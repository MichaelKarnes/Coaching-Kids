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
    </head>
    <body>
        <div id="outer">
            <div id="header">
                <div id="logo">
                    <a href="/">
                        <img src="../images/logo.png" alt="Coaching Kids logo" />
                    </a>
                </div>
                <div id="nav">
                    <ul>
                        <li class="first">
                            <a href="../">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Coaching</a>
                        </li>
                        <li>
                            <a href="#">Cursos</a>
                        </li>
                        <li class="active">
                            <a href="">Tienda</a>
                        </li>
                        <li>
                            <a href="#">Acerca</a>
                        </li>
                        <?php if($user->isLoggedIn()) { ?>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                        <li class="last">
                            <a href="../actions/logout.php">Cerrar Sesión</a>
                        </li>
                        <?php } else { ?>
                        <li class="last">
                            <a href="#">Contacto</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <br class="clear" />
                </div>
            </div>
            <div id="main">
                <div id="content">
                    <h2>Tienda</h2>
                    <div style="position: relative; width: 100%; height: 178px;">
                        <img class="left" src="http://dummyimage.com/300x150/eee/000" alt="1jan2015" />
                        <p>
				            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ultrices erat, et finibus nunc aliquam eu.
                            Nam id imperdiet elit. Curabitur eget viverra sem. Nulla maximus elit enim. Vestibulum ullamcorper tortor mi, et
                            molestie diam eleifend eget.
			            </p>
                        <div style="position: absolute; bottom: 0; padding-left: 320px; width: 100%; box-sizing: border-box;">$120.00 | <button>Add to Cart</button> | <button>Details</button></div>
                    </div>
                    <br class="clear" />
                </div>
                <br class="clear" />
            </div>
            <div id="footer">
                <div id="footerContent">
                    <h3>¡Encuéntrenos!</h3>
                    <p>
                        <a href="#" title="Facebook"><img class="left" src="../images/facebook.png" alt="Facebook" /></a>
                        <a href="#" title="LinkedIn"><img class="left" src="../images/linkedin.png" alt="LinkedIn" /></a>
                        <a href="#" title="RSS"><img class="left" src="../images/rss.png" alt="RSS" /></a>
                    </p>
                </div>
                <br class="clear" />
            </div>
        </div>
        <div id="copyright">
				&copy; Coaching Kids | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>
        </div>
        <?php
        $error = Session::flash("error");
        if(!empty($error)) { ?>
        <script type="text/javascript">alert('<?php echo $error; ?>');</script>
        <?php } ?>
    </body>
</html>
