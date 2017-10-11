<?php
session_start();

$user_id = $_SESSION["users"];


$msg1 = "No Session Value. go to index";
$sessionflag = false;
$cookie_value = "no cookie value";

if (strlen($user_id) > 0){
    $msg1 = "There is Session Value(".$user_id.")" ;
    $sessionflag = true;
    
    $cookie_value = $_COOKIE["andycookie"];
}

?>
<html>
    <head>
        <title>Page2</title>
        <style>
            #content{
                width: 450px;
                margin: 0 auto;
                padding: 20px 20px;
                background:white;
                border: 5px solid navy;
            }
        </style>
    </head>

    <body>
       <div id="content">
        <h1> <?php echo $msg1; ?> </h1>
        <h1> <?php echo "cookie value : ".$cookie_value; ?> </h1>
        
        <?php
           if ($sessionflag == false){ 
               echo "<h3><a href='login.html'>goto Login page</a></h3>";
           }else{
               echo "<h3><a href='index.html'>goto index page</a></h3>";
           }
        ?>
           
        </div>

    </body>
</html>