<div id="main">
    <div id="banner">
        <img src="images/banner.jpg" alt="banner" />
        <?php if($user->isLoggedIn()) { ?>
        <form id="changeBanner" action="../actions/upload/image.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="filename" value="banner" />
            <input id="fileSelect" name="file" type="file" style="display: none;"/>
            <button onclick="fileSelect.click()">Cambiar Bandera</button>
        </form>
        <?php } ?>
    </div>
    <div id="content">
        <div class="box1">
            <h2>¡Bienvenido!</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ultrices erat, et finibus nunc aliquam eu.
                Nam id imperdiet elit. Curabitur eget viverra sem. Nulla maximus elit enim. Vestibulum ullamcorper tortor mi, et
                molestie diam eleifend eget. Nulla imperdiet ligula non nisl blandit, ultrices euismod mauris lacinia. Cras vitae.
			</p>
        </div>
        <div class="box2">
            <h3>
                Noticias Recientes
            </h3>
            <ul class="newsList">
                <?php
                $db = DB::getInstance();
                $query = $db->query('SELECT * FROM articles ORDER BY updated DESC LIMIT 9');
                $articles = $query->results();
                foreach($articles as $article) { ?>
                <li class="<?php if($article == $query->first()) echo 'first'; if($article == $query->last()) echo ' last'; ?>">
                    <a href="noticias/index.php?id=<?php echo $article->id; ?>"><?php echo strip_tags($article->title); ?></a>
                </li>
                <?php } ?>
            </ul>
            <?php if($user->isLoggedIn()) { ?>
            <a href="noticias/crear/"><button style="position: absolute; bottom: 0; left: 0; padding: 3px 5px;">Crear Noticia</button></a>
            <?php } ?>
        </div>
        <div class="box3">
            <h3>
                Noticias Recientes
            </h3>
            <img class="left" src="http://dummyimage.com/454x200/eee/000" alt="1jan2015" />
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis ultrices erat, et finibus nunc aliquam eu.
                Nam id imperdiet elit. Curabitur eget viverra sem. Nulla maximus elit enim. Vestibulum ullamcorper tortor mi, et
                molestie diam eleifend eget. Nulla imperdiet ligula non nisl blandit, ultrices euismod mauris lacinia. Cras vitae.
            </p>
        </div>
        <br class="clear" />
    </div>
    <br class="clear" />
</div>
