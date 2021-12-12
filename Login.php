<?php
include('Header.php');
if(isset($_SESSION['EMAIL'])){
    header('location: index.php');
}

if (isset($_POST["Login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $select = "select * from register where email='$email' and password='$password'";
    $quf    = mysqli_query($con, $select);
    $row = mysqli_fetch_array($quf);
    if ($row['email'] == $email && $row['password'] == $password) {
        $_SESSION['EMAIL'] = $email;
        header('location: index.php');
    } else {
        echo  "<script>alert('Login unsuccessfull')</script>";
    }
}
?>
<form name="loginform" method="post" action="#">
    <table class="regtable" border="1px" cellspacing="15">
        <tr>
            <td colspan="2">
                <h3>Login Page</h3>
            </td>
        </tr>
        <tr>
            <td><label for="email"> Email-ID</label></td>
            <td>
                <input type="email" name="email" id="email" placeholder="abc@gmail.com" class="border">
            </td>
        </tr>
        <tr>
            <td><label for="password"> Password</label></td>
            <td>
                <input type="password" name="password" id="password" class="border">
            </td>
        </tr>
        <tr>

            <td colspan="2">
                <input type="submit" name="Login" value="Login" id="login" class="regbutton">
                <input type="submit" name="reset" value="Reset" id="reset" class="regbutton" style="background-color: red;" />
            </td>

        </tr>

    </table>
</form>

<?php
include('footer.php');
?>