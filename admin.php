<?php
include('Header.php');
if(isset($_SESSION['EMAIL'])){
    header("location: ");
}
?>
<form action="admin.php" method="post" enctype="multipart/form-data">
    <table class="regtable" border="1px">
        <tr>
            <td colspan="2" align="center">
                <h2>Admin</h2>
            </td>
        </tr>
        <tr>
            <td><label for="iname">Image Name</label></td>
            <td>
                <input type="text" name="iname" id="iname" required>
            </td>
        </tr>

        <tr>
            <td><label for="ipath">Image Path</label></td>
            <td>
                <input type="file" name="ipath" id="ipath">
            </td>
        </tr>
        <tr>
            <td><label for="icetegorie">Cetegorie</label></td>
            <td>
                <select id="icetegorie" name="icetegorie">
                    <option value="bollywood">bollywood</option>
                    <option value="neture" selected>Neture</option>
                    <option value="bike">Bike</option>
                    <option value="car">Car</option>
                    <option value="cartoon">Space</option>
                </select>
            </td>

        </tr>
        <tr>
            <td><label for="idate">upload date</label></td>
            <td>
                <input type="date" name="idate" id="idate">
            </td>
        </tr>
        <tr>
            <td colspan="2" class="bt" align="center">
                <input type="submit" name="upload" value="Upload" id="upload" class="regbutton" />
                <input type="submit" name="reset" id="reset" value="Reset" class="regbutton" style="background-color:red;" />
            </td>
        </tr>


    </table>
</form>
<?php
if (isset($_POST["upload"])) {
    $name = $_POST["iname"];
    $cetegori = $_POST["icetegorie"];
    $upload_date = $_POST["idate"];

    $bollywood_folder = 'picture/bollywood/';
    $car_folder = 'picture/car/';
    $bike_folder = 'picture/bike/';
    $cartoon_folder = 'picture/cartoon/';
    $neture_folder = 'picture/neture/';

    $upload_folder = '';
    $table = '';

    if ($cetegori == "bollywood") {
        $upload_folder = $bollywood_folder;
        $table = "bollywood";
    } else if ($cetegori == "neture") {
        $upload_folder = $neture_folder;
        $table = "nature";
    } else if ($cetegori == "bike") {
        $upload_folder = $bike_folder;
        $table = "bike";
    } else if ($cetegori == "car") {
        $upload_folder = $car_folder;
        $table = "car";
    } else if ($cetegori == "cartoon") {
        $upload_folder = $cartoon_folder;
        $table = "cartoon";   
    }

    $upload_file = $upload_folder . basename($_FILES["ipath"]["name"]);
    $insert = "insert into " . $table . "(name,path,upload_date) values('$name','$upload_file','$upload_date')";
    $mysql = mysqli_query($con, $insert);

    if ($mysql) {
        move_uploaded_file($_FILES['ipath']['tmp_name'], $upload_file);
    } else {
        echo "<script>alert('upload fail')</script>";
    }
}


?>
<?php
include('footer.php');
?>