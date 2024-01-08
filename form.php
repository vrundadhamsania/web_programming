
Conversation opened. 1 read message.

Skip to content
Using Gmail with screen readers
4 of 147
form
Inbox

Prinsi Patel <prinsipatel1212@gmail.com>
Attachments
Thu, 4 Jan, 18:10 (2 days ago)
to me


 2 attachments
  • Scanned by Gmail
<html>
<head>
<style>
input
{
	border-style:solid;
	border-color:brown;
}
.tex
{
	border:2px solid brown;
}	
</style>	
	
<title></title>
<h1 align="center">Registation Form </h1>
<form action="catch.php" method="get">
<table cellspacing="10" align="center"  bgcolor="#f3d7ce">
<tr>
<td><label>Username:</td></label>
<td><input type="text" name="fnm">
</tr>
<tr>
<td><label>Password</td></label>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td><label>Name:</td></label>
<td><input type="text" name="nm"></td>
</tr>
<tr>
<td><label>Address:</td></label>
<td><input type="text" name="add"></td>
</tr>
<tr>
<td><label>Country:</td></label>
<td><select name="conty">
<option>(Please select a country)</option>
<option>India</option>
<option>U.k</option>
<option>Rusia</option>
</td>
</select>
</tr>
<tr>
<td><label>Zip code:</td></label>
<td><input type="code" name="cd"></td>
</tr>
<tr>
<td></label>Email:</td></label>
<td><input type="email" name="eml"></td>
</tr>
<tr>
<td><label>Sex:</td></label>
<td><input type="radio" name="sex" id="male" checked><label class="tex">Male</label>
    <input type="radio" name="sex" id="female"><label class="tex">Female</label>
</td>
</tr>
<tr>
<td><label>Language:</td></label>
<td><input type="checkbox" name="eng" checked><label class="tex">English</label>
    <input type="checkbox" name="noeng" ><label class="tex">Non English</label></td>
</tr>
<tr>
<td><label>About</td></label>
<td><textarea rows="10" cols="30" name="ab" ></textarea></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="submit" align="center"></td>	
</tr>	


</table>
</form>
</head>
</html>



<?php
?>
detail.php
Displaying detail.php.