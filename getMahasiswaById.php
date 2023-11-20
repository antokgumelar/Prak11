<?php
    header('Content-type:applicationjson;charset=utf-8');
    include "conn.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
    
    $q=mysqli_query("SELECT * FROM mahasiswa WHERE id=$id");
    $response = array();

    if(mysqli_num_rows($q)>0){
        $response["data"] = array();
        while($r=mysqli_fetch_array($q)){
            $mahasiswa = array();
            $mahasiswa["id"] = $r["id"];
            $mahasiswa["nama"] = $r["nama"];
            $mahasiswa["alamat"] = $r["alamat"];
            array_push($response["data"], $mahasiswa);
        }
        $response["success"] = 1;
        $response["message"] = "Data mahasiswa berhasil dibaca";
        echo json_encode($response);
    }
    else{
        $response["success"] = 0;
        $response["message"] = "Tidak ada data";
        echo json_encode($response);
    }
}
    ?>