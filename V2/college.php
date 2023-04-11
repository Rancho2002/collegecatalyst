<?php
$_GET['type'] = "Select your college";
include "./parts/_dbconnect.php";
include "./parts/_navbar.php";
$sql = "SELECT DISTINCT(cat) FROM `colleges`";
$result = mysqli_query($conn, $sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["cat"])) {
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
            <div class="flex items-center">
            <input type="text" class="h-8 md:h-12 mr-3 w-24 text-[10px] p-2 md:text-sm md:w-96 md:pr-8 md:pl-5 rounded z-0 focus:shadow focus:outline-none" placeholder="Search colleges.."  id="myInput">
           
        </div>
    </div>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class=" inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="border-b border-gray-800 bg-white">
                <tr>
                  <th scope="col" class="text-sm font-bold text-black px-6 py-4 text-left ">
                    Sl.
                  </th>
                  <th scope="col" class="text-sm font-bold text-black px-6 py-4 text-center w-3/4">
                   Colleges
                  </th>
                  <th scope="col" class="text-sm font-bold text-black px-6 py-4 text-center w-1/4">
                    Mess
                  </th>
                
                </tr>
              </thead>
              <tbody>';
    while ($row = mysqli_fetch_assoc($res)) {
      echo '<tr class="border-b-[0.5px] border-gray-400 text-center collegename hover:bg-slate-100">
                  <td class="px-6 py-4 text-sm font-bold text-gray-800 text-center">' . $sl . '</td>
                  <td class="text-sm text-[#2c1e1e] font-sans font-semibold px-6 py-4">
                  ' . $row['college'] . '
                  </td>
                  <td class="text-sm text-blue-500 font-sans px-6 py-4 hover:cursor-pointer font-bold underline">
                  <a href="/ricdynamic/V2/mess.php/?title='. $row['title'] .'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" class="md:hover:bg-sky-500 md:hover:text-white rounded-lg md:p-2 ">
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
    echo '
    <div class="h-[80vh]">
    <h1 class="text-4xl uppercase mb-10"> No data found or \'select\' field is entered.</h1>
    <div class="flex justify-center">
    <button class="select-btn"><a href="" class="hover:underline">Back to selection</a></button>
    </div>
    </div>
    ';
  }
} else {
  echo '
    <div class="w-full h-[85vh] flex flex-col justify-center items-center bg-gray-300 p-10">
    <div class="ques capitalize mb-4 font-bold">
        <h1 class="text-4xl md:text-6xl">Select</h1>
        <h1 class="text-2xl md:text-4xl">which category</h1>
        <h1 class="text-xl md:text-2xl">your college belong to?</h1>
    </div>
    <div class="bg-white w-80 md:w-[30rem] p-4 rounded-lg mb-12">
        <div class="shadow-2xl p-2 rounded-lg bg-slate-100 my-auto md:h-64">
            <form action="" method="post" class="leading-10 p-2">
                <label for="category" class="font-semibold text-blue-600 text-2xl font-serif">Select your choice</label>
                <select class="w-full mx-auto bg-slate-200 rounded-lg my-4 py-1 ring ring-blue-300 outline-none leading-[4rem] px-3" id="category" name="cat">
                    <option value="null" selected>SELECT</option>
                    <option value="sgec">STATE GOVERNMENT</option>
                    <option value="ud">UNIVERSITY</option>
                    <option value="pec">PRIVATE</option>
                    <option value="sappc">STAND ALONE PRIVATE PHARMACY</option>
                    <option value="sgpc">STATE GOVERNMENT PHARMACY</option>
                    <option value="ogec">OTHER GOVERNMENT</option>
                    <option value="pu">PRIVATE UNIVERSITY</option>
                </select>
                <div class="flex justify-center">
                    <button type="submit" class="select-btn">Enter</button>
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