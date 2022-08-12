<!-- <?php
include "parts/_header.php";
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Click Viewport" content="width=device-width, initial-scale=1.0">
        <title>CollegeCatalyst</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/utilis.css">
        <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
        <header id="head">
                <nav>
                        <ul>
                                <div class="logonav">
                                        <img src="/ricdynamic/img/logoM.png" width='80px' height="80px" alt="logo">
                                </div>
                                <li><a class='navlink' href="/ricdynamic/">Home</a></li>
                                <li><a class='navlink' href="/ricdynamic/#description">About</a></li>
                                <li><a class='navlink' href="/ricdynamic/#footer">Contact Us</a></li>
                                <li><a class='navlink' href="/ricdynamic/members/index.html">Members Area</a></li>
                                <li class="titleTime" style="font-size: 20px;color: white;">Time :<span id="time"
                                                style="color: rgb(255, 210, 88); text-shadow:  1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;"></span>
                                </li>
                        </ul>
                </nav>
        </header>
<main>
                <div>
                        <h1 class="headline">
                                <img src="img/sideLogo.png" width='57px' height='57px' alt="" class='anotherlogo1'>
                                <marquee>
                                        Colleges & it surroundings now in your hands
                                </marquee>
                                <img src="img/sideLogo.png" width='57px' height='57px' alt="" class='anotherlogo2'>
                        </h1>
                        <p class="description" id="description"> Nowadays, Students often face problem while admitting
                                into their new
                                college for
                                their B.tech
                                curriculam by WBJEE as there are so many colleges under WBJEE. So, CollegeCatalyst
                                brings their effort
                                to an
                                end where student can easily know everything about their newly alloted
                                college.<span class="strong">We try to include
                                        every mess & hospitals located near college under 10 Km.In others tab, student
                                        can find
                                        about restaurants,
                                        cinema complex etc. </span>Feel free to <a href="#footer">contact us</a> for
                                any
                                issue.</p>
                </div>
              
                <div class="search">
                        <input type="" id="myInput" placeholder="Search for Colleges..">
                        <img src="img/search.png" width="20px" height="20px" alt="search icon" class="searchIcon">
                </div>
                <h1 class="headline2">
                        Participating Institutions
                </h1>
                <table style="border-collapse: collapse; table-layout: fixed; width: 100%;" border="1" width="100%"
                        cellspacing="0" cellpadding="5px" class="sticky" id="myTable">
                        <tbody>
                                <tr style="height: 46px; background-color: #80ccff;" class="sticky" id="header">
                                        <th style="width: 5%; text-align: center;" class="sticky"><strong>Sl.</strong>
                                        </th>
                                        <th style="width: 50%;" class="sticky"><strong>Name of the Institute</strong>
                                        </th>
                                        <th style="width: 15%;" class="my-1 sticky">Mess</th>
                                        <th style="width: 15%;" class="my-1 sticky">Hospitals</th>
                                        <th style="width: 15%;" class="my-1 sticky">Others</th>
                                </tr>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                                <strong>PRIVATE
                                                        ENGINEERING COLLEGE
                                                        (65)</strong>
                                        </td>
                                <?php
                                include "parts/_dbconnect.php";
                                $sql="SELECT * FROM `colleges` where `cat`='pec'";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
                                echo '<tr style="height: 48px;" class="collegename">
                                        <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                        <td style="width: 50%;">'.$row['college'].'</td>
                                        <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                rel="noopener">Click
                                                                Here</a></span></td>
                                        <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                href="/ricdynamic/hospitals/"
                                                                 rel="noopener">Click Here</a></span>
                                        </td>
                                        <td style="width: 15%;"><a title="Click Here"
                                                        href="/ricdynamic/others/"
                                                         rel="noopener">Click Here</a></td>
                                </tr>';
                                }
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>STAND ALONE
                                                        PRIVATE PHARMACY
                                                        COLLEGE (21)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='sappc'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>STATE
                                                        GOVERNMENT ENGINEERING
                                                        COLLEGE (8)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='sgec'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>STATE
                                                        GOVERNMENT PHARMACY COLLEGE
                                                        (1)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='sgpc'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>OTHER
                                                        GOVERNMENT ENGINEERING
                                                        COLLEGE (1)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='ogec'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>UNIVERSITY/UNIVERSITY DEPARTMENT
                                                        (11)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='ud'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                        <strong>PRIVATE
                                                        UNIVERSITY (7)</strong>
                                        </td>
                                <?php
                                 $sql="SELECT * FROM `colleges` where `cat`='pu'";
                                 $result=mysqli_query($conn,$sql);
                                 while($row=mysqli_fetch_assoc($result)){
                                 echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">'.$row['college_id'].'</td>
                                         <td style="width: 50%;">'.$row['college'].'</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title='.$row['title'].'&college_id='.$row['college_id'].'&cat='.$row['cat'].'" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/hospitals/"
                                                                  rel="noopener">Click Here</a></span>
                                         </td>
                                         <td style="width: 15%;"><a title="Click Here"
                                                         href="/ricdynamic/others/"
                                                          rel="noopener">Click Here</a></td>
                                 </tr>';
                                 }
                                ?>
                                                        
                                                       
                                                        
                        </tbody>
                </table>
        </main>

        <footer id="footer">
                <h2>Core Members :-</h2>
                <hr style="width: 20%; border: 2px dotted white;">
                <div class="form">
                        <form action="https://sheetdb.io/api/v1/hnvxglv2w6tzt" method="post" id="sheetdb-form">
                                <input type="email" id="email" placeholder="Enter your email"
                                        aria-errormessage="Email is required " name="Email" required>
                                <input type="text" id="message" placeholder="Type your concern" name="Message">
                                <input type="hidden" name="Created" id="date" value="ki jai">
                                <button type="submit" id="index-btn">Submit</button>
                        </form>
                </div>

                <div id="members">
                        <div id="column1">
                        <p id="core1" class="core">Arijit Ghosh, RKMGEC</p>
                        <p id="core2" class="core">Niloy Accharyya, RKMGEC</p>
                               
                             
                        </div>
                        <div id="column2">
                                <p id="core3" class="core">Ratan Bhowmick, RKMGEC</p>
                                <p id="core4" class="core">Deep Sharma, RKMGEC </p>
                               
                        </div>
                      
                </div>

                <hr style="color: white; margin-top: 4px;">
                <div id="copyright">
                        <p>Copyright &copy;CollegeCatalyst2022.com---All rights
                                reserved</p>
                        <img src="img/up-arrow.png" alt="Back To Top" title="Click Here to back to top" id="backtotop"
                                onclick="backTotop()">
                </div>
        </footer>

<script src="/ricdynamic/js/script.js"></script>
</body>

</html>