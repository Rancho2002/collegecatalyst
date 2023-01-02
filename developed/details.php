<?php
$_GET['type'] =$_GET["name"];
include "./parts/_dbconnect.php";
$sql = "SELECT * FROM `mess` where `mess`='$_GET[name]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
include "./parts/_navbar.php";
?>
<div class="min-h-[80vh] bg-slate-200"> 

    <h1 id="" class="pt-7 pl-7 font-bold text-4xl">We are collecting data of <i><?php echo $row["mess"] ?><i> right now !</h1><br>
    <h2 class=" p-12 font-bold text-4xl">Till now we have, contact: <?php echo $row["contact"] ?> and for location <u><a href="<?php echo $row["details"] ?>">click here</a></u> </h2>
    </div>

