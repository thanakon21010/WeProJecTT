<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
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
<body>
<div>  
<div class="sidenav">
  <h1>HERMES <i class="fas fa-bars"></i> </h1>
  <button class="dropdown-btn"> Front Office <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="http://localhost/project/index.php">Reservation</a>
    <a href="#">Check In</a>
    <a href="#">In-House</a>
  </div>
  <a href="http://localhost/project/UI.php">User</a>
</div>
<div>
    <table class="  table table-striped ">

        <tr class="bg-white  text-dark  ">
            <td>
                <h4>Agency </h4> add,delete and edit agency information
            </td>


        </tr>





    </table>
    <form>
        
            <table class="  table table-striped ">
                <tr class="bg-white   ">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><button class="button btn5 mt-2  "> +Add Agency</button></th>
                </tr>
                <tr class="bg-white  text-dark   ">
                    <td>show </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> <input type="text" name="search" id="search"><input type="submit" name="submit" value="search"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="bg-dark text-white  text-center">
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                    <th>Code</th>
                    <th>Agency Name</th>
                    <th>Sales Name</th>
                    <th>Email</th>
                    <th>#Phone</th>
                    <th>Comlession(%)</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>
                    <tr class="bg-white   text-center ">
                        <td><button class="button btn6 "> i</button></td>
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
                        <td><button class="button btn6 "> i</button></td>
                        <td><?php echo $ans['agency_code'] ?></td>
                        <td><?php echo $ans['agency_name'] ?></td>
                        <td><?php echo $ans['agency_contact_name'] ?></td>
                        <td><?php echo $ans['agency_email'] ?></td>
                        <td><?php echo $ans['agency_telno'] ?></td>
                        <td><?php echo $ans['agency_price'] ?></td>
                    </tr>




                <?php } ?>


            </table>


        </div>
                </div>
                </div>

</body>

</html>