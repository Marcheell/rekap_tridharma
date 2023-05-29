<?php
include('../config/functions/functionPendidikan.php');

$id = $_GET['id_pendidikan'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'pendidikan_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'pendidikan_detail.php';
    </script>
";
}
