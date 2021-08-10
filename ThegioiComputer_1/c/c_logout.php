<?php 
	unset($_SESSION['ss_client']);
	if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
// 	$past = time() - 3600;
// foreach ( $_COOKIE as $key => $value )
// {
//     setcookie( $key, $value, $past, '/' );
// }
// setcookie($username, '', 1, '/');
	header('location:?controller=index');

?>