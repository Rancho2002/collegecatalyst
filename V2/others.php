<?php
$_GET['type'] = "Select your district";
include "./parts/_dbconnect.php";
include "./parts/_navbar.php";
$sql = "SELECT `district` FROM `entertainment`";
$result = mysqli_query($conn, $sql);
// echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["district"])) { //! remember to change form name to work $post :*
  $district = $_POST["district"];
  // echo $district;
  $setSql = "SELECT * FROM `entertainment` WHERE `district`='$district'";
  $res = mysqli_query($conn, $setSql);
}
?>


<?php
$sl = 1;
if (isset($_POST["district"])) {
  $test = mysqli_num_rows($res);
  if ($test) {
    echo '
    <h1 class="text-4xl bg-slate-300 text-center p-4">Entertainment Zones near '. $_POST["district"].'</h1>'.
    

           '
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
                   Cinema Complexes
                  </th>
                  <th scope="col" class="text-sm font-bold text-black px-6 py-4 text-center w-1/4">
                    Entertainment
                  </th>
                  <th scope="col" class="text-sm font-bold text-black px-6 py-4 text-center w-1/4">
                  Restaurants
                  </th>
                
                </tr>
              </thead>
              <tbody class="min-h-[80vh]">';
    while ($row = mysqli_fetch_assoc($res)) {
      echo '<tr class="border-b-[0.5px] border-gray-400 text-center collegename hover:bg-slate-100">
                  <td class="px-6 py-4 text-sm font-bold text-gray-800 text-center">' . $sl . '</td>
                  <td class="text-sm text-[#2c1e1e] font-sans font-semibold px-6 py-4">
                  ' . $row['cinema'] . '
                  </td>
                  <td class="text-sm text-blue-500 font-sans px-6 py-4 hover:cursor-pointer font-bold underline">
                  <a href="" class="md:hover:bg-sky-500 md:hover:text-white rounded-lg md:p-2 ">
                    '.$row['tourist'].'</a>
                  </td>
                  <td class="text-sm text-[#2c1e1e] font-sans font-semibold px-6 py-4">
                  ' . $row['restaurant'] . '
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
        <h1 class="text-4xl md:text-6xl">Select your district</h1>
    </div>
    <div class="bg-white w-80 md:w-[30rem] p-4 rounded-lg mb-12">
        <div class="shadow-2xl p-2 rounded-lg bg-slate-100 my-auto md:h-64">
            <form action="" method="POST" class="leading-10 p-2">
                <label for="category" class="font-semibold text-blue-600 text-2xl font-serif">Select your choice</label>
                <select class="w-full mx-auto bg-slate-200 rounded-lg my-4 py-1 ring ring-blue-300 outline-none leading-[4rem] px-3" id="category" name="district">
                    <option value="null" selected>SELECT</option>
                    ';

  while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['district'] . '">' . $row['district'] . '</option>';
  };

  echo
  '
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