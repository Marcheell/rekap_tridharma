<?php
include('../config/functions/functionKebijakan.php');

$id = $_GET['id_penghargaan'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'kebijakan_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'kebijakan_detail.php';
    </script>
";
}
