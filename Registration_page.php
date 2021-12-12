<?php
  include('Header.php');
  if(isset($_SESSION['EMAIL'])){
      header('location: index.php');
  }

  if(isset($_POST['Ragister'])) {
      $fname= $_POST["fname"];
      $lname= $_POST["lname"];
      $mo= $_POST["mono"];
      $gender= $_POST["gender"];
      $emailid= $_POST["emailid"];
      $password= $_POST["password"];
      
      $insert="insert into register(fname,lname,mobile,gender,email,password)
                values('$fname','$lname',$mo,'$gender','$emailid','$password')";
      $quf = mysqli_query($con,$insert);
      
      if($quf){  
          echo "<script>alert('ragestration is successfull')</script>";
          header('location: index.php');
      }
      else{
        echo "<script>alert('ragestration is unsuccessfull')</script>";
      }
    }

?>
    <form method="post" action="#" name="rform">

        <table  class="regtable" border="1px" cellspacing="15">
            <tr>

            <td colspan="2">
                <h3>Ragistration form</h3>
            </td>
            </tr>
            <tr celspacing="12px">

                <td><label for="fname">First Name</label> </td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name</label></td>
                <td><input type="text" name="lname" id="lname"></td>
            </tr>
            <tr>
                <td><label for="mo.no">Mobile No.</label></td>
                <td><input type="text" name="mono"></td>
            </tr>
            <tr>
                <td><label for="gender"> Gender</label></td>
                <td><input type="radio" name="gender" id="gender" value="male"> Male
                    <input type="radio" name="gender" id="gender" value="female"> Female
                </td>
            </tr>
            <!-- <tr>
                <td><label for="city">City</label></td>
                <td><input type="text" name="city" id="city"></td>
            </tr> -->
            <tr>
                <td><label for="email id">Email ID</label></td>
                <td><input type="email" name="emailid" id="email id" placeholder="abc@gmail.com"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="Confirm Password">Confirm Password</label></td>
                <td><input type="password" name="cpassword" id="Confirm Password"></td>
            </tr>
            <tr>

                <td colspan="2">
                    <input type="submit" name="Ragister" id="ragistration" value="Ragister" class="regbutton" />
                    <input type="submit" name="Reset" id="Reset" value="Reset" class="regbutton"
                        style="background-color:red;" />
                </td>

            </tr>
        </table>
    </form>

    <?php
    include('footer.php');
    ?>