<?php 
require_once("sessionFunction.php");


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
    <!-- <meta http-equiv="refresh" content="3"> -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    
    
    <!-- <meta http-equiv="refresh" content="3"> -->
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>

<!-- ====================================== -->
<div class="container">
    <h2>Login For[m] </h2>
        <!-- <p><?php echo $result; ?></p> -->
        <div class="row">
                <div class="column column-60 column-offset-20 crud">
                <?php
                    if(true == $_SESSION['loggedin']){
                        echo "Hello admin, Welcome" ; 
                    }
                    else{
                        echo "Hello Stranger, Login Below";
                    }
               
                ?>
                </div>      
        </div> 
 <!-- ============================== -->
        <div class="row">
            <div class="column column-60 column-offset-20 crud">
                <?php
                    if($error){
                        echo "<blockquote>Username and Password didn't match";
                    }            
                ?>
                <?php 
                 if(false == $_SESSION['loggedin']):
                // if password is wrong
                ?>  
                <form method="POST">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button type="submit" class="button-primary" name="submit">Log In</button>                       
      
                </form>
                

                <?php else: ?>
                <!-- ============log Out ---------->
                    <form action="index.php" method="POST" class="#">
                        <input type="hidden" name="logout" value="1" >

                        <button type="submit" class="button-primary" name="submit">Log Out</button>                       
                  </form>

                    <?php endif; ?>
            </div>      
        </div> 







    </div>
</body>
</html>







