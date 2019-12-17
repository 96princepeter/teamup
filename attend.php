<?php 
include('header.php');
 include('dbcon.php');?>
<!DOCTYPE html>
<head>
	<title>LOGIN</title>
</head>
<body>

<script>

function validate()
{
	var batch=document.forms["create"]["batchid"].value;
	
	if(batch=="")
	{
		alert("enter batch");
		document.forms["create"]["batchid"].focus();
		return false;
	}
	
	var course=document.forms["create"]["courseid"].value;
	if(course=="")
	{
		alert("enter Course");
		document.forms["create"]["courseid"].focus();
		return false;
	}
	var div=document.forms["create"]["divid"].value;
	if(div=="")
	{
		alert("enter division");
		document.forms["create"]["divid"].focus();
		return false;
	}
	
	
	var date=document.forms["create"]["date"].value;
	if(date=="")
	{
		alert("enter Date");
		document.forms["create"]["date"].focus();
		return false;
	}
}
	
</script>

	<center>
		<div style="width:30%;
					height:250px;
					margin:50px;
					border:2px solid red;
					padding:20px">
		<form name="create"
			  action="studdet.php"
			  method="POST" 
			  >

		<h2 style="text-align:center">ATTENDANCE</h2>
		<table style="padding:20px;">
			<tr>
				<td>Batch</td><td><input type="text" name="batchid"></td>
			</tr>
            
		    <tr>
				<td>Course</td><td><input type="text" name="courseid"></td>
		    </tr>
			
			<tr>
				<td>Division</td><td><input type="text" name="divid"></td>
		    </tr>
			
			<tr>
				<td>Date</td><td><input type="Date" name="date"></td>
		    </tr>
			<tr></tr>
			<tr>
				<td></td><td><input  type="submit" name="submit" value="submit"></td>
			</tr>
			
		</table>

		</form>
		</div>
	</center>
</body>
</html>
<?php
include('footer.php');
?>
