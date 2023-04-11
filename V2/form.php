<?php
include "./parts/_dbconnect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $user=$_POST["useremail"];
  // echo $user;
  $pass=$_POST["password"];
  $sql="SELECT * FROM `users` WHERE `useremail`='$user'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($num>=1){
    $row=mysqli_fetch_assoc($result);
    if($pass==$row['password']){
    session_start();
    $_SESSION['email']=$user;
    $_SESSION['loggedin']=true;
    header("location: /ricdynamic/V2/");
    }
    else
    echo "<h1 class=bg-red-300 text-red-700>Wrong Password</h1>";
  }
  else
  echo "<h1 class=bg-red-300 text-red-700>No user found</h1>";
}

?>


<!DOCTYPE html>
<html class="scroll-smooth">

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="/ricdynamic/V2/style.css">
</head>

<div class="p-20">
  <h1 class="text-center font-bold text-3xl mb-8" style="font-family: 'Roboto Slab', serif">Login to CollegeCatalyst</h1>
<form action="/ricdynamic/V2/form.php/" method="POST">
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" name="useremail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com" required>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="maximum 10 characters" maxlength="10" required>
  </div>
 
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>
</html>