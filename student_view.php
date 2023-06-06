<!DOCTYPE html>
<html>
<head>
<title>Student - View</title>
<style>
.header {
padding: 30px;
text-align: center;
background: blue;
color: white;
font-size: 15px;
}
.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: orange;
color: white;
text-align: center;
}
.dropbtn {
background-color: #4CAF50;
color: white;
font-size: 16px;
border: none;
height: 60px;
width: 153px;
}
.dropdown {
position: relative;
display: inline-block;
}
.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
table{
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
}
}
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<div class="header">
<article>
<header>
<h1>Surrey University Accomodation Portal</h1>
</header>
</article>
</div>  
<div class="dropdown">
<button class="dropbtn">STAFF</button>
<div class="dropdown-content">
<a href="http://localhost:8888/staff_view.php/">View Database</a>
<a href="http://localhost:8888/staff_add.php/">Add an entry</a>
<a href="http://localhost:8888/staff_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">ROOMS</button>
<div class="dropdown-content">
<a href="http://localhost:8888/rooms_view.php/">View Database</a>
<a href="http://localhost:8888/rooms_add.php/">Add an entry</a>
<a href="http://localhost:8888/rooms_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">HALLS</button>
<div class="dropdown-content">
<a href="http://localhost:8888/halls_view.php/">View Database</a>
<a href="http://localhost:8888/halls_add.php/">Add an entry</a>
<a href="http://localhost:8888/halls_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">FLATS</button>
<div class="dropdown-content">
<a href="http://localhost:8888/flats_view.php/">View Database</a>
<a href="http://localhost:8888/flats_add.php/">Add an entry</a>
<a href="http://localhost:8888/flats_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">COURSE</button>
<div class="dropdown-content">
<a href="http://localhost:8888/course_view.php/">View Database</a>
<a href="http://localhost:8888/course_add.php/">Add an entry</a>
<a href="http://localhost:8888/course_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">PAYMENT</button>
<div class="dropdown-content">
<a href="http://localhost:8888/payment_view.php/">View Database</a>
<a href="http://localhost:8888/payment_add.php/">Add an entry</a>
<a href="http://localhost:8888/payment_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">NEXT OF KIN</button>
<div class="dropdown-content">
<a href="http://localhost:8888/nextofkin_view.php/">View Database</a>
<a href="http://localhost:8888/nextofkin_add.php/">Add an entry</a>
<a href="http://localhost:8888/nextofkin_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">STUDENTS</button>
<div class="dropdown-content">
<a href="http://localhost:8888/student_view.php/">View Database</a>
<a href="http://localhost:8888/student_add.php/">Add an entry</a>
<a href="http://localhost:8888/student_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">UG</button>
<div class="dropdown-content">
<a href="http://localhost:8888/undergraduate_view.php/">View Database</a>
<a href="http://localhost:8888/undergraduate_add.php/">Add an entry</a>
<a href="http://localhost:8888/undergraduate_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">PG</button>
<div class="dropdown-content">
<a href="http://localhost:8888/postgraduate_view.php/">View Database</a>
<a href="http://localhost:8888/postgraduate_add.php/">Add an entry</a>
<a href="http://localhost:8888/postgraduate_remove.php/">Remove an entry</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">INSPECTION</button>
<div class="dropdown-content">
<a href="http://localhost:8888/hallinspection_view.php/">View Database</a>
<a href="http://localhost:8888/hallinspection_add.php/">Add an entry</a>
<a href="http://localhost:8888/hallinspection_remove.php/">Remove an entry</a>
</div>
</div>
<hr>
<table>
<tr>
<th>StudentId</th>
<th>Name</th>
<th>Course</th>
<th>Year</th>
<th>Phone</th>
<th>Email</th>
<th>Room Number</th>
<th>House Number</th>
<th>Post Code</th>
<th>Country</th>
<th>Gender</th>
<th>Nationality</th>
<th>Disabilities</th>
<th>Additional Comment</th>
<th>Kin Id</th>


    
    
    
</tr>  
<?php
$conn = mysqli_connect("localhost", "root", "root", "University");
if ($conn-> connect_error){
    die("Connection failed:". $conn-> connect_error);
}
    
$sql = "SELECT StudentID, Stu_Name, Stu_Course, Stu_YearGroup, Stu_Contact, Stu_EmailAddress, Room_Number, Stu_PermNum, Stu_PermPCode, Stu_PermCountry, Stu_Gender, Stu_Nationality, Stu_Disabilities, AdditionalComments, KinID from Student";
$result = $conn-> query($sql);
    
if ($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". 
            $row["StudentID"] . "</td><td>". 
            $row["Stu_Name"] . "</td><td>". 
            $row["Stu_Course"] . "</td><td>". 
            $row["Stu_YearGroup"] . "</td><td>". 
            $row["Stu_Contact"] . "</td><td>". 
            $row["Stu_EmailAddress"] . "</td><td>". 
            $row["Room_Number"] . "</td><td>". 
            $row["Stu_PermNum"] . "</td><td>". 
            $row["Stu_PermPCode"] . "</td><td>". 
            $row["Stu_PermCountry"] . "</td><td>". 
            $row["Stu_Gender"] . "</td><td>". 
            $row["Stu_Nationality"] . "</td><td>". 
            $row["Stu_Disabilities"] . "</td><td>". 
            $row["AdditionalComments"] . "</td><td>". 
            $row["KinID"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 result";
}
    
$conn-> close();    
?>
</table>
<hr>
<div class="footer">
<a href="http://localhost:8888/mainpage.php">Click here to return to the homepage!</a>
<p>This website was created by Abdullah Zahid. (AZ00379)</p>
</div>
</body>
</html>