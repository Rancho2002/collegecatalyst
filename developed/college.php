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
$sl = 1;
if (isset($_POST["cat"])) {

  $test = mysqli_num_rows($res);
  if ($test) {
    echo '<div class="flex justify-between sm:px-6 bg-purple-200">';
    if ($_POST["cat"] == "pec") {
      echo '<h1 class="college-cat">Private Engineering College</h1>';
    } else if ($_POST["cat"] == "sgec") {
      echo '<h1 class="college-cat">State Government Engineering College</h1>';
    } else if ($_POST["cat"] == "ud") {
      echo '<h1 class="college-cat">UNIVERSITY/UNIVERSITY DEPARTMENT</h1>';
    } else if ($_POST["cat"] == "sappc") {
      echo '<h1 class="college-cat">STAND ALONE PRIVATE PHARMACY COLLEGE</h1>';
    } else if ($_POST["cat"] == "sgpc") {
      echo '<h1 class="college-cat">STATE GOVERNMENT PHARMACY COLLEGE</h1>';
    } else if ($_POST["cat"] == "ogec") {
      echo '<h1 class="college-cat">OTHER GOVERNMENT ENGINEERING COLLEGE</h1>';
    } else if ($_POST["cat"] == "pu") {
      echo '<h1 class="college-cat">PRIVATE UNIVERSITY</h1>';
    }
    echo '
            <div class="flex items-center md:block md:mt-10">
            <input type="text" class="h-8 md:h-12 mr-1 w-24 text-[10px] p-2 md:text-sm md:w-96 md:pr-8 md:pl-5 rounded z-0 focus:shadow focus:outline-none" placeholder="Search colleges.."  id="myInput">
        </div>
    </div>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class=" inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="border-b bg-slate-100">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left ">
                    Sl.
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center w-3/4">
                   Colleges
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center w-1/4">
                    Mess
                  </th>
                
                </tr>
              </thead>
              <tbody>';
    while ($row = mysqli_fetch_assoc($res)) {
      echo '<tr class="border-b text-center collegename">
                  <td class="px-6 py-4 text-sm font-medium text-gray-800 text-left">' . $sl . '</td>
                  <td class="text-sm text-gray-900 font-serif px-6 py-4">
                  ' . $row['college'] . '
                  </td>
                  <td class="text-sm text-gray-900 font-sans px-6 py-4 hover:bg-slate-200 hover:cursor-pointer hover:font-bold underline"><a href="">
                    Click here</a>
                  </td>
                  
                </tr>';
      $sl++;
    }
    echo '
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    ';
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
<script src="./parts/script.js"></script>
</body>

</html>