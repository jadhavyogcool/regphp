<?php


$to="amitgawade1989@gmail.com";
$subject="Urgent opening";
if($_POST['submit'])
{
	$name=$_POST['name'];
	$mesg=$_POST['mesg'];
	
	echo 'hi'.$name.'mesg'.$mesg;
	
	
}
?>

<html>

	<form action='' method='POST'>
	  Name: <input type='text' name='name' maxlength='20' >
	   Message: <textarea name='mesg'> </textarea><p>	
		<input type="submit" name='submit' value='send me'>
</form>
</html>