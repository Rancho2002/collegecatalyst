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
        <li><a href="" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4">Login</a></li>
        <li><a href="" class="hover-nav-btn bg-blue-300 duration-200 rounded-lg font-bold py-2 px-4 mr-2">Sign Up</a>
        </li>
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
            <li class="hover-nav-btn bg-blue-200 rounded-lg font-bold py-2 px-4 w-11/12 my-5"><a href="">Login</a></li>
            <li class="hover-nav-btn bg-blue-200 rounded-lg font-bold py-2 px-4 w-11/12"><a href="">Sign Up</a>
            </li>
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