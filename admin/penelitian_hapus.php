<?php
include('../config/functions/functionPenelitian.php');

$id = $_GET['id_penelitian'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'penelitian_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'penelitian_detail.php';
    </script>
";
}
