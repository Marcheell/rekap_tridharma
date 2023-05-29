<?php
include('../config/functions/functionPengabdian.php');

$id = $_GET['id_pengabdian'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'pengabdian_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'pengabdian_detail.php';
    </script>
";
}
