<?php
chdir(dirname(__FILE__));
require_once '../core/init.php';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
        $db = DB::getInstance();

        date_default_timezone_set('America/Chicago');
        $db->update('articles', Input::get('id'), array('updated' => date('Y-m-d H:i:s')));

		if(Input::get('title')) {
            echo Input::get('title');
            $db->update('articles', Input::get('id'), array('title' => Input::get('title')));
		}
        if(Input::get('body')) {
            echo Input::get('body');
            $db->update('articles', Input::get('id'), array('body' => Input::get('body')));
        }
	}
}

Redirect::to($_SERVER['HTTP_REFERER']);
?>
