<?php

$server='localhost';
$user='root';
$password='';
$db='corona';

$con=mysqli_connect($server,$user,$password,$db);

/*if($con)
{
    ?>
    <script>
        alert("connection successful");
        </script>
        <?php
}
else{
     ?>
    <script>
        alert("No connection");
        </script>
        <?php
}

*/

if(!$con)
{
    alert("NO connection");
}

?>