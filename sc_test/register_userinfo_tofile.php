<?php

$myfile = fopen("userdb.txt", "a") or die("Unable to open file!");

//validate inputs
$user_id = $_POST['txtUserid'];
$password = $_POST['txtPassword'];

$txt = "ID:".$user_id.",PWD:".$password."\n";
//$txt = "ID:".$user_id.",PWD:".$password;

//echo $txt;

fwrite($myfile, $txt);
fclose($myfile);


header("Location: http://localhost/sc_test/index.html");
exit();

$myfile2 = fopen("userdb.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

while(!feof($myfile2)) {
  echo fgets($myfile2) . "<br>";
}
fclose($myfile2);

   
?>

<?php include 'index.html';?>
