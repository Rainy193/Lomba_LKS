<?php

include '../config/controller.php';

$id = (int)$_GET['id'];

if (delete_absensi($id) > 0) {
    echo "<script>
    alert ('Data Absesnsi berhasil dihapus');
    document.location.href = 'absensi.php'
    </script>";
} else { "<script>
    alert ('Data Absensi gagal dihapus');
    document.location.href = 'absensi.php'
    </script>";
}

