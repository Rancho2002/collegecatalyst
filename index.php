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
        <main>
                
                <div class="search">
                        <input type="" id="myInput" placeholder="Search for Colleges..">
                        <img src="img/search.png" width="20px" height="20px" alt="search icon" class="searchIcon">
                </div>
                <h1 class="headline2">
                        Participating Institutions
                </h1>
                <table style="border-collapse: collapse; table-layout: fixed; width: 100%;" border="1" width="100%" cellspacing="0" cellpadding="5px" class="sticky" id="myTable">
                        <tbody>
                                <tr style="height: 46px; background-color: #80ccff;" class="sticky" id="header">
                                        <th style="width: 5%; text-align: center;" class="sticky"><strong>Sl.</strong>
                                        </th>
                                        <th style="width: 60%;" class="sticky"><strong>Name of the Institute</strong>
                                        </th>
                                        <th style="width: 35%;" class="my-1 sticky">Mess</th>
                                        <!-- <th style="width: 15%;" class="my-1 sticky">Hospitals</th>
                                        <th style="width: 15%;" class="my-1 sticky">Others</th> -->
                                </tr>
                                <?php
                                include "parts/_dbconnect.php";
                                ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                                <strong>STATE
                                                        GOVERNMENT ENGINEERING
                                                        COLLEGE (8)</strong>
                                        </td>
                                        <?php
                                        $sql = "SELECT * FROM `colleges` where `cat`='sgec' ORDER BY college_id DESC";
                                        $result = mysqli_query($conn, $sql);
                                        $sl = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $sl . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                        </tr>';

                                                $sl++;
                                        }
                                        ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                                <strong>UNIVERSITY/UNIVERSITY DEPARTMENT
                                                        (11)</strong>
                                        </td>
                                        <?php

                                        $sql = "SELECT * FROM `colleges` where `cat`='ud'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                 </tr>';
                                        }
                                        ?>
                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                                <strong>PRIVATE
                                                        ENGINEERING COLLEGE
                                                        (65)</strong>
                                        </td>
                                        <?php
                                        $sql = "SELECT * FROM `colleges` where `cat`='pec' order by college_id";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                        <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                        <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                        <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                rel="noopener">Click
                                                                Here</a></span></td>
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

                                        $sql = "SELECT * FROM `colleges` where `cat`='sappc'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
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

                                        $sql = "SELECT * FROM `colleges` where `cat`='sgpc'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
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

                                        $sql = "SELECT * FROM `colleges` where `cat`='ogec'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                 </tr>';
                                        }
                                        ?>


                                <tr style="height: 46px; background-color: #f1c40f;">
                                        <td style="width: 100%;" colspan="5" class="miniheadline" id="collegetype">
                                                <strong>PRIVATE
                                                        UNIVERSITY (7)</strong>
                                        </td>
                                        <?php

                                        $sql = "SELECT * FROM `colleges` where `cat`='pu'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr style="height: 48px;" class="collegename">
                                         <td style="text-align: center; width: 5%;">' . $row['college_id'] . '</td>
                                         <td style="width: 50%;" class="tdname">' . $row['college'] . '</td>
                                         <td style="width: 15%;"><span style="font-size: 14px;"><a title="Click Here"
                                                                 href="/ricdynamic/mess.php/?title=' . $row['title'] . '&college_id=' . $row['college_id'] . '&cat=' . $row['cat'] . '" target="_blank"
                                                                 rel="noopener">Click
                                                                 Here</a></span></td>
                                 </tr>';
                                        }
                                        ?>



                        </tbody>
                </table>
        </main>

        <footer id="footer" style="position: relative;">
                <img src="img/logo.jpeg" alt="" width="40px" style="position: absolute;top:0;left:2px;top:4px; border-radius: 10px;">
                <h2 style="margin-left:40px ;">Core Members :-</h2>
                <hr style="width: 20%; border: 2px dotted white;">
                <div class="form">
                        <form action="https://sheetdb.io/api/v1/hnvxglv2w6tzt" method="post" id="sheetdb-form">
                                <input type="email" id="email" placeholder="Enter your email" aria-errormessage="Email is required " name="Email" required>
                                <input type="text" id="message" placeholder="Type your concern" name="Message">
                                <!-- <input type="hidden" name="Created" id="date" value="ki jai"> -->
                                <button type="submit" id="index-btn">Submit</button>
                        </form>
                </div>

                <div id="members">
                        <div id="column1">
                                <p id="core1" class="core">Arijit Ghosh, RKMGEC</p>
                                <p id="core2" class="core">Niloy Acharyya, RKMGEC</p>


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
                        <img src="img/up-arrow.png" alt="Back To Top" title="Click Here to back to top" id="backtotop" onclick="backTotop()">
                </div>
        </footer>

        <script src="/ricdynamic/js/script.js"></script>
</body>

</html>