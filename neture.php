<?php
include('Header.php');
$display = mysqli_query($con,"select * from nature");
while ($row = mysqli_fetch_array($display)) {
?>
  <div class="my-img">
        <img src=<?php echo $row['path'] ?> class="img">
        <p class="link">
            <a href=<?php echo $row['path'] ?> class="view-link">
                <?php
                echo $row['name'];
                ?> 
            </a><br>
            <?php
            if (isset($_SESSION['EMAIL'])) {
                ?>
            <a href=<?php echo $row['path'] ?> class="view-link" download class="download-link">downoad</a>
            <?php
            }
            ?>
        </p>
    </div>

<?php

}

?>

<!-- <div class="section">

    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="view-link"> Wallpepar</a><br>
            <a href="picture/Neture.jpg" class="view-link" download class="download-link">downoad</a>
        </p>
    </div>
    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="view-link">HD wallpepeper </a><br>
            <a href="picture/Neture.jpg" download class="download-link">download</a>
        </p>

    </div>

    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="-view-link"> HD wallpepeper </a><br>
            <a href="picture/Neture.jpg" download class="download-link">download</a>
        </p>

    </div>aa

    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="-view-link"> HD wallpepeper </a><br>
            <a href="picture/Neture.jpg" download class="download-link">download</a>
        </p>

    </div>
    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="-view-link"> HD wallpepeper </a><br>
            <a href="picture/Neture.jpg" download class="download-link">download</a>
        </p>

    </div>
    <div class="my-img">
        <img src="picture/Neture.jpg" class="img">
        <p class="link">
            <a href="picture/Neture.jpg" class="-view-link"> HD wallpepeper </a><br>
            <a href="picture/Neture.jpg" download class="download-link">download</a>
        </p>

    </div>

</div> -->
<?php
include('footer.php');
?>