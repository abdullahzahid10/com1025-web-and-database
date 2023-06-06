<!DOCTYPE html>
<html>
<head>
<title>Flat - Add</title>
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
    
    $FlatID = $_POST['FlatID'];
    $Flat_DoorNum = $_POST['Flat_DoorNum'];
    $Flat_PCode = $_POST['Flat_PCode'];
    $Flat_ContactNo = $_POST['Flat_ContactNo'];
    $Flat_Manager = $_POST['Flat_Manager'];
    $WifiName = $_POST['WifiName'];
    $TotalRooms = $_POST['TotalRooms'];
    $AdditionalComments = $_POST['AdditionalComments'];

    
    $connect = mysqli_connect($hostname,$username ,$password ,$databaseName);
    $query = "INSERT INTO `Flat`(`FlatID`, `Flat_DoorNum`, `Flat_PCode`, `Flat_ContactNo`, `Flat_Manager`, `WifiName`, `TotalRooms`, `AdditionalComments`) VALUES ('$FlatID', '$Flat_DoorNum', '$Flat_PCode', '$Flat_ContactNo', '$Flat_Manager', '$WifiName', '$TotalRooms', '$AdditionalComments')";
    
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
    <strong>Please note: As Flat_Manager is a foreign key entry, you will need to enter a foreign key, which is not in use. TO see which foreign keys are in use, just press view flat and it shows which foreign key for staff are used. If you dont put a valid foreign key, data will not be entered. An example of a valid foreign key will be STAFF03</strong>
    <form action="flats_add.php" method="post">
        <input type="text" name="FlatID" required placeholder="FlatID"><br><br>
        <input type="text" name="Flat_DoorNum" required placeholder="Flat_DoorNum"><br><br>
        <input type="text" name="Flat_PCode" required placeholder="Flat_PCode"><br><br>
        <input type="text" name="Flat_ContactNo" required placeholder="Flat_ContactNo"><br><br>
        <input type="text" name="Flat_Manager" required placeholder="Flat_Manager"><br><br>
        <input type="text" name="WifiName" required placeholder="WifiName"><br><br>
        <input type="text" name="TotalRooms" required placeholder="TotalRooms"><br><br>
        <input type="text" name="AdditionalComments" required placeholder="AdditionalComments">
        <input type="submit" name="insert" value="Add data to database">

    </form>

<hr>
<div class="footer">
<a href="http://localhost:8888/mainpage.php">Click here to return to the homepage!</a>
<p>This website was created by Abdullah Zahid. (AZ00379)</p>
</div>
</body>
</html>