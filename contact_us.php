<?php
    include('Header.php');
    if(isset($_SESSION['EMAIL'])){
        header('location:');
    }

    if(isset($_POST['Send'])) {
        $fname= $_POST["fname"];
        $email= $_POST["email"];
        $msg= $_POST["msg"];
        $insert="insert into contact(fname,email,msg)
        values('$fname','$email','$msg')";
$quf = mysqli_query($con,$insert);

if($quf){
    echo "<script>alert('contact  is successfull')</script>";
    header('location: index.php');
}
else{
  echo "<script>alert('ragestration is unsuccessfull')</script>";
}
 }

    ?>
<p align="center" class="bg">
        Contact Us<br>Achive 1000 is here to provide wallpeper you with more information answer<br>
        any question you may havean create an effective solution for your instution needs</p>

    <div class="contact">

        <form name="contetform" method="post" action="#">
            <table class="contact-table">
                <tr>
                    <td colspan="2" align="center">
                        <h1>Contact us</h1>
                    </td>
                </tr>
                <tr>
                    <td class="name-email">
                        <label> Full Name :</label>
                        <input type="text" name="fname" id="fullname" class="contact-e-n">
                    </td>.
                </tr>
                <tr>
                    <td class="name-email">
                        <label>Email-Id:&nbsp;&nbsp;</label>
                        <input type="email" name="email" id="email" class="contact-e-n">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="massege">massege</label>
                        <textarea type="text" rows="4" cols="30" name="msg"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="Send" id="send" value="Send" class="send">
                    </td>
                </tr>
            </table>
        </form>


    </div>
    <?php
    include('footer.php');
    ?>