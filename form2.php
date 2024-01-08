
<?php
$my_username=$_GET['fnm'];
$my_password=$_GET['pwd'];
$my_name=$_GET['nm'];
$my_address=$_GET['add'];
$my_country=$_GET['conty'];
$my_zip_code=$_GET['cd'];
$my_mail=$_GET['eml'];
$my_gen=$_GET['sex'];
$my_language=$_GET['eng'];
$my_about=$_GET['ab'];


echo "<table border=1 bordercolor=brown><tr><td>uername:</td><td>$my_username</td></tr>
<tr><td>password:</td><td>$my_password</td></tr>
<tr><td>Name:</td><td>$my_name</td></tr>
<tr><td>Address:</td><td>$my_address</td></tr>
<tr><td>Country:</td><td>$my_country</td></tr>
<tr><td>zip_code:</td><td>$my_zip_code</td></tr>
<tr><td>Email:</td><td>$my_mail</td></tr>
<tr><td>Gender:</td><td>$my_gen</td></tr>
<tr><td>Language:</td><td>$my_language</td></tr>
<tr><td>About:</td><td>$my_about</td></tr></table>";
?>
