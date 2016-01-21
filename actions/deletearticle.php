<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {

        $db = DB::getInstance();
        $db->delete('articles', array('id', '=', Input::get('id')));

        Redirect::to("/");
        die();
	}
}

Redirect::to($_SERVER['HTTP_REFERER']);
?>
