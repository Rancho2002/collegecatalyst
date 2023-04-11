<!-- <?php
// include "parts/_header.php";
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">

    <title><?php echo $_GET['title'] ?>Mess</title>
    <link rel="shortcut icon" href="/ricdynamic/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/ricdynamic/colleges/CSS_College/mess.css">
    <link rel="stylesheet" href="/ricdynamic/colleges/CSS_College/utilis_mess.css">
    <link rel="stylesheet" href="/ricdynamic/colleges/CSS_College/responsive_mess.css">
    <link rel="stylesheet" href="/ricdynamic/colleges/CSS_College/none.css">

</head>




    <?php
    $college_id=$_GET['college_id'];
    $cat=$_GET['cat'];
    include "parts/_dbconnect.php";
    $sql="SELECT * FROM `mess` where `college_id`='$college_id' and `cat`='$cat' and `distance`<10  ORDER BY `distance`";
    $resultMess=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($resultMess);

    if($num){
    
    echo '
    <body>
    <header>
        <nav>
            <ul>
                <li><a href="/ricdynamic/index.php">Home</a></li>
                <p>Want to contribute Data in our website ??? <a href="/ricdynamic/members/"
                        style="text-decoration: none;color: rgb(0, 0, 0);font-weight: bolder;" target="_blank">&nbsp;
                        Click Here</a>
                </p>
            </ul>
        </nav>';
        
        $sql="SELECT * FROM `colleges` where `college_id`='$college_id' and `cat`='$cat'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        

        
        echo '
        <h1 class="headline">'.$row['college'] .'</h1>
      

        <div class="slideshow-container">
        ';
        

        $sql="SELECT * FROM `images` where `college_id`='$college_id'  and `cat`='$cat' ";
        $resultImg=mysqli_query($conn,$sql);
        while($rowImg=mysqli_fetch_assoc($resultImg)){
          echo '<div class="mySlides fade">
                <img src="'.$rowImg['images'].'" style="width: 100%; height: 50vh" />
            </div>';
        };
        echo '
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>



    </header>
    <div class="subheadline">
        -:Exclusive messes near college under 10 Km :-
    </div>

    <table style="border-collapse: collapse; table-layout: fixed; width: 100%;" border="1" width="100%" cellspacing="0"
        cellpadding="5">
        <tr class="theadline">
            <td style="width: 5%; text-align: center;" class="serialHead "><strong>Sl .</strong></td>
            <td style="width: 40%;" class="messHead "><strong>Name of the Mess</strong></td>
            <td style="width: 20%;" class="my-1 "><strong>Ratings[Out of 5](No. of reviews)</strong></td>
            <td style="width: 25%;" class="my-1 "><strong>Distance From College(km)</strong></td>
            <td style="width: 25%;" class="my-1 "><strong>Check Details</strong></td>
            <td style="width: 25%;" class="my-1 "><strong>Contact</strong></td>


        </tr>
        <tbody>';
        
        //! sql defined in after body tag
        $sl=1;
        while($rowMess=mysqli_fetch_assoc($resultMess)){
        echo '<tr class="tdata">
                <td style="text-align: center; width: 5%;" class="serial">'.$sl.'</td>
                <td style="width: 40%;" class="mess">'.'&nbsp;'.$rowMess['mess'].'</td>
                <td style="width: 30%;"><span style="font-size: 14px;" class="ratings">'.$rowMess['ratings'].'</span></td>
                <td style="width: 30%;"><span style="font-size: 14px;" class="distance">
                '.$rowMess['distance'].' Km
                    </span></td>

                <td style="width: 25%;"><span style="font-size: 15px;"><a title="View"
                            href="'.$rowMess['details'].'" target="_blank" rel="noopener">View</a></span>
                </td>
                <td style="width: 25%;"><span style="font-size: 14px;" class="contact">
                        <a href="tel:'.$rowMess['contact'].'" class="" title="Call Now">'.$rowMess['contact'].'</a>
                    </span></td>
            </tr>';
            $sl++;
        }
        echo '
        </tbody>
    </table>
    </main>';
    }
    else{
        echo '<body class="none"> 
        <h1 id="headline_none">No mess found under 10Km till now !</h1>';
    }
    ?>
    <footer>
        <p>Copyright &copy; <a href="/ricdynamic/index.php">CollegeCatalyst.com</a> --All Rights Reserved</p>
    </footer>
    <script src="/ricdynamic/colleges/js/script.js"></script>

</body>


</html>