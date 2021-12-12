<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wallpaper Library.com</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="Ragis_login.css"/>
    <link rel="stylesheet" type="text/css" href="cetegorie.css" />
    <link rel="stylesheet" type="text/css" href="Bollywood.css">
    <link rel="stylesheet" type="text/css" href="contect.css">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>

<body>
    <!-- navigiation bar Section -->
    <div>
        <table class="m" width="100%">
            <tr>
                <td width="50%" class="logo_Style">Wallpaper Library</td>

                <td width="4%" class="menu"> <a style="color:cyan" href="index.php">Home</a></td>
                <?php
                if (!isset($_SESSION['EMAIL'])) {
                ?>
                    <td width="7%" class="menu"> <a style="color:cyan" href="Registration_page.php">Ragistration</a></td>
                    <td width="5%" class="menu"> <a style="color:cyan" href="Login.php">Login</a></td>
                <?php
                }
                if (isset($_SESSION['EMAIL'])) {

                ?>
                    <td width="5%" class="menu"> <a style="color:cyan" href="Logout.php">Logout</a></td>
                <?php
                }
                ?>
                <td width="6%" class="menu"> <a style="color:cyan" href="cetegorie.php">Cetegories</a></td>
                <td width="7%" class="menu"><a style="color: cyan;" href="contact_us.php"> Contact us</a></td>
                <td width="7%" class="menu"><a style="color: cyan;" href="about_page.php"> About us</a></td>
               <?php
               if(isset($_SESSION['EMAIL']) &&  $_SESSION['EMAIL'] == 'amanpatil34122@gmail.com'){

               ?>
                <td width="7%" class="menu"><a style="color: cyan;" href="admin.php"> Admin</a></td>               <?php
               }
               ?>
            </tr>
        </table>
        <h1 style="color:gold">Free Library</h1>
        <!-- Imege-Slider Section -->
    </div>