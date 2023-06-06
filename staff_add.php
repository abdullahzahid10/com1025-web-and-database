<!DOCTYPE html>
<html>
<head>
<title>Staff - Add</title>
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
    
    $StaffID = $_POST['StaffID'];
    $Staff_Position = $_POST['Staff_Position'];
    $Staff_Name = $_POST['Staff_Name'];
    $Staff_Contact = $_POST['Staff_Contact'];
    $Staff_EmailAddress= $_POST['Staff_EmailAddress'];
    $Staff_PermNum = $_POST['Staff_PermNum'];
    $Staff_PermPCode = $_POST['Staff_PermPCode'];
    $Staff_Gender = $_POST['Staff_Gender'];
    $Staff_Nationality = $_POST['Staff_Nationality'];
    $Staff_MonthWage = $_POST['Staff_MonthWage'];
    $Staff_ContractedHrs = $_POST['Staff_ContractedHrs'];
    $Staff_CardName = $_POST['Staff_CardName'];
    $Staff_AccountNum = $_POST['Staff_AccountNum'];
    $Staff_ExpDate = $_POST['Staff_ExpDate'];
    $Staff_SortCode = $_POST['Staff_SortCode'];
    $AdditionalComments = $_POST['AdditionalComments'];
    

    
    $connect = mysqli_connect($hostname,$username ,$password ,$databaseName);
    $query = "INSERT INTO `Staff`(`StaffID`, `Staff_Position`, `Staff_Name`, `Staff_Contact`, `Staff_EmailAddress`, `Staff_PermNum`, `Staff_PermPCode`, `Staff_Gender`, `Staff_Nationality`, `Staff_MonthWage`, `Staff_ContractedHrs`, `Staff_CardName`, `Staff_AccountNum`, `Staff_ExpDate`, `Staff_SortCode`, `AdditionalComments`) VALUES ('$StaffID', '$Staff_Position', '$Staff_Name', '$Staff_Contact', '$Staff_EmailAddress', '$Staff_PermNum', '$Staff_PermPCode', '$Staff_Gender', '$Staff_Nationality', '$Staff_MonthWage', '$Staff_ContractedHrs', '$Staff_CardName', '$Staff_AccountNum', '$Staff_ExpDate', '$Staff_SortCode', '$AdditionalComments')";
    
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

    <form action="staff_add.php" method="post">
        <input type="text" name="StaffID" required placeholder="StaffID"><br><br>
        <input type="text" name="Staff_Position" required placeholder="Staff_Position"><br><br>
        <input type="text" name="Staff_Name" required placeholder="Staff_Name"><br><br>
        <input type="text" name="Staff_Contact" required placeholder="Staff_Contact"><br><br>
        <input type="text" name="Staff_EmailAddress" required placeholder="Staff_EmailAddress"><br><br>
        <input type="text" name="Staff_PermNum" required placeholder="Staff_PermNum"><br><br>
        <input type="text" name="Staff_PermPCode" required placeholder="Staff_PermPCode"><br><br>
        <input type="text" name="Staff_Gender" required placeholder="Staff_Gender"><br><br>
        <input type="text" name="Staff_Nationality" required placeholder="Staff_Nationality"><br><br>
        <input type="text" name="Staff_MonthWage" required placeholder="Staff_MonthWage"><br><br>
        <input type="text" name="Staff_ContractedHrs" required placeholder="Staff_ContractedHrs"><br><br>
        <input type="text" name="Staff_CardName" required placeholder="Staff_CardName"><br><br>
        <input type="text" name="Staff_AccountNum" required placeholder="Staff_AccountNum"><br><br>
        <input type="text" name="Staff_ExpDate" required placeholder="Staff_ExpDate"><br><br>
        <input type="text" name="Staff_SortCode" required placeholder="Staff_SortCode"><br><br>
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