<!DOCTYPE html>
<html>
<head>
<title>Student - Add</title>
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
<?php

if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "university";
    
//    $InspectionID = $_POST['InspectionID'];
//    $StaffID = $_POST['StaffID'];
//    $InspectionDate = $_POST['InspectionDate'];
//    $ConditionBefore = $_POST['ConditionBefore'];
//    $ConditionAfter = $_POST['ConditionAfter'];
//    $AdditionalComments = $_POST['AdditionalComments'];
    
    
    $StudentID = $_POST['StudentID'];
    $Stu_Name = $_POST['Stu_Name'];
    $Stu_Course = $_POST['Stu_Course'];
    $Stu_YearGroup = $_POST['Stu_YearGroup'];
    $Stu_Contact = $_POST['Stu_Contact'];
    $Stu_EmailAddress = $_POST['Stu_EmailAddress'];
    $Room_Number = $_POST['Room_Number'];
    $Stu_PermNum = $_POST['Stu_PermNum'];
    $Stu_PermPCode = $_POST['Stu_PermPCode'];
    $Stu_PermCountry = $_POST['Stu_PermCountry'];
    $Stu_Gender = $_POST['Stu_Gender'];
    $Stu_Nationality = $_POST['Stu_Nationality'];
    $Stu_Disabilities = $_POST['Stu_Disabilities'];
    $AdditionalComments = $_POST['AdditionalComments'];

    
    $connect = mysqli_connect($hostname,$username ,$password ,$databaseName);
    $query = "INSERT INTO `Student`(`StudentID`, `Stu_Name`, `Stu_Course`, `Stu_YearGroup`, `Stu_Contact`, `Stu_EmailAddress`, `Room_Number`, `Stu_PermNum`, `Stu_PermPCode`, `Stu_PermCountry`, `Stu_Gender`, `Stu_Nationality`, `Stu_Disabilities`, `AdditionalComments`, `KinID`) VALUES ('$StudentID', '$Stu_Name', '$Stu_Course', '$Stu_YearGroup', '$Stu_Contact', '$Stu_EmailAddress', '$Room_Number', '$Stu_PermNum', '$Stu_PermPCode', '$Stu_PermCountry', '$Stu_Gender', '$Stu_Nationality', '$Stu_Disabilities', '$AdditionalComments', NULL)";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Inserted';
    } else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);

}
?>

    <form action="student_add.php" method="post">
        <input type="text" name="StudentID" required placeholder="StudentID"><br><br>
        <input type="text" name="Stu_Name" required placeholder="Stu_Name"><br><br>
        <input type="text" name="Stu_Course" required placeholder="Stu_Course"><br><br>
        <input type="text" name="Stu_YearGroup" required placeholder="Stu_YearGroup"><br><br>
        <input type="text" name="Stu_Contact" required placeholder="Stu_Contact"><br><br>
        <input type="text" name="Stu_EmailAddress" required placeholder="Stu_EmailAddress"><br><br>
        <input type="text" name="Room_Number" required placeholder="Room_Number"><br><br>
        <input type="text" name="Stu_PermNum" required placeholder="Stu_PermNum"><br><br>
        <input type="text" name="Stu_PermPCode" required placeholder="Stu_PermPCode"><br><br>
        <input type="text" name="Stu_PermCountry" required placeholder="Stu_PermCountry"><br><br>
        <input type="text" name="Stu_Gender" required placeholder="Stu_Gender"><br><br>
        <input type="text" name="Stu_Nationality" required placeholder="Stu_Nationality"><br><br>
        <input type="text" name="Stu_Disabilities" required placeholder="Stu_Disabilities"><br><br>
        <input type="text" name="AdditionalComments" required placeholder="AdditionalComments"><br><br>

        <input type="submit" name="insert" value="Add data to database">

    </form>
<hr>
<div class="footer">
<a href="http://localhost:8888/mainpage.php">Click here to return to the homepage!</a>
<p>This website was created by Abdullah Zahid. (AZ00379)</p>
</div>
</body>
</html>