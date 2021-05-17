<?php
// ============Hassing algerithom==================
$user = md5("admin");
$pass = md5("123");
sha1("Hello World");
hash('sha512', "Hello World");
hash('sha256', "Hello World");

session_start([
    'cookie_lifetime' => 30, // 60*5=300 ; 5 minutes
]);
$error = false;
//session_destroy();


// ======Login Function===================================
 if(isset($_POST['username']) && isset($_POST['password'])){
     if($user == md5($_POST['username']) && $pass ==md5($_POST['password'])){
         $_SESSION['loggedin'] = true; // logout button show
     }
     else{
        $_SESSION['loggedin'] = false; // if false then stay sameform page
        $error = true;
     }
 }
// =======Logout Function===============
if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false; //if false then stay same form page
    session_destroy();
}








