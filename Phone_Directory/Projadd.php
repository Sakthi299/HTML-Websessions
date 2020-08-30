<?php
$link=mysqli_connect("localhost","root","","phone");
if($link==false)
{die("Error:Could not Connect.".mysqli_connect_error());
}
$sql="INSERT into book(no,name,mob,address,email) 
values ('$_POST[no]','$_POST[name]','$_POST[mob]','$_POST[address]','$_POST[email]')";
if(mysqli_query($link,$sql))
{
echo"Records added in PhoneBook.";
}
else
{
echo"ERROR.Couldn't able to add".mysqli_error($link);
}
mysqli_close($link);
?>