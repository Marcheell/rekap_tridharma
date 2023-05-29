<?php
include('../config/functions/functionPenghargaan.php');

$id = $_GET['id_penghargaan'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'penghargaan_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'penghargaan_detail.php';
    </script>
";
}
