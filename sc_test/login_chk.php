<?php
session_start();



$user_id = $_POST['txtUserid'];
$password = $_POST['txtPassword'];

//echo "Userid : ".$user_id."<br>";
//echo "password : ".$password."<br>";

$input_txt = "ID:".$user_id.",PWD:".$password."\n";
//echo $input_txt."<br>";


//echo "<br>";
//echo "-------------";
//echo "<br>";
//echo "<br>";
//echo "<br>";

$msg1 = "Login Failed!!";
$msg2 = "No Session";
$msg3 = "No Cookies";

$loginflag = false;

$myfile = fopen("userdb.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
  
  //echo fgets($myfile) . "<br>";
    
  $saveddata = fgets($myfile);
  //echo $saveddata.":",$input_txt."<br>";    
 
  if ($saveddata == $input_txt){
      $loginflag = true;
      
      $msg1 = "Dear ".$user_id." Login Success!!";
      $msg2 = "Created Session";
      $msg3 = "Created Cookies";

      $_SESSION["users"] = $user_id;
      setcookie("andycookie",$user_id,time()+60*60*24,'/','localhost');
      //setcookie(md5($cookie_name), base64_encode($value), $server_time + $expire, '/', $cookie_domain);
      break;
  } 
    
}
fclose($myfile);

?>
<html>
    <head>
        <title>Login Result Page</title>
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

        <h3><?php echo $msg2; ?></h3>
        <h3><?php echo $msg3; ?></h3>

        </div>

    </body>
</html>