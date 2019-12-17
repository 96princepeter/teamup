<?php include("header.php"); ?>

<?php
require('dbcon.php'); 
$course_name=$course_duration=$course_desc="";

$course_name=$_POST['course_name'];
		$course_duration=$_POST['course_duration'];
		$course_desc=$_POST['course_desc'];
if (isset($_POST['submit']))
{
    	

		$sql="insert into courses(course_name,course_duration,course_desc)
		values('$course_name','$course_duration','$course_desc')";
		
		
		if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
		
		
		

}
?>






<script>

function check()
    {
        var cname=document.forms["form"]["course_name"].value;
        var cd_from=document.forms["form"]["course_duration"].value;
        
        var cd_des=document.forms["form"]["course_desc"].value;
		
        if(cname=="")
        {
            alert("Enter the Course");
            document.forms["form"]["course_name"].focus();
				return false;
        }
		if(cd_from=="")
        {
            alert("Fill the Course Duration");
            document.forms["form"]["course_duration"].focus();
				return false;
        }
		
		
	
		
		if(cd_des.length<1)
        {
            alert("Fill the Course description");
            document.forms["form"]["course_desc"].focus();
				return false;
        }	
		
	}

</script>


<style>h1{margin-top:50px}</style>
<body>
<h1 align="center">ENROLL COURSE</h1>
<center>
<div align="center" style="border:3px solid red;width:500px;height:200px;">
<form name="form" style="margin:10px" method="post" onsubmit="return;">

<label for="coursename"> Course Name:</label>
    <input type="text" name="course_name"><br><br>
	
    <label for="courseduration">Course Duration:</label>
    <input type="text" name="course_duration" >
	<br><br>
	
    <label for="coursedescription">Course Description</label>
    <input type="text" name="course_desc">
	<br><br>
	<input type="submit" name="submit" value="Register">
	
  
</form>
 </div> 
 </center>
<?php include("footer.php"); ?>