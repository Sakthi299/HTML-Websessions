<?php
$link=mysqli_connect("localhost","root","","phone");
if($link==false)
{die("Error:Could not Connect.".mysqli_connect_error());
}
$sql="SELECT * from  book WHERE name= '$_POST[name]' ";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0){
echo "Details about " . $_POST['name']. " as follows:";
echo"<table border=3>";
echo"<tr>";
echo"<th>S.No</th>";
echo"<th>Name</th>";
echo"<th>Mobile_No</th>";
echo"<th>Address</th>";
echo"<th>Email_Id</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" .$row['no']. "</td>";
echo "<td>" .$row['name']. "</td>";
echo "<td>" .$row['mob']. "</td>";
echo "<td>" .$row['address']. "</td>";
echo "<td>" .$row['email']. "</td>";
echo "</tr>";
}
echo"</table>";
mysqli_free_result($result);
}
else{ echo"No records match.";}
}
else{
echo "ERROR.Couldn't able to search".mysqli_error($link);
}
mysqli_close($link);
?>