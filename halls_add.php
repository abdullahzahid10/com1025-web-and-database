<!DOCTYPE html>
<html>
<head>
<title>Hall - Add</title>
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
    
    $HallID = $_POST['HallID'];
    $Hall_Name = $_POST['Hall_Name'];
    $Hall_ContactNo = $_POST['Hall_ContactNo'];
    $Hall_RoomQuant = $_POST['Hall_RoomQuant'];
    $FlatID = $_POST['FlatID'];
    $FloorLevel = $_POST['FloorLevel'];
    $Kitchen = $_POST['Kitchen'];
    $Bathroom = $_POST['Bathroom'];
    $RoomSize = $_POST['RoomSize'];
    $WifiAccess = $_POST['WifiAccess'];
    $Price = $_POST['Price'];
    
    $connect = mysqli_connect($hostname,$username ,$password ,$databaseName);
    $query = "INSERT INTO `Halls`(`HallID`, `Hall_Name`, `Hall_ContactNo`, `Hall_RoomQuant`, `FlatID`, `FloorLevel`, `Kitchen`, `Bathroom`, `RoomSize`, `WifiAccess`, `Price`) VALUES ('$HallID', '$Hall_Name', '$Hall_ContactNo', '$Hall_RoomQuant', '$FlatID', '$FloorLevel', '$Kitchen', '$Bathroom', '$RoomSize', '$WifiAccess', '$Price')";
    
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
<strong>For Flat ID, as it is a foreign key you will need to enter either Flat001 or FLAT002, otherwise, your request will not be accepted. THE SUBMIT BUTTONS IS THERE YOU JUST NEED TO SCROLL DOWN</strong>
    <form action="halls_add.php" method="post">
        <input type="text" name="HallID" required placeholder="HallID"><br><br>
        <input type="text" name="Hall_Name" required placeholder="Hall_Name"><br><br>
        <input type="text" name="Hall_ContactNo" required placeholder="Hall_ContactNo"><br><br>
        <input type="text" name="Hall_RoomQuant" required placeholder="Hall_RoomQuant"><br><br>
        <input type="text" name="FlatID" required placeholder="FlatID"><br><br>
        <input type="text" name="FloorLevel" required placeholder="FloorLevel"><br><br>
        <input type="text" name="Kitchen" required placeholder="Kitchen"><br><br>
        <input type="text" name="Bathroom" required placeholder="Bathroom"><br><br>
        <input type="text" name="RoomSize" required placeholder="RoomSize"><br><br>
        <input type="text" name="WifiAccess" required placeholder="WifiAccess"><br><br>
        <input type="text" name="Price" required placeholder="Price"><br><br>
        <input type="submit" name="insert" value="Add data to database">

    </form>
<hr>
<div class="footer">
<a href="http://localhost:8888/mainpage.php">Click here to return to the homepage!</a>
<p>This website was created by Abdullah Zahid. (AZ00379)</p>
</div>
</body>
</html>