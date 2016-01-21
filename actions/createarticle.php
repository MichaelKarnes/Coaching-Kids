<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
        $db = DB::getInstance();

        date_default_timezone_set('America/Chicago');
        $db->insert('articles', array(
            'title' => Input::get('title'),
            'body'  => Input::get('body'),
            'updated' => date('Y-m-d H:i:s')
        ));
        Redirect::to("/");
        die();
	}
}

Redirect::to($_SERVER['HTTP_REFERER']);
?>
