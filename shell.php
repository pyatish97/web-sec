<!DOCTYPE HTML>
<head><title></title>
</head>
<body>

<?php


$ip=$_POST["ip"];
$port=$_POST["port"];
$report=$_POST["report"];

$tmp = "perl nikto.pl -h ".$ip." -p ".$port." -F htm -output".$report;
exec('$tmp');
/*sleep(360);
header('Location: http://localhost/project'.$report);
*/
?>
</body>
</html>
