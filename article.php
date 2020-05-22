<?php
include "header.php";



    $title = mysqli_real_escape_string($con,$_GET['title']);
    $date = mysqli_real_escape_string($con,$_GET['date']);

    $sql = "SELECT * FROM stuff WHERE Pname='$title' AND Price='$date'";
    $result = mysqli_query($con,$sql);
    $q_result = mysqli_num_rows($result);
    if ($q_result > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<div style='padding: 20px'>
                    <h2>".$row['Pname']."</h2>
                    <img style='width: 300px' src='Upload/".$row['Image']."'></img>
                    <p>".$row['Price']."</p>
                    <p>".$row['id']."</p>
                    <a href='des/des1.php?id=".$row['id']."&name=".$row['Pname']."'>Description</a>
                 </div>";
        }
    }
    ?>


