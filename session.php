<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="refresh" content="3"> 
</head>
<body>
<h2>Project Session</h2>
    <h2>
<?php
// ==============================================
/*

session_start();
$_SESSION['name'] = "Hello World";
echo $_SESSION['name'];

session_destroy();
*/
// =========================================

/*
// counter and hit and they incress
// auto incressing data
session_start();
$_SESSION['counter'] = $_SESSION['counter'] ?? 0;
$_SESSION['counter']++ ;
echo $_SESSION['counter'];
*/
// ==================session lifetime==========================
/*
session_name('myapp'); // for acccess others session
session_start([
    'cookie_lifetime' => 30
]);
// $_SESSION['name'] = "Session Life Time 30s.";
echo $_SESSION['name'];
*/
// =========Hassing function for password protected=================================
echo md5("admin");
echo "<br>";
echo md5("123");
echo "<br>";
echo sha1("Hello World");
echo "<br>";
echo hash('sha512', "Hello World");
echo "<br>";
echo hash('sha256', "Hello World");












?>

    </h2>
</body>
</html>
