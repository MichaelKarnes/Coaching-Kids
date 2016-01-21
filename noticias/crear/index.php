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
		<link rel="stylesheet" type="text/css" href="../../style.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <?php require_once '../../core/init.php'; ?>
        <?php $user = new User(); ?>
        <?php if(!$user->isLoggedIn()) Redirect::to($_SERVER['HTTP_REFERER']); ?>
        <script src="../../nicEdit/nicEdit.js" type="text/javascript"></script>
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <div id="outer">
            <div id="header">
                <div id="logo">
                    <a href="/">
                        <img src="../../images/logo.png" alt="Coaching Kids logo" />
                    </a>
                </div>
                <div id="nav">
                    <ul>
                        <li class="first">
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Coaching</a>
                        </li>
                        <li>
                            <a href="#">Cursos</a>
                        </li>
                        <li>
                            <a href="../../tienda">Tienda</a>
                        </li>
                        <li>
                            <a href="#">Acerca</a>
                        </li>
                        <?php if($user->isLoggedIn()) { ?>
                        <li>
                            <a href="#">Contacto</a>
                        </li>
                        <li class="last">
                            <a href="../../actions/logout.php">Cerrar Sesión</a>
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
            <form action="../../actions/createarticle.php" method="post">
                <?php $token = Token::generate(); ?>
                <div id="main">
                    <div id="titlebox" class="box1" style="margin-bottom: 20px;">
                        <div id="nicEditTitle"><h2>Título</h2></div>
                        <div id="title-btns" class="box-btns">
                            <input type="hidden" name="token" value="<?php echo $token; ?>" />
                            <input type="hidden" id="title-text" name="title" value="&lt;h2&gt;Título&lt;/h2&gt;" />
                            <input type="button" class="nicEdit-editbtn" onclick="editTitle();" value="Editar Título" />
                            <input type="button" class="nicEdit-cancelbtn" onclick="cancelTitle();" value="Cancelar" style="display: none;" />
                            <input type="button" class="nicEdit-savebtn" onclick="saveTitle();" value="Guardar" style="display: none;" />
                        </div>
                    </div>
                    <div class="box1">
                        <div id="nicEditBody"><p>Cuerpo</p></div>
                        <div id="body-btns" class="box-btns">
                            <input type="hidden" name="id" value="<?php echo Input::get("id"); ?>" />
                            <input type="hidden" name="token" value="<?php echo $token; ?>" />
                            <input type="hidden" id="body-text" name="body" value="&lt;p&gt;Cuerpo&lt;/p&gt;" />
                            <input type="button" class="nicEdit-editbtn" onclick="editBody();" value="Editar Cuerpo" />
                            <input type="button" class="nicEdit-cancelbtn" onclick="cancelBody();" value="Cancelar" style="display: none;" />
                            <input type="button" class="nicEdit-savebtn" onclick="saveBody();" value="Guardar" style="display: none;" />
                        </div>
                    </div>
                    <br class="clear" />
                </div>
                <div id="footer">
                    <div id="footerContent">
                        <input type="submit" value="Publicar" style="float: right;" />
                    </div>
                    <br class="clear" />
                </div>
            </form>
        </div>
        <div id="copyright">
				&copy; Coaching Kids | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>
        </div>
    </body>
</html>
