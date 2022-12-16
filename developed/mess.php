<?php
$_GET['type'] = $_GET['title'];
$college_id = $_GET['college_id'];
$cat = $_GET['cat'];
include "./parts/_navbar.php";

$sql = "SELECT * FROM `mess` where `college_id`='$college_id' and `cat`='$cat' and `distance`<10  ORDER BY `distance` limit 10";
$resultMess = mysqli_query($conn, $sql);
$num = mysqli_num_rows($resultMess);

if ($num) {
    $sl=1;
    $sql = "SELECT * FROM `colleges` where `college_id`='$college_id' and `cat`='$cat'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo
    '<h1 class="text-center text-4xl p-4 bg-slate-300">' . $row['college'] . '</h1>
        
    <div class="text-center text-2xl mt-4 font-mono">
        -: Exclusive messes near college under 10 Km :-
    </div>
    <table class="w-full text-center mt-10">
    <thead class="border-b">
        <tr>
            <th scope="col" class="w-[10%]">Sl.</th> 
            <th scope="col" class="w-[30%]">Mess</th>
            <th scope="col" class="w-[20%]">Check Details</th>
            <th scope="col" class="w-[40%]">Bookings</th>
        </tr>
    </thead>
    <tbody class="min-h-[80vh]">
        <tr>';
        while($mess=mysqli_fetch_assoc($resultMess)){
            echo '
            <td>'.$sl.'</td>
            <td>'.$mess['mess'].'</td>
            <td><a href="">Click Here</a></td>
            <td class="text-sm font-sans px-6 py-4 hover:cursor-pointer font-bold underline ">
                  <a href="https://buy.stripe.com/14k6pn8tM0aTdc44gg" class="bg-blue-500 text-white rounded-lg p-2 hover:ring-2 hover:ring-blue-300 text-[10px] md:text-sm">
                    Book here</a>
            </td>
        </tr>
            ';
            $sl++;
        }
        echo'
    </tbody>
</table>';
    
}
else{
    echo '<div class="min-h-[80vh] bg-slate-200 flex"> 
    <h1 id="" class="items-center text-center p-12 font-bold text-6xl">No mess found under 10Km till now !</h1>
    </div>';
}
?>






<?php
include "./parts/_footer.php";
?>
</body>

</html>