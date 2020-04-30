<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="datatables/Datat/css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="datatables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="datatables/Datat/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables/Datat/css/jquery.dataTables.min.css">

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php
    error_reporting(0); //
    include_once("db.php");
    $conn = new mysqli(
        $host,$username,$passwd,$dbname
    );
    //$q = "select * from agency where agency_code or agency_name or agency_contact_name or agency_email '$p'";
    if($_GET['submit']=="search"){
        mysqli_set_charset($conn,"utf8mb4");

        $sql = "select * from agency where agency_name like '".$_GET['search']."%' or agency_code like '".$_GET['search']."%' or agency_contact_name like '".$_GET['search']."%' or agency_email like '".$_GET['search']."%' or agency_telno like '".$_GET['search']."%' or agency_price like '".$_GET['search']."%'" ;
        $result = $conn->query($sql);
        if($conn->errno){
            die("Error " . $conn->error);
        }
        $rs = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        
    }
    
    
?>
<?php

$sqlll="SELECT * FROM agency "; //เลือกทุกอย่างมาแสดง ยังไม่ได้เจาะจง
        $query = $conn->query($sqlll);
?>
</head>
<style>
.sidenav {
  height: 100%;
  width: 18%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #98DFFF;
  overflow-x: hidden;
  padding-top: 1%;
  
}

.sidenav h1{
    color: while;
    margin-left:2%;
    margin-top:-8.5%;
    background-color:#007BFF;
    padding: 14px

}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #000000;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn1 {
  padding: 4px 4px 4px 12px;
  text-decoration: none;
  font-size: 14px;
  color: #000000;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  border: 1px solid black;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.hermes{
    color:#007BFF;
}

/* Add an active class to the active dropdown button */
.active {
  color: white;
}

.head{
  margin-left:18%;
  background-color: #98DFFF;  
  padding-top: 0.5%;
}
.b{
  margin-left:19%;
  margin-right:1%;

}
p.a{
  margin-left:2%;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

body{
   
    
}
    
.button {
  background-color:black; /* Green */
  border: none;
  color:black;
  padding: 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1px;
  width:100px;
  margin: 10px 9px;

  
  
  
  
}
.btn5 {border-radius: 15px;
    padding:2px ;
    font-size: 12px;
    background-color: white; 
    color: #007BFF; 
     border: 1px solid #007BFF;
     float:right;


     
}
.btn6{border-radius: 15px;
    padding:2px ;
    font-size: 12px;
    background-color: white; 
    color: #007BFF; 
     border: 1px solid #007BFF;
     margin: 1px 2px;
     width:50px;
      
}

ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #FFFF;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: ">\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}


a:hover {
  background-color: #ddd;
  color: black;
}
.previous {
  background-color: #007BFF;
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}
.next {
  background-color: #007BFF;
  color: white;
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}

</style>


<body>

<div class="sidenav">

        <h1>HERMES <i class="fas fa-bars"></i> </h1>

  
  <button class="dropdown-btn"> Front Office <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="http://localhost/project/index.php">Reservation</a>
    <a href="#">Check In</a>
    <a href="#">In-House</a>
  </div>
  <button class="dropdown-btn"> Sales & Maketing<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="http://localhost/PJ/">Agency</a>
    <a href="#">Daily report</a>
  </div>
  <button class="dropdown-btn"> House Keeping <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
  </div>
  <button class="dropdown-btn"> Hotel Management <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
  </div>
  <a href="http://localhost/project/UI.php">User</a>
</div>
<div class="head"> 
  <p class="a"><b style="font-size:250%">Agency   </b>add,delete and edit agency information</p> 
</div>

<div class="b">
  <p class="a"> <form >
                  
                        <tr class="bg-white   ">
                            <td > 
                                <div> <ul class="breadcrumb">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Sales & Maketing </a></li>
                                            <li > Agency</li>
                                        </ul> 
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                   
                    
                
                
                   <table id="myTable" class="  table table-striped ">   
                        <tr class="bg-white   ">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><button class="button btn5 mt-2 text-primary "> +Add Agency</button></th>
                        </tr>
                    
                    
                        <tr  class="bg-white  text-dark   ">
                            <td><label for="show">Show : </label>
                                    <select id="show">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    </select>    entries</td>
                            <td></td>   
                            <td></td>
                            <td></td>
                            <td> <input type="text" name="search" id="search">  <input id="btns" type="submit" name="submit" value="search"></td> 
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                    <table id="myTable" border="2" class="  table table-striped ">

                        <tr class="bg-primary text-white  text-center">   
                            <th>&nbsp;</th>
                            <th>Code</th>
                            <th>Agency Name</th>
                            <th>Sales Name</th>         
                            <th>Email</th>
                            <th>#Phone</th>
                            <th>Comlession(%)</th>   
                        </tr>

                        <?php 
                        while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                            {
                        ?>
                        <tr class="bg-white button-center  text-center ">
                            <td><button class="button btn6 " >info</button></td>
                            <td><?php  echo $result['agency_code'] ?></td>
                            <td><?php  echo $result['agency_name'] ?></td>
                            <td><?php  echo $result['agency_contact_name'] ?></td> 
                            <td><?php  echo $result['agency_email'] ?></td>
                            <td><?php  echo $result['agency_telno'] ?></td>
                            <td><?php  echo $result['agency_price'] ?></td>
                        </tr>

                        <?php } ?>

                        
                        <?php 
                        foreach($rs as $ans) {
                        ?>
                        <tr class="bg-white   text-center ">
                            <td><button class="button btn6 " >info</button></td>
                            <td><?php  echo $ans['agency_code'] ?></td>
                            <td><?php  echo $ans['agency_name'] ?></td>
                            <td><?php  echo $ans['agency_contact_name'] ?></td> 
                            <td><?php  echo $ans['agency_email'] ?></td>
                            <td><?php  echo $ans['agency_telno'] ?></td>
                            <td><?php  echo $ans['agency_price'] ?></td>
                        </tr>
                        

                    
                    
                        <?php } ?>

                    
                    </table>  

                    <table id="myTable" class="  table table-striped ">
                        <tr class="bg-white   ">
                            <td><h6> Showing 1 to 1 of 1 entries</h6></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="bg-white   ">
                            <th></th>
                            <th></th>
                            <th><a href="#" class="previous">Previous</a>
                            <a>1</a>
                            <a href="#" class="next">Next</a></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </table>


    </p>
  

</div>


           
    
    
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
    });
  }
</script>

     
         


    



  
    
</body>
</html>