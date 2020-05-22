<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "product";
$con = mysqli_connect($server,$username,$password,$db)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="search.php">
    <input type="text" name="search" placeholder="serach">
    <button type="submit" name="submit_search">search</button>
</form>

<div>
    <?php
    $sql = "SELECT * FROM stuff";
    $result = mysqli_query($con,$sql);
    $q_result = mysqli_num_rows($result);
    if ($q_result > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<div style='padding: 20px; text-align: center'>

                    <h2>".$row['Pname']."</h2>
                    <img style='width: 300px' src='Upload/".$row['Image']."'></img>
                    <p>".$row['Price']."</p>
                    <p>".$row['id']."</p>
                 </div>";

        }
    }
    ?>
</div>
</body>
</html>