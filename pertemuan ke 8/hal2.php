<?php 
session_start();
include("header.php");
 if ($_SESSION['akses'] == "admin") {
    ?>
    <script type="text/javascript">
        alert("Maaf hak akses hanya untuk admin..");
        location = "hal3.php";
    </script>
    <?php
 }
echo "<br>Selamat datang di halaman2";
?>
