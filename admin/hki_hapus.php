<?php
include('../config/functions/functionHki.php');

$id = $_GET['id_hki'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'hki_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'hki_detail.php';
    </script>
";
}
