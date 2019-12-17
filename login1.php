


<script>
    function check()
    {
        var username=document.forms["form"]["username"].value;
        var password=document.forms["form"]["password"].value;
		var usertype=document.forms["form"]["usertype"].value;
		if(username=="")
        {
            alert("user Name not be null");
            document.forms["form"]["username"].focus();
				return false;
        }
		if(password=="" )
		{
			alert("password not be null");
			document.forms["form"]["password"].focus();
			return false;
		}
		if(usertype=="Choice" )
		{
			alert("please select a choice");
			document.forms["form"]["usertype"].focus();
			return false;
		}
        
		
	}
	
	
	</script>
<html>
<head>
<style>
td{padding:10px;}
</style>
<head>
<body>
<center>
<div style="border:2px solid black;width:30%;height:300px">
<form name="form"  method="post" onsubmit="return check()">
<h2>Login to your account</h2>
<table>
     <tr>
    <td>User Name:</td>
    <td><input type="text" name="username" id="username"></td>
	</tr>
	<tr>
	<td>password:</td>
    <td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
	<td>usertype:</td>
	<td>
	    <select name="usertype">
        <option>Choice</option>
	    <option>Parent</option>
	    <option>Student</option>
		<option>Teacherx</option>
		</select>
	</td>
	
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
	
</form>
</div>
</center>
</body>
</html>


<?php

/*
	
			
        
}*/
if(isset($_POST["submit"]))
{
  include('dbcon.php');
  session_start();
  $uname=$_POST['username'];
  $psw=$_POST['password'];
  $sql="select * from users where username='$uname' and password='$psw'";
  
  $result=$conn->query($sql);
  if($result->num_rows>=0)
  {
	 
		$_SESSION["sname"]=$uname;
		if(isset($_SESSION["sname"]))
		{
				header('location:linu.php');
				 
		}			
		else
		{
			echo '<script type="text/javascript"> alert("User Password Invalid"); </script>';
			$con->error;
			$con->close();			
		}
	}
	
  }
?>	
