//TWATC iOS及網站工程師：頭號 版權所有
//MIT 開源授權
<?php header("Content-Type:application/json; charset=utf-8"); ?>
<?php
    $hostname_icecast = "localhost"; //數據庫連接位置
    $database_icecast = "icecast"; //數據庫名稱
    $username_icecast = "icecast"; //數據庫登錄用戶名
    $password_icecast = "icecast"; //數據庫用戶密碼
    $icecast = mysql_pconnect($hostname_icecast, $username_icecast, $password_icecast) or trigger_error(mysql_error(),E_USER_ERROR);
    mysql_select_db($database_icecast, $icecast);
    
	$radio = $_GET["radio"];

    $id=$_SERVER["QUERY_STRING"];
    $url="http://icecast:8000"; //your icecast url
    $info=file_get_contents($url);
    if (preg_match("/" .$radio. "/i",$info)) {
        echo "Online";
    }
    else {
        echo "Offline";

    }
    ?>