<?php 

include('dbcon.php');

if(isset($_POST['submit']))
{
	
	$batch=$_POST['batchid'];
	$course=$_POST['courseid'];
	$div=$_POST['divid'];
	$date=$_POST['date'];
	
      $sql="SELECT * FROM student WHERE batch_id='$batch' and course_id='$course' and division_id='$div'";
	  $s=$conn->query($sql);
	  
}

?>

<html>

<body>
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

		<h2 style="text-align:center">MARK ATTENDENCE</h2>
		<table style="padding:20px;"> 
   <tr>
        <td>ID</td>
		<td>NAME</td>
		<td>FN</td>
		<td>AN</td>
	</tr>
	
	 <tr>
        <td></td>
		<td></td>
		<td><input type="checkbox" name="fn" value="fn"></td>
		<td><input type="checkbox" name="an" value="an"></td>
	</tr>
	
	
	<tr>
        <td><input type="SUBMIT"></td>
	</tr>
	</table>
</form>
</div>
</center>
</body>
</div>
</center>
</html>

