<?php
require_once "../header.php";


$id = mysqli_real_escape_string($con,$_GET['id']);
$name = mysqli_real_escape_string($con,$_GET['name']);

if (isset($_GET['id'])) {
        $sql = "SELECT * FROM stuff WHERE id='$id' AND Pname='$name'";
        $result = mysqli_query($con, $sql);
        $q_result = mysqli_num_rows($result);
        if ($q_result > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                echo "
                <div style='padding: 20px;te
                            border: 1px solid black; text-align: center;
                            border-radius: 5px; background-color: #b2f1ec'>
                             <img style='width: 300px' src='../Upload/".$row['Image']."'></img>
                        <h2 style='text-align: left'>".$row['des']."</h2>
                      </div>";
            }
        }
}
