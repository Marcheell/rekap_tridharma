<?php
include('../config/functions/functionPemakalah.php');

$id = $_GET['id_pemakalah'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'makalah_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'makalah_detail.php';
    </script>
";
}
