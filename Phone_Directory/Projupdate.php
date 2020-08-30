<?php
$link=mysqli_connect("localhost","root","","phone");
if($link==false)
{die("Error:Could not Connect.".mysqli_connect_error());
}
$sql="UPDATE book SET mob='$_POST[mob]' ,
address='$_POST[address]' ,email='$_POST[email]' WHERE name='$_POST[name]' ";
if(mysqli_query($link,$sql))
{
echo"Records Updated Successfully.";
}
else
{
echo"ERROR.Couldn't able to update".mysqli_error($link);
}
mysqli_close($link);
?>
