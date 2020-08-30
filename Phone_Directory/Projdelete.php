<?php
$link=mysqli_connect("localhost","root","","phone");
if($link==false)
{die("Error:Could not Connect.".mysqli_connect_error());
}
$sql="DELETE FROM book WHERE name='$_POST[name]' ";
if(mysqli_query($link,$sql))
{
echo"Records were deleted Successfully.";
}
else
{
echo"ERROR.Couldn't able to delete".mysqli_error($link);
}
mysqli_close($link);
?>