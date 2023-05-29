<?php
include('../config/functions/functionDosen.php');

$id = $_GET['id_dosen'];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'dosen_tbl.php';
    </script>
";
} else {
    echo "
    <script>
        alert('Data gagal dihapus!');
        document.location.href = 'dosen_detail.php';
    </script>
";
}
