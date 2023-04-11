<?php
include "parts/_dbconnect.php";
$send = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
  $email=$_POST['email'];
  $message = $_POST["message"];
  $sql = "INSERT INTO `contact` (`email`,`message`, `timestamp`) VALUES ('$email','$message', current_timestamp())";
  $res = mysqli_query($conn, $sql);
  if ($res) {
    $send = 1;
  } else {
    $send = 2;
  }
}
?>
<!DOCTYPE html>
<html class="scroll-smooth">

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" /> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <link rel="stylesheet" href="/ricdynamic/V2/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <title>CollegeCatalyst- <?php echo $_GET['type'] ?></title>
</head>
<body class="overflow-x-hidden">
<nav class="fixed top-0 bg-white w-full shadow-lg opacity-95" style="font-family: 'Roboto Slab', serif;">
    <div class="container m-auto flex justify-between items-center text-gray-700 w-full z-10 ">
      <div>
       <a href="/ricdynamic/V2/"><img src="/ricdynamic/V2/img/logoM.png" alt="logo" width="80" class="ml-2 inline"></a> 
        <h1 class="py-6 text-xl font-bold inline">CollegeCatalyst</h1>
      </div>
      <ul class="hidden md:flex items-center text-base font-semibold cursor-pointer gap-6">
        <li><a href="/ricdynamic/V2/" class="hover-nav py-3 px-4">Home</a></li>
        <li><a href="" class="hover-nav py-3 px-4">About</a></li>
        <li><a href="" class="hover-nav py-3 px-4">Members Area</a></li>
        <li><a href="#contact" class="hover-nav py-3 px-4">Contact Us</a></li>
        <?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo '
          <li><a href="" class="text-xl py-2 px-4">'.$_SESSION["email"].'</a></li>
          <li><a href="/ricdynamic/V2/parts/_logout.php/" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4 mr-2">Logout</a>
          </li>
          ';
        }
        else{
          echo '
          <li><a href="/ricdynamic/V2/form.php/" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4">Login</a></li>
          <li><a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4 mr-2">Sign Up</a>
          </li>
          ';
        }
        ?>
       
      </ul>
      <button
        class="md:hidden py-3 px-4 mx-2 rounded focus:outline-none group flex flex-col justify-end mr-4 md:mr-0">
        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
        <div class="w-5 h-1 bg-gray-600 mb-1"></div>
        <div class="w-5 h-1 bg-gray-600"></div>
        <div
          class="absolute top-0 -right-full opacity-0 h-screen w-8/12 bg-white border transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
          <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
            <li class="hover:bg-gray-300 py-4 px-6 w-11/12"><a href="/ricdynamic/V2/">Home</a></li>
            <li class="hover:bg-gray-300 py-4 px-6 w-11/12"><a href="">About</a></li>
            <li class="hover:bg-gray-300 py-4 px-6 w-11/12"><a href="">Members Area</a></li>
            <li class="hover:bg-gray-300 py-4 px-6 w-11/12"><a href="#contact">Contact Us</a></li>
            
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
              echo '<li><a href="" class="text-xl py-2 px-4">'.$_SESSION["email"].'</a></li>
              <li><a href="/ricdynamic/V2/parts/_logout.php/" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4 mr-2">Logout</a>
              </li>';
            }
            else{
            echo '
            <li class="hover-nav-btn bg-blue-200 rounded-lg font-bold py-2 px-4 w-11/12 my-5"><a href="">Login</a></li>
            <li class="hover-nav-btn bg-blue-200 rounded-lg font-bold py-2 px-4 w-11/12"><a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal">Sign Up</a>
            </li>';
            }
            ?>
          </ul>
        </div>
      </button>

    </div>
  </nav>
  <div class="mt-20"></div>
  <?php
  if ($send == 1) {
    echo '
  <div class="font-semibold p-3 bg-green-300" id="alertM">Success! Message sent successfully.</div>';
  } else if ($send == 2) {
    echo '
    <div class="font-semibold p-3 bg-red-300" id="alertM">Failed! Please try again.</div>';
  }
  ?>




<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Will be opening soon....
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Registration for mess owners will be started soon</p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
            </div>
        </div>
    </div>
</div>