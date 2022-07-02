<?php

include('connect.php');

session_start();

if (!isset($_SESSION['id'])) {
    header('location:login.php');
} else {

    $message = "<h2>" . $_SESSION['id'] . "</h2>";
}
$userId = $_SESSION['id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <title>Social Media</title>
</head>



<body style="background: #d3eff7;" >

    <!--start nav bar-->

                <!-- /////////////////////////////////////////////////////////////// profile -->
                <?php

                $sql = "SELECT * FROM `user` WHERE `id` = '$userId'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $Email =$row['email'];
                    $Name = $row['name'];
                    $imguser = $row['img'];
                    $date = $row['date'];
                ?>
                    <div style=" width="500px" height="500px"" class="">
                        <div class="">
                            <h3 style="margin-left: 560px;">الصورة الشخصية</h3>
                            <img style="margin-left: 600px;" src=" <?= $imguser ?>" alt=""width="100px" height="100px">
                        </div>
                        <hr>
                        <div class="ostCard">
                        <h3 style="margin-left: 550px;" class="nme"> <?php echo "اسم المستخدم" ?></h3>
                            <h3 style="margin-left: 650px;" class="nme"> <?php echo $Name; ?></h3>
                        </div>
                        <hr>
                        
                    
                    <div class="tCard">
                    <h3 style="margin-left: 600px;" class="me"> <?php echo "الايميل" ?></h3>
                            <h3 style="margin-left: 560px;" class="me"> <?php echo $Email; ?></h3>
                        </div>
                        </div>
                <?php } ?>
                <!-- ///////////////////////////////////////////////////////////////// -->

            </div>
        </div>
    </nav>
    <!--end nav bar-->

   