<?php
include "header.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>search</h1>
<div>
    <?php
    if (isset($_POST['submit_search'])){
        $search = mysqli_real_escape_string($con,$_POST['search']);
        $sql = "SELECT * FROM stuff WHERE id LIKE '%$search%' OR Pname LIKE '%$search%'
        OR Image LIKE '%$search%' OR Price LIKE '%$search%'";
        $result = mysqli_query($con,$sql);
        $q_result = mysqli_num_rows($result);
        echo "there are ".$q_result." result";
if ($q_result > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='article.php?title=".$row['Pname']."&date=".$row['Price']."'>
<div style='padding: 20px; text-align: center'>
                    <p> Id = ".$row['id']."</p>
                    <h2>Name = ".$row['Pname']."</h2>
                    <img style='width: 300px' src='Upload/".$row['Image']."'></img>
                    <p>Price = ".$row['Price']."</p>
                    
             </div></a>";
    }
}else{
    echo "the title that you searched was not found";
}

}
?>
</div>