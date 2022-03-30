<?php

require 'koneksi.php';

$id = $_GET["id"];
$result = mysqli_query($koneksi, "DELETE FROM tblmenu WHERE idmenu = $id");

if ($result) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
        ";
} else{
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>
        ";
}
?>