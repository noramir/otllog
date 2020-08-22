<?php
	session_start();

	if(!function_exists('hash_equals')) {
    function hash_equals($str1, $str2) {
        if(strlen($str1) != strlen($str2)) {
            return false;
        } else {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
            return !$ret;
        }
    }
}
 
    //Get the token from the query string.
    $queryStrToken = isset($_GET['token']) ? $_GET['token'] : '';
     
    //If the token in the query string matches the token in the user's
    //session, then we can destroy the session and log them out.
        if(hash_equals($_SESSION['user_token'], $queryStrToken)){
        //Token is correct. Destroy the session.
        session_destroy();
        //Redirect them back to the home page or something.
        header('Location:index.php');
        exit;
    }
?>