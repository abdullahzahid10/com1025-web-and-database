<!DOCTYPE html>
<html>
<head>
<title>Hall - View</title>
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
<th>HallID</th>
<th>Hall Name</th>
<th>Telephone</th>
<th>Room Quantity</th>
<th>Flat ID</th>
<th>Floor Level</th>
<th>Kitchen</th>
<th>Bathroom</th>
<th>Room Size</th>
<th>Wifi Access</th>
<th>Price</th>
    
    
    
    
    
</tr>  
<?php
$conn = mysqli_connect("localhost", "root", "root", "University");
if ($conn-> connect_error){
    die("Connection failed:". $conn-> connect_error);
}
    
$sql = "SELECT HallID, Hall_Name, Hall_ContactNo, Hall_RoomQuant, FlatID, FloorLevel, Kitchen, Bathroom, RoomSize, WifiAccess, Price from Halls";
$result = $conn-> query($sql);
    
if ($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["HallID"] . "</td><td>". 
            $row["Hall_Name"] . "</td><td>". 
            $row["Hall_ContactNo"] . "</td><td>". 
            $row["Hall_RoomQuant"] . "</td><td>". 
            $row["FlatID"] . "</td><td>". 
            $row["FloorLevel"] . "</td><td>". 
            $row["Kitchen"] . "</td><td>". 
            $row["Bathroom"] . "</td><td>". 
            $row["RoomSize"] . "</td><td>". 
            $row["WifiAccess"] . "</td><td>". 
            $row["Price"] . "</td></tr>";
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