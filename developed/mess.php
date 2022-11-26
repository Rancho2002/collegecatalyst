<?php
$_GET['type'] = $_GET['title'];
$college_id = $_GET['college_id'];
$cat = $_GET['cat'];
include "./parts/_navbar.php";

$sql = "SELECT * FROM `mess` where `college_id`='$college_id' and `cat`='$cat' and `distance`<10  ORDER BY `distance`";
$resultMess = mysqli_query($conn, $sql);
$num = mysqli_num_rows($resultMess);

if ($num) {
    $sql = "SELECT * FROM `colleges` where `college_id`='$college_id' and `cat`='$cat'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo
    '<h1 class="text-center text-4xl p-4 bg-slate-300">' . $row['college'] . '</h1>
        
    <div class="text-center text-2xl mt-4 font-mono">
        -: Exclusive messes near college under 10 Km :-
    </div>
    
           ';
}

?>

<table class="w-full text-center mt-10">
    <thead class="border-b">
        <tr>
            <th scope="col" class="w-[10%]">Sl.</th> 
            <th scope="col" class="w-[40%]">Mess</th>
            <th scope="col" class="w-[20%]">Check Details</th>
            <th scope="col" class="w-[30%]">Book Now</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Shree OM mess</td>
            <td><a href="">Click Here</a></td>
            <td>
                <form class="">
                    <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Kj7xIO99TQMtP4" async> </script>
                </form>
            </td>
        </tr>
    </tbody>
</table>





</body>

</html>