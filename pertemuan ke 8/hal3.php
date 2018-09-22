<?php 
session_start();
include("header.php");
if ($_SESSION['akses'] == "user") {
    ?>
    <script type="text/javascript">
        alert("Maaf hak akses hanya untuk admin..");
        location = "hal2.php";
    </script>
    <?php
}
echo "<br>Selamat datang di halaman3";
 ?>