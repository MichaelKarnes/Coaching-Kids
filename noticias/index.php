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
        <?php if(!Input::exists("get") || !Input::get("id")) Redirect::to("/"); ?>
        <?php $user = new User(); ?>
        <?php if($user->isLoggedIn()) { ?>
        <script src="../nicEdit/nicEdit.js" type="text/javascript"></script>
        <?php } ?>
        <script type="text/javascript" src="index.js"></script>
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
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Coaching</a>
                        </li>
                        <li>
                            <a href="#">Cursos</a>
                        </li>
                        <li>
                            <a href="../tienda">Tienda</a>
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
            <?php
                $db = DB::getInstance();
                $article = $db->get('articles', array('id', '=', Input::get("id")))->first();
                $token = Token::generate();
            ?>
            <div id="main">
                <div id="titlebox" class="box1" style="margin-bottom: 20px;">
                    <div id="nicEditTitle"><?php echo $article->title; ?></div>
                    <span style="position: absolute; bottom: 0px; font-family: 'Arial';">Updated <?php echo date('g:i A', strtotime($article->updated))." CDT, ".date('D F j, Y', strtotime($article->updated)); ?></span>
                    <?php if($user->isLoggedIn()) { ?>
                    <form id="title-btns" class="box-btns" action="../actions/updatearticle.php" method="post">
                        <input type="hidden" name="id" value="<?php echo Input::get("id"); ?>" />
                        <input type="hidden" name="token" value="<?php echo $token; ?>" />
                        <input type="hidden" id="title-text" name="title" value="" />
                        <input type="button" class="nicEdit-editbtn" onclick="editTitle();" value="Editar Cuerpo" />
                        <input type="button" class="nicEdit-cancelbtn" onclick="cancelTitle();" value="Cancelar" style="display: none;" />
                        <input type="submit" class="nicEdit-savebtn" value="Guardar" style="display: none;" />
                    </form>
                    <?php } ?>
                </div>
                <div class="box1">
                    <div id="nicEditBody"><?php echo $article->body; ?></div>
                    <?php if($user->isLoggedIn()) { ?>
                    <form id="body-btns" class="box-btns" action="../actions/updatearticle.php" method="post">
                        <input type="hidden" name="id" value="<?php echo Input::get("id"); ?>" />
                        <input type="hidden" name="token" value="<?php echo $token; ?>" />
                        <input type="hidden" id="body-text" name="body" value="" />
                        <input type="button" class="nicEdit-editbtn" onclick="editBody();" value="Editar Cuerpo" />
                        <input type="button" class="nicEdit-cancelbtn" onclick="cancelBody();" value="Cancelar" style="display: none;" />
                        <input type="submit" class="nicEdit-savebtn" value="Guardar" style="display: none;" />
                    </form>
                    <?php } ?>
                </div>
                <br class="clear" />
            </div>
            <div id="footer">
                <div id="footerContent">
                    <?php if($user->isLoggedIn()) { ?>
                    <form action="../actions/deletearticle.php" method="post">
                        <input type="hidden" name="id" value="<?php echo Input::get("id"); ?>" />
                        <input type="hidden" name="token" value="<?php echo $token; ?>" />
                        <input type="submit" value="Eliminar" style="float: right;" />
                    </form>
                    <?php } else { ?>
                    <h3>¡Encuéntrenos!</h3>
                    <p>
                        <a href="#" title="Facebook"><img class="left" src="../images/facebook.png" alt="Facebook" /></a>
                        <a href="#" title="LinkedIn"><img class="left" src="../images/linkedin.png" alt="LinkedIn" /></a>
                        <a href="#" title="RSS"><img class="left" src="../images/rss.png" alt="RSS" /></a>
                    </p>
                    <?php } ?>
                </div>
                <br class="clear" />
            </div>
        </div>
        <div id="copyright">
				&copy; Coaching Kids | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>
        </div>
    </body>
</html>
