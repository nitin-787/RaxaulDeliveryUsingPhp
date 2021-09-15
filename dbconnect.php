<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "raxaulsehu_delivery";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn){
    ?>
 <!-- echo "success";
  //}

//else{ -->
            <script>
                alert("Connection not Sucessful");
        
            </script>
       <?php
       
       
}

?>