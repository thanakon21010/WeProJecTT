<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="cus.css">
    <link rel="stylesheet" type="text/css" href="datatables/Datat/css/bootstrap.min.css">
    <script type="text/javascript" language="javascript" src="datatables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="datatables/Datat/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="datatables/Datat/css/jquery.dataTables.min.css">
    <script src="js/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
</script>
<script>

</script>
<?php
error_reporting(0); //
include_once("db.php");
$conn = new mysqli(
    $host,
    $username,
    $passwd,
    $dbname
);
//$q = "select * from agency where agency_code or agency_name or agency_contact_name or agency_email '$p'";
if ($_GET['submit'] == "search") {
    mysqli_set_charset($conn, "utf8mb4");

    $sql = "select * from agency where agency_name like '" . $_GET['search'] . "%' or agency_code like '" . $_GET['search'] . "%' or agency_contact_name like '" . $_GET['search'] . "%' or agency_email like '" . $_GET['search'] . "%' or agency_telno like '" . $_GET['search'] . "%' or agency_price like '" . $_GET['search'] . "%'";
    $result = $conn->query($sql);
    if ($conn->errno) {
        die("Error " . $conn->error);
    }
    $rs = $result->fetch_all(MYSQLI_ASSOC);
    $conn->close();
}


?>
<?php

$sqlll = "SELECT * FROM agency "; //เลือกทุกอย่างมาแสดง ยังไม่ได้เจาะจง
$query = $conn->query($sqlll);
?>
</head>
<script>

$(document).ready(function() {
    $('#myTable').dataTable( {
        "lengthMenu": [[1, 2, 4, -1], [1, 2, 4, "All"]]
    } );
} );
    /*$(document).ready(function() {
        $('#myTable').DataTable();
    });
    */
</script>
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
    <a href="http://localhost/PJ2/">Agency</a>
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
                        <tr class="bg-white   ">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><button class="button btn5 mt-2 text-dark "> +Add Agency</button></th>
                        </tr>


                <table border="1" id="myTable" class=" table table-striped " width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]">
                        <thead>
                        <tr class="bg-dark text-white  text-center">  
                            <th>&nbsp;</th>
                            <th>Code</th>
                            <th>Agency Name</th>
                            <th>Sales Name</th>
                            <th>Email</th>
                            <th>#Phone</th>
                            <th>Comlession(%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        ?>
                            <tr class="bg-white button-center  text-center ">
                                <td><button class="button btn6 ">info</button></td>
                                <td><?php echo $result['agency_code'] ?></td>
                                <td><?php echo $result['agency_name'] ?></td>
                                <td><?php echo $result['agency_contact_name'] ?></td>
                                <td><?php echo $result['agency_email'] ?></td>
                                <td><?php echo $result['agency_telno'] ?></td>
                                <td><?php echo $result['agency_price'] ?></td>
                            </tr>

                        <?php } ?>


                        <?php
                        foreach ($rs as $ans) {
                        ?>
                            <tr class="bg-white   text-center ">
                                <td><button class="button btn6 ">info</button></td>
                                <td><?php echo $ans['agency_code'] ?></td>
                                <td><?php echo $ans['agency_name'] ?></td>
                                <td><?php echo $ans['agency_contact_name'] ?></td>
                                <td><?php echo $ans['agency_email'] ?></td>
                                <td><?php echo $ans['agency_telno'] ?></td>
                                <td><?php echo $ans['agency_price'] ?></td>
                            </tr>




                            <?php } ?>

                    </tbody>
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