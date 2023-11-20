<?php
    header('Content-type:application/json;charset=utf-8');
    include "conn.php";

    if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $q=mysqli_query("DELETE FROM mahasiswa WHERE id='$id'");
        $response = array();

        if($q) {
            $response["success"] = 1;
            $response["message"] = "Data berhasil dihapus";
            echo json_encode($response);
        }
        else{
            $response["success"] = 0;
            $response["message"] = "Data gagal dihapus";
            echo json_encode($response);
        }
    }
    else{
        $response["success"] = -1;
        $response["message"] = "Data kosong";
        echo json_encode($response);
    }
    ?>