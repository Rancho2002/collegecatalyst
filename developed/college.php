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
<div class="flex justify-between sm:px-6 bg-purple-200">
    <h1 class="p-4 font-bold md:text-2xl font-mono ">Private Engineering College</h1>
    <div class="hidden md:block">
        <input type="text" class="h-12 mt-2 w-96 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none" placeholder="Search colleges..">
        <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500 mt-2 "></i>
    </div>
</div>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b ">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Sl
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
               Colleges
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                Mess
              </th>
            
            </tr>
          </thead>
          <tbody>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-left">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                ramkrishna mahato govt college
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              
            </tr>
            <tr class="border-b text-center">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-left">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                ramkrishna mahato govt college
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    <?php
    if (isset($_POST["cat"])) {

        $test = mysqli_num_rows($res);
        if ($test) {
            if ($_POST["cat"] == "pec") {
                echo '<h1 class="bg-purple-200 p-4 font-bold md:text-2xl drop-shadow-lg font-mono">Private Engineering College</h1>';
            } else if ($_POST["cat"] == "sgec") {
                echo '<h1>State Government Engineering College</h1>';
            } else if ($_POST["cat"] == "ud") {
                echo '<h1>UNIVERSITY/UNIVERSITY DEPARTMENT</h1>';
            } else if ($_POST["cat"] == "sappc") {
                echo '<h1>STAND ALONE PRIVATE PHARMACY COLLEGE</h1>';
            } else if ($_POST["cat"] == "sgpc") {
                echo '<h1>STATE GOVERNMENT PHARMACY COLLEGE</h1>';
            } else if ($_POST["cat"] == "ogec") {
                echo '<h1>OTHER GOVERNMENT ENGINEERING COLLEGE</h1>';
            } else if ($_POST["cat"] == "pu") {
                echo '<h1>PRIVATE UNIVERSITY</h1>';
            }
            while ($row = mysqli_fetch_assoc($res)) {
                echo $row['college'] . '<br>';
            }
        } else {
            echo "No data found";
        }
    } else {
        echo '
    <div class="w-full h-[85vh] flex flex-col justify-center items-center bg-gray-300 p-10">
    <div class="ques">
        <h1 class="text-2xl md:text-4xl font-bold mb-10">Select which category your college belong to?</h1>
    </div>
    <div class="bg-white w-80 md:w-[30rem] p-4 rounded-lg mb-12">
        <div class="shadow-2xl p-2 rounded-lg bg-slate-100 my-auto md:h-64">
            <form action="" method="post" class="leading-10 p-2">
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