<?php


session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'us-cdbr-iron-east-05.cleardb.net',
		'username' => 'b5c2e29f0f76b7',
		'port' => '3306',
		'password' => 'dcd41392',
		'db' => 'heroku_534f49e12aaa0f1'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
	)
);

spl_autoload_register( function($class) {
	require_once (ROOT_PATH.'classes/' . $class . '.php');
});

require_once (ROOT_PATH.'functions/sanitize.php');
require_once (ROOT_PATH.'functions/select_all.php');
require_once (ROOT_PATH.'functions/database.php');
// require_once (ROOT_PATH.'functions/PHPMailer/src/PHPMailer.php');
// require_once (ROOT_PATH.'functions/PHPMailer/src/Exception.php');
// require_once (ROOT_PATH.'functions/PHPMailer/src/SMTP.php');

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('user_session', array('hash', '=', $hash));

	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}	