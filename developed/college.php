<?php
$_GET['type'] = "Select your college";
include "./parts/_dbconnect.php";
include "./parts/_navbar.php";
$sql = "SELECT DISTINCT(cat) FROM `colleges`";
$result = mysqli_query($conn, $sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat = $_POST["cat"];
    $setSql = "SELECT * FROM `colleges` WHERE `cat`='$cat'";
    $res = mysqli_query($conn, $setSql);
}
?>

<?php
if (isset($_POST["cat"])) {
    $row = mysqli_fetch_assoc($res);
    if ($row && $_POST["cat"]=="pec") {
        echo '<h1>Private Engineering College</h1>';
        while ($row = mysqli_fetch_assoc($res)) {
            echo $row['college'] . '<br>';
        }
    } else {
        echo "No data found";
    }
} else {
    echo '<div class="w-full h-[85vh] flex flex-col justify-center items-center bg-gray-300 p-10">
    <div class="ques">
        <h1 class="text-2xl md:text-4xl font-bold mb-10">Select which category your college belong to?</h1>
    </div>
    <div class="bg-white w-80 md:w-[30rem] p-4 rounded-lg mb-12">
        <div class="shadow-2xl p-2 rounded-lg bg-slate-100 my-auto md:h-64">
            <form action="" method="post" class="leading-10">
                <label for="category" class="font-semibold ">Select your choice</label>
                <select class="w-full mx-auto bg-slate-200 rounded-lg my-4 py-1 ring ring-blue-300 outline-none leading-[4rem]" id="category" name="cat">
                    <option value="null" selected>Select</option>
                    <option value="sgec">STATE GOVERNMENT</option>
                    <option value="ud">UNIVERSITY</option>
                    <option value="pec">PRIVATE</option>
                    <option value="sappc">STAND ALONE PRIVATE PHARMACY</option>
                    <option value="sgpc">STATE GOVERNMENT PHARMACY</option>
                    <option value="ogec">OTHER GOVERNMENT</option>
                    <option value="pu">PRIVATE UNIVERSITY</option>
                </select>
                <div class="flex justify-center">
                    <button type="submit" class="p-2 bg-blue-400 rounded-lg text-sm font-bold   mt-24">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>';
}

include "./parts/_footer.php";
?>